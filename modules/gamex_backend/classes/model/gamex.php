<?php 
	
abstract class Model_Gamex2 extends ActiveRecord\Model {
	private static $inflector = null;
	public static $missing_delimeter = '_';
	
	static $current_user = null;
	static $current_user_id = null;
	static $current_user_shard_id = null;
	static $connection = 'development'; 
	
	public static $kiwi_pk_hash = array();
	public static $kiwi_sharded_models = array();
	
	static $kiwi_mc = null;
	public static $mc_classes = array();
	public static $mc_user_set_classes = array();
	public static $composite_key_tables = array();
	public static $mc_expiry_time = 900;
	public static $mc_market_expiry_time = 1296000;
	public static $mc_enabled = FALSE;
	public static $mc_supress_exceptions = FALSE;
	public static $apc_classes = array();
	public static $apc_enabled = FALSE;
	public static $static_level_id = 1;
	public static $mc_transaction_elements = array();
	public static $mc_transaction_active = FALSE;
	public static $mc_rollback_probability = 0;
	public static $apc_memcache_key_prefix = "KW_";			// this should not contain '#'
	public static $market_update_in_progress = "market_update_in_progress";
	public static $is_market_update_in_progress = FALSE;
	public static $is_call_from_lower_version = FALSE;
	public static $admin_connection_classes = array();
	private $__in_after_save = false;	
	//this after save callback is responsible for saving object to memecache after saving it to DB
	public static $after_save = array('save_to_memcache', 'compute_hash_verifier');
	
	public static function get_static_level() {
		return Model_Kiwi::$static_level_id;
	}
	
	public function compute_hash_verifier_if_null(){
		if(Kohana::$config->load('gameconfig.secure_client_db')){
			$classname = static::get_classname(get_class($this));
			$config = Kohana::$config->load("gameconfig.sync_classes");
			if(array_search($classname, $config) !== FALSE && $this->hash_verifier === NULL){
				$this->compute_hash_verifier();
			}
		}
	}
	
	public function compute_hash_verifier(){
		if(Kohana::$config->load('gameconfig.secure_client_db')){
			$config = Kohana::$config->load("gameconfig.sync_classes");
			$classname = static::get_classname(get_class($this));
			
			if(array_search($classname, $config) !== FALSE){
				$data = $this->get_md5_data();
				print '-------DATA is'.$data;
				$hash_key = Kohana::$config->load('gameconfig.hash_key');
				$hash_verifier = md5($data.$hash_key);
				if(!$this->__in_after_save){	
					$this->__in_after_save = true;
					$this->hash_verifier = $hash_verifier;
					$this->update();	
				}
				$this->__in_after_save = false;
			}
		}
	}
	
	public function get_md5_data(){
		$data = "";
		$classname = static::get_classname(get_class($this));
		foreach($this->attributes() as $attr => $value){
			
			if($attr !== 'version' && $attr !== 'hash_verifier'){
				$attr_value = $this->$attr;
					if($attr_value === NULL)
						$attr_value = "null";
					print $attr.'#####'.$this->$attr;
				$data = $data.$attr_value;
			}
		}
		return $data;
	}
	
	public static function set_static_level($level) {
		Model_Kiwi::$static_level_id = $level;
	}
	
	public static function switch_connection_for_model($model_name, $connection_name){
		$clazzname = 'Model_' . $model_name;
		$clazzname::$connection = $connection_name;
	}
	
	public static function switch_connection($connection_name){
		foreach(static::$kiwi_sharded_models as $sharded_model){
			Model_Kiwi::switch_connection_for_model($sharded_model, $connection_name);
		}
		Kohana::$log->add(Log::DEBUG, "Connection switch of sharded_classes to this connection: ".$connection_name);
	}
	
	public static function set_memcache($mc){
		Model_Kiwi::$kiwi_mc = $mc;
		Model_Kiwi::$mc_enabled = TRUE;
	}
	
	public static function get_memcache(){
		return Model_Kiwi::$kiwi_mc;
	}
	
	public static function get_info_memcache(){
		$stats = Model_Kiwi::$kiwi_mc->getStats();
		print_r ($stats);
		foreach($stats as $key => $status)
		{
			echo '<br />ServerName:Port - ' . $key;
	 		echo "<table border='1'>";
			
			echo "<tr><td>Memcache Server version:</td><td> ".$status ["version"]."</td></tr>";
			echo "<tr><td>Process id of this server process </td><td>".$status["pid"]."</td></tr>";
			echo "<tr><td>Number of seconds this server has been running </td><td>".$status ["uptime"]."</td></tr>";
			echo "<tr><td>Accumulated user time for this process </td><td>".$status ["rusage_user_seconds"]." seconds</td></tr>";
			echo "<tr><td>Accumulated system time for this process </td><td>".$status ["rusage_system_seconds"]." seconds</td></tr>";
			echo "<tr><td>Total number of items stored by this server ever since it started </td><td>".$status ["total_items"]."</td></tr>";
			echo "<tr><td>Number of open connections </td><td>".$status ["curr_connections"]."</td></tr>";
			echo "<tr><td>Total number of connections opened since the server started running </td><td>".$status ["total_connections"]."</td></tr>";
			echo "<tr><td>Number of connection structures allocated by the server </td><td>".$status ["connection_structures"]."</td></tr>";
			echo "<tr><td>Cumulative number of retrieval requests </td><td>".$status ["cmd_get"]."</td></tr>";
			echo "<tr><td> Cumulative number of storage requests </td><td>".$status ["cmd_set"]."</td></tr>";
			
			$percCacheHit=((real)$status ["get_hits"]/ (real)$status ["cmd_get"] *100);
			$percCacheHit=round($percCacheHit,3);
			$percCacheMiss=100-$percCacheHit;
			
			echo "<tr><td>Number of keys that have been requested and found present </td><td>".$status ["get_hits"]." ($percCacheHit%)</td></tr>";
			echo "<tr><td>Number of items that have been requested and not found </td><td>".$status ["get_misses"]."($percCacheMiss%)</td></tr>";
			
			$MBRead= (real)$status["bytes_read"]/(1024*1024);
			
			echo "<tr><td>Total number of bytes read by this server from network </td><td>".$MBRead." Mega Bytes</td></tr>";
			        $MBWrite=(real) $status["bytes_written"]/(1024*1024) ; 
			        echo "<tr><td>Total number of bytes sent by this server to network </td><td>".$MBWrite." Mega Bytes</td></tr>"; 
			        $MBSize=(real) $status["limit_maxbytes"]/(1024*1024) ; 
			        echo "<tr><td>Number of bytes this server is allowed to use for storage.</td><td>".$MBSize." Mega Bytes</td></tr>"; 
			        echo "<tr><td>Number of valid items removed from cache to free memory for new items.</td><td>".$status ["evictions"]."</td></tr>";
			
			echo "</table>";  
		}

	}
	
	public static function get_table_name($classname){
		$modelname = static::get_modelname($classname);
		$table_name = $modelname::$table_name;
		if(! $table_name){
			return Model_Kiwi::pluralize( Model_Kiwi::camelcase_to_underscore($classname));
		}
		return $table_name;
	}
	
	public static function get_modelname($classname){
		return 'Model_'.$classname;	
	}
	
	public static function get_classname($modelname){
		return substr($modelname, strlen('Model_'));	
	}
	
	public static function get_inflector(){
		if(Model_Kiwi::$inflector == null){
			Model_Kiwi::$inflector =  ActiveRecord\Inflector::instance() ;
		}
		return Model_Kiwi::$inflector;
	}
	
	public static function camelcase_to_underscore($str) {
		$inflector = Model_Kiwi::get_inflector();
		return $inflector->uncamelize($str);
	}
	
	public static function underscore_to_camelcase($str){
		$inflector = Model_Kiwi::get_inflector();
		return ucfirst($inflector->camelize($str));
	}
	
	public static function model_name($tablename){
		return 'Model_'. Model_Kiwi::underscore_to_camelcase(Model_Kiwi::singularize($tablename));
	}
	
	//AT specific => its not getting activity and activities
	public static function pluralize($str){
		//if(substr($str, -7) == 'ctivity') return substr($str,0,-7).'ctivities';
		return ActiveRecord\Utils::pluralize($str);
	}
	
	
	public static function singularize($str){
		//if(substr($str, -9) == 'ctivities') return substr($str,0,-9).'ctivity'; 
		return ActiveRecord\Utils::singularize($str);
	}
	
	//this is a Util level function - returns mysql style datetime - will refactor later
	public static function now(){
		return date('Y-m-d H:i:s', time());
	}
	
	//this is a Util level function - t seconds ago - returns mysql style datetime - will refactor later
	public static function ago($t){
		return date('Y-m-d H:i:s', time()-$t);
	}
	
	//this is a Util level function + t seconds after - returns mysql style datetime - will refactor later
	public static function later($t){
		return date('Y-m-d H:i:s', time()+$t);
	}
	
	//this is a Util level function - returns mysql style datetime of today at 00:00:00 hours - will refactor later
	public static function today(){
		return date('Y-m-d', time());
	}
	
	//this is a Util level function - returns mysql style datetime of starting of the week at 00:00:00 hours - will refactor later
	// Sunday is assumed as starting of the week
	public static function week(){
		$w = date("w", time());
		return date('Y-m-d', time() - $w*24*60*60 );
	}
	
	//this is a Util level function - t seconds before the give time - returns mysql style datetime - will refactor later
	public static function agoFromTime($time, $t){
		return date('Y-m-d H:i:s', $time-$t);
	}
	
	public static function laterFromTime($time, $t){
		return date('Y-m-d H:i:s', $time+$t);
	}
	
	public static function get_latest_market_version(){
		if(Model_Kiwi::$apc_enabled || Model_Kiwi::$mc_enabled){
			$latest_market_version = static::get_object_from_apc_mem_cache( Model_Kiwi::latest_version_key());
			if($latest_market_version === FALSE){
				Kohana::$log->add(Log::DEBUG, "latest market versoin not found in apc or memcache (key: ${latest_market_version}). getting it from DB");
				$populate_file = "/tmp/".Model_Kiwi::$apc_memcache_key_prefix."populate_apc";
				if (!file_exists($populate_file)){
					system("touch $populate_file");
				}
				Kohana::$log->add(Log::EMERGENCY, "APC/MC key for the latest market version NOT FOUND");
				throw new Exception('APC cache key not found ... ');
			}
		}else{
			$latest_market_version = Model_TableVersion::global_version();
		}
		return $latest_market_version;
	}
	
	public static function set_latest_market_version($latest_market_version){
		$latest_version_key = static::latest_version_key();
		if(Model_Kiwi::$apc_enabled){
			apc_store($latest_version_key, $latest_market_version);
			Kohana::$log->add(Log::DEBUG, "stored the value $latest_market_version in apc cache with key - $latest_version_key ");
		}else{
			Kohana::$log->add(Log::DEBUG, "APC is disabled");
		}
		if(Model_Kiwi::$mc_enabled){
			static::mc_set($latest_version_key, $latest_market_version);
			Kohana::$log->add(Log::DEBUG, "stored the value $latest_market_version in memcache cache with key - $latest_version_key ");
		}else{
			Kohana::$log->add(Log::DEBUG, "Memcache is disabled");
		}
	}
	
	/**
	 * 
	 * Get the rows updated after $last_version. Fetch from apc, on failure try memcache,
	 * If memcache also doesn't have it, raise a request to update APC/MC for current version
	 */
	public static function updated_models($classname, $last_version, $current_version , $user_diff = null){
		if (Model_Kiwi::$apc_enabled || Model_Kiwi::$mc_enabled){
			
			$list = static::updated_models_from_cache($classname, $last_version, $current_version , $user_diff);
			if($list === FALSE){
				// code to refresh cache by creating a file for cron job to monitor
				$populate_file = "/tmp/".Model_Kiwi::$apc_memcache_key_prefix."populate_apc";
				if (!file_exists($populate_file)){
					system("touch $populate_file");
				}
				Kohana::$log->add(Log::EMERGENCY, "APC/MC keys for the current version - $current_version for this class - $classname NOT FOUND");
				throw new Exception('APC cache key not found ... ');
			}
		}else{
			// No cache enabled:
			// if market_update is in progress, then we should raise exception
			if(Model_Kiwi::$is_market_update_in_progress){
				throw new Exception('Market update in progress, no DB fetch allowed');
			}
			$sync_table = Model_Kiwi::get_table_name($classname);
			$diff_query = "select * from ".$sync_table." where version > ?";
			$sync_model = 'Model_'.$classname;
			$r = new ReflectionClass($sync_model);
			$ar_model = $r->newInstanceArgs( array() );
			$list = $ar_model->find_by_sql($diff_query, array($last_version));
		}
		return $list;
	}
	
	public static function updated_models_from_cache($classname, $last_version, $current_version , $user_diff = null){
		$market_class_key = static::market_key($classname, $current_version);
		$list = static::get_object_from_apc_mem_cache($market_class_key);
		if($list === FALSE) {
			Kohana::$log->add(Log::WARNING, "Did not find the list of models for $classname , last version - $last_version, current version - $current_version");
			return FALSE;
		}
		else {
			Kohana::$log->add(Log::DEBUG, " Found the list of updated models in cache with key - $market_class_key");
		}
		//filter the objects
		$filtered_list = array();

		$class_id = static::camelcase_to_underscore($classname).'_id';

		$class_id_alternate = static::camelcase_to_underscore($classname);
		
		$class_diff = null;

		if ($user_diff != null && isset($user_diff[$classname])) {
			$class_diff = $user_diff[$classname];
		}

		Kohana::$log->add(Log::DEBUG , 'class id is '.$class_id);

		foreach($list as $obj) {
								
			$modified = false;
			
			$to_remove = false;
			
			if ($class_diff != null) {
				
				$row_id = null;
				
				try {
					$row_id = $obj->read_attribute($class_id);
				} catch (Exception $e) {
					try {
						$row_id = $obj->read_attribute($class_id_alternate);
					} catch (Exception $e) {
							
					}	
				}
					
				if (isset($row_id) && in_array($row_id , array_keys($class_diff))) {
					$row_diff = $class_diff[$row_id];
						
					foreach($row_diff as $column => $value_arr) {

						$value = $value_arr[0];
						$type = $value_arr[1];
						
						if ($type == 'Absolute') {
							Kohana::$log->add(Log::DEBUG , 'CHANGING VALUE  OF '.$column.' FROM  '.$obj->$column.' TO VALUE '.$value.' FOR ROW '.$row_id.' FOR TABLE '.$classname);
							$obj->$column = $value;
						} else if ($type == 'Discount') {
							$original = $obj->$column;
							try {
								$modified = floatval($original)*(1 - (floatval($value)/100));
								$obj->$column = $modified;
								
								Kohana::$log->add(Log::DEBUG , 'CHANGING VALUE  OF '.$column.' FROM  '.$original.' TO VALUE '.$modified.' FOR ROW '.$row_id.' FOR TABLE '.$classname);
							} catch (Exception $e) {
								
							}
						} else if ($type == 'Remove') {
							$to_remove = true;
						}
					}
						
					Kohana::$log->add(Log::DEBUG , 'ROW MATCH '.$classname.' '.$row_id);
						
					$modified = true;
				}

				$all = 'ALL';

				if (in_array($all, array_keys($class_diff))) {
					$row_diff = $class_diff[$all];
						
					foreach($row_diff as $column => $value_arr) {

						$value = $value_arr[0];
						$type = $value_arr[1];

						if ($type == 'Absolute') {
							Kohana::$log->add(Log::DEBUG , 'CHANGING VALUE  OF '.$column.' FROM  '.$obj->$column.' TO VALUE '.$value.' FOR ROW '.$row_id.' FOR TABLE '.$classname);
							$obj->$column = $value;
						} else if ($type == 'Discount') {
							$original = $obj->$column;
							try {
								$modified = floatval($original)*(1 - (floatval($value)/100));
								$obj->$column = $modified;

								Kohana::$log->add(Log::DEBUG , 'CHANGING VALUE  OF '.$column.' FROM  '.$original.' TO VALUE '.$modified.' FOR ROW '.$row_id.' FOR TABLE '.$classname);
							} catch (Exception $e) {

							}
						} else if ($type == 'Remove') {
							$to_remove = true;
						}

					}

					Kohana::$log->add(Log::DEBUG , 'ROW MATCH '.$classname.' '.$row_id);

					$modified = true;
				}
			}
				
				
			if( (($obj->version > $last_version) || $modified) && !$to_remove) {
				$filtered_list[] = $obj;
			}
				
		}

		return $filtered_list;
	}
	
	public static function get_market_diff_from_cache($last_version, $current_version, $prefix_key = null){
		if (Model_Kiwi::$apc_enabled || Model_Kiwi::$mc_enabled){
			$market_diff_key = static::market_diff_key($last_version, $current_version, $prefix_key);
			$diff_data = static::get_object_from_apc_mem_cache($market_diff_key, FALSE);
			if($diff_data === FALSE){
				Kohana::$log->add(Log::WARNING, "Did not find the market diff for ${last_version} either in APC or memcache, current version $current_version , diff key - $market_diff_key" );
			}			
		}else{
			Kohana::$log->add(Log::WARNING, "APC and memcache - both are disabled, returning false from get_market_diff_from_cache");
			$diff_data = FALSE;
		}
		return $diff_data;
	}
	
	public static function apc_mc_populate($classname, $current_market_version){
		if (Model_Kiwi::$apc_enabled || Model_Kiwi::$mc_enabled){
			$sync_model = 'Model_'.$classname;
			$r = new ReflectionClass($sync_model);
			$ar_model = $r->newInstanceArgs( array() );
			$list = $ar_model->find_by_sql('select * from ' . static::get_table_name($classname)  );
			$market_class_key = static::market_key($classname, $current_market_version);
			static::apc_mc_set($market_class_key, $list);
			Kohana::$log->add(Log::INFO, "Populated the class $classname for version $current_market_version");
		}else{
			Kohana::$log->add(Log::WARNING, "APC and memcache - both are disabled, returning false for apc_mc_populate");
			$list = FALSE;
		}
		return $list;
	}
	
	public static function refresh_market_cache(){
		if(Model_Kiwi::$mc_enabled || Model_Kiwi::$apc_enabled){
			$apc_classes = Kohana::$config->load('gameconfig.apc_classes');
			$current_market_version = Model_TableVersion::get_latest_market_version(TRUE);
			Kohana::$log->add(Log::INFO, "refresh_market_cache: current market version is $current_market_version");
			foreach($apc_classes as $apc_class){
				Model_Kiwi::apc_mc_populate($apc_class, $current_market_version);
			}
			$apc_classes_str = var_export($apc_classes, true);
			return $apc_classes_str;
		}else{
			return FALSE;
		}
		
	}
	
	static function apc_mc_set($apc_mc_key, $val, $save_in_mc = FALSE){
		if(Model_Kiwi::$apc_enabled){
			apc_store($apc_mc_key, $val);
			// Kohana::$log->add(Log::DEBUG, "stored the value - $val in apc cache with key - $apc_mc_key ");
		}
		if(Model_Kiwi::$mc_enabled && $save_in_mc){
			static::mc_set($apc_mc_key, $val, Model_Kiwi::$mc_market_expiry_time);
			// Kohana::$log->add(Log::DEBUG, "stored the value - $val in memcache with key - $apc_mc_key ");
		}
	}
	
	// find from apc/memcache, if not present, request to refresh cache
	public static function apc_mc_find_all($current_market_version){
		$kiwi_model = get_called_class();
		$classname = Model_kiwi::get_classname($kiwi_model);
		$market_class_key = static::market_key($classname, $current_market_version);
		if (Model_Kiwi::$mc_enabled || Model_Kiwi::$apc_enabled){
			$list = static::get_object_from_apc_mem_cache($market_class_key);
			if(! $list ){
				Kohana::$log->add(Log::DEBUG, "Did not find the list for class ${classname} either in APC or memcache, key - $market_class_key" );
				$populate_file = "/tmp/".Model_Kiwi::$apc_memcache_key_prefix."populate_apc";
				if (!file_exists($populate_file)){
					system("touch $populate_file");
				}
				Kohana::$log->add(Log::EMERGENCY, "APC/MC keys for the current version - $current_market_version for this class $classname NOT FOUND, raising exception");
				throw new Exception('APC cache key not found ... ');
				
			}
		}
		else{
			$list = FALSE;
		}
		return $list;
	}
	
	// returns FALSE if not found in APC/MC
	public static function get_object_from_apc_mem_cache($object_key, $update_apc = FALSE){
		//get it from APC
		$fetched = FALSE;
		if( Model_Kiwi::$apc_enabled)
			$list = apc_fetch( $object_key, $fetched);
		if(! $fetched ){
			if (!$update_apc && Model_Kiwi::$apc_enabled){
				Kohana::$log->add(Log::DEBUG, "did not find the key - ${object_key} in apc cache - try memcache");
				$populate_file = "/tmp/".Model_Kiwi::$apc_memcache_key_prefix."populate_apc";
				if (!file_exists($populate_file)){
					system("touch $populate_file");
				}
			}

			//try to get it from memcache
			if(Model_Kiwi::$mc_enabled &&  Model_Kiwi::$kiwi_mc ){
				if( (($from_cache = Model_Kiwi::$kiwi_mc->get( $object_key )) === FALSE)
								&& (Model_Kiwi::$kiwi_mc->getResultCode() != Memcached::RES_SUCCESS)){
					$fetched = FALSE;
					Kohana::$log->add(Log::DEBUG, "did not find the key - ${object_key} in Memcache");
				}else{
					Kohana::$log->add(Log::DEBUG, "Found the key - ${object_key} in memcache");
					if(Model_Kiwi::$apc_enabled && $update_apc) {
						apc_store($object_key, $from_cache);
					}
					return $from_cache;
				}
			}
		}else{
			Kohana::$log->add(Log::DEBUG, "Found the key - ${object_key} in apc cache");
		}
		return  (!$fetched) ? FALSE : $list; 
	}
	
	/**
	 * Should be called Only for static tables. Not sure whether this 
	 * can be acheived for User tables.
	 */	
	public static function get_object_from_cache_or_db($object_key, $classname ){
		$query_list = Model_Kiwi::get_object_from_apc_mem_cache($object_key) ;

		if(!$query_list) {
			$model_name = Model_Kiwi::get_modelname($classname) ;
			$query_list = $model_name::find('all') ;
		}
		
		return $query_list ;
	}
	
	public static function latest_version_key(){
		return Model_Kiwi::$apc_memcache_key_prefix .'current_market_version';
	}
	
	// please mail everyone if there is change in market_key format
	public static function market_key($classname, $current_version){
		$delimiter = '#';		// to split key for version
		return Model_Kiwi::$apc_memcache_key_prefix . $delimiter . $current_version . $delimiter .'_market_' .strtolower($classname) . '_list';
	}

	// please mail everyone if there is change in market_key format	
	public static function market_diff_key($last_version, $current_version, $prefix_key = null){
		$delimiter = '#';
		if(! $prefix_key)
			$prefix_key = Model_Kiwi::$apc_memcache_key_prefix;
		return $prefix_key . 'diff_market_data_'. $delimiter .$last_version. $delimiter .$current_version;
	}
	
/** dynamic finder with the given condition-array  */
	public static function afind($modelname, $condition_array){
		$r = new ReflectionClass($modelanme);
		$ar_model = $r->newInstanceArgs( array() );
		$m = $ar_model->find('first', array('conditions' => $condition_array ));
		return $m;
	}

	/** dynamic finder for a single attribute-value pair*/
	public static function dfind($modelname, $attr, $value){
		$r = new ReflectionClass($modelname);
		$ar_model = $r->newInstanceArgs( array() );
		$condition = $attr." = ? ";
		$condition_array = array( $condition, $value);
		$m = $ar_model->find('first', array('conditions' => $condition_array ));
		return $m;
	}

	/**
	 * takes the input json object and sync the underlying models
	 * we expect the $json to be of the form [ ClassName1 => [obj11, obj12], ClassName2 => [obj21, obj22]}
	 * Enter description here ...
	 * @throws Exception
	 */
	public static function sync_json($user_id, $json, $only_classes){
		$current_time = time();
		$updated_classes = array_keys($json);
		$version = time();
		$sync_classes = array_intersect($updated_classes, $only_classes);
		$updated_classes = array();
		foreach($sync_classes  as $sync_class){
			foreach( $json[$sync_class] as $model_values){
				$model_values["user_id"] = $user_id;
				// handle UserAsset differently
				if($sync_class == 'UserAsset'){
					$model_values['user_asset_id'] = $user_id . $model_values['client_asset_id'];
				}
				Model_Kiwi::create_model($sync_class, $model_values, $version, "_THERE_IS_NO_MISSING_DELIMETER", $updated_classes);
			}
		}
	}

	
	/** get the db attributed of a class 
	 * 
	 */
	public static function get_attributes($classname){
		$modelname =  Model_Kiwi::get_modelname( $classname );
		$r = new ReflectionClass($modelname);
		$ar_model = $r->newInstanceArgs( array() );
		$model_attr1 = $ar_model->attributes();
		//print_r( Model_Resource::);
		//print_r($model_attr1);
		return array_keys($model_attr1);
	}
	
	public function attributes_changed($attributes_changed){
		
	}
	
	/**
	 * 
	 * generic function to deal with models not using further normalization.
	 * to handle worksheets represented in denorm form, implement the same 
	 * method inside the corresponding class to handle normalization
	 * @param unknown_type $classname
	 * @param unknown_type $values
	 * @param unknown_type $version
	 * @param unknown_type $missing_delimeter - the column names we are getting from the spreadsheet has '_' missing
	 * but it will be present in json.
	 * @throws Exception
	 * @return boolean
	 */
	public static function create_model($classname, $values, $version, $missing_delimeter, &$updated_classes){
		
		$modelname =  Model_Kiwi::get_modelname( $classname );
		$r = new ReflectionClass($modelname);
		$ar_model = $r->newInstanceArgs( array() );
		$model_attr1 = $ar_model->attributes();
		$model_attr = array_keys($model_attr1);

		$attr_values = array();
		$values_keys = array_keys($values);
		//remove the version attribute
		//set values for attributes which are present in spreadsheet
		$version_index = array_search('version',$model_attr);
		unset($model_attr[$version_index]);
		foreach( $model_attr as $attr){
			$attr_without_underscore = str_replace($missing_delimeter, '', $attr) ;
			if(in_array($attr_without_underscore, $values_keys)){
				$attr_values[$attr] = $values[$attr_without_underscore];
			}
		}
		$config = Kohana::$config->load("gameconfig.sync_classes");
		
		$dependents = array();
		if($ar_model->has_dependents()){
			print "will ............... also process the dependents for ${classname} \n<br>";
			$ar_model->extract_dependents($values, $dependents, $ar_model);
			//print_r($values);
			//print_r($dependents);	
		}
		
		$primary_key_column_prefix = Model_Kiwi::camelcase_to_underscore($classname);
		$primary_key_attr =    $primary_key_column_prefix."_id";
		$primary_key_attr_arr = $ar_model->get_primary_key();
//		print_r($primary_key_attr_arr);
		$primary_key_attr = $primary_key_attr_arr[0];
		$primary_key_column = str_replace($missing_delimeter,'', $primary_key_attr);
		$attributes_changed = array();
//		print_r($primary_key_attr); print_r($primary_key_column);
		if( $values[$primary_key_column ]	 != null){
			$needs_update = true;
			try{
				$existing_ar_model = null;
				$existing_ar_model = Model_Kiwi::dfind($modelname, $primary_key_attr, $values[ $primary_key_column]);
				
				if($existing_ar_model != null){
					$existing_ar_model->compute_hash_verifier_if_null();
				}
				
				// $ar_model->find( $values[$primary_key_column ] );
				if( $existing_ar_model != null){
					$needs_update = false;
					//check if the model needs to be updated
					//compare the attributes common to both except version
					$common_attr = array_keys($attr_values);
					foreach( $common_attr as $attr){
						
//						print " attr ................. attr :" ;
//						print $existing_ar_model->$attr . ".... " . $attr_values[$attr];
//						
						//Check if the attribute contains 'time' then have to compare the time equivalent
						$compare = false;
						if(strpos($attr, 'time') !== false)
							$compare = strtotime($existing_ar_model->$attr) != strtotime($attr_values[$attr]);
						else
							$compare = $existing_ar_model->$attr != $attr_values[$attr];
						 
						$needs_update = $needs_update || $compare;
							
						if($compare)
							$attributes_changed[$attr] = 1;
					}
					$ar_model = $existing_ar_model;
				}
			}catch(Exception $rnf){
				print "Got exception with exisitng record - ". $rnf->getMessage()."<br>\n";
				throw $rnf;
			}
			$ar_model->attributes_changed($attributes_changed);
			if($needs_update == true){
				$attr_values['version'] = $version;
				$ar_model->set_attributes($attr_values);
				if($ar_model->save()){
					print "inserting/updating the row ";
					print_r( $attr_values);
					print "\n<br>";
				}else {
					displayErrors($ar_model->getErrors());
				}
			}
			
			
			if($ar_model->has_dependents()){
				 try {
				  $updated_dependent = $ar_model->process_dependents( $values[ $primary_key_column], $dependents, $version, $updated_classes);
				 }catch(Exception $ex){
				  	print "Got exception with processing dependents - ". $ex->getMessage(). "<br>\n";
				  	throw $ex;
				 }
			}

			return $needs_update;
		}else{
			$error_message = "The primary key value is null for the row  ";
			print_r($values);
			throw new Exception($error_message);
		}
	}
	
	public static $default_dependents = array('resource');

	public static function get_item_types(){
		return Model_Kiwi::$default_dependents;
	}
	
	//override this method in a subclass in case we need to store dependent children
	public static function has_dependents(){
		return false;
	}
	
	//override this method in a subclass where we need to compare the attribute values
	//on our own. If overridden needs to implement compare_attributes()
	public static function require_compare_attributes(){
		return false;
	}

	/**
	* handle the item_type and item_id here. - currently assuming it will contain columns like
	* resource_silver, asset_wheat type columns
	* @param unknown_type $classname
	* @param unknown_type $values
	* @param unknown_type $version
	*/
	public static function item_type_attribute($attr, $model){
		foreach($model->get_item_types() as $item_type){
			if( Model_Kiwi::starts_with($attr, $item_type)){
				return true;
			}
		}
		return false;
	}
	
	public static function item_type($attr, $model){
		foreach($model->get_item_types() as $item_type){
			if( Model_Kiwi::starts_with($attr, $item_type)){
				return $item_type;
			}
		}
		return null;
	}
	
	public static function item_id($attr, $model){
		foreach($model->get_item_types() as $item_type){
			if( Model_Kiwi::starts_with($attr, $item_type)){
				return str_replace($item_type,'', $attr);
			}
		}
		return null;
	}
	
	// assume case insensitive
	public static function starts_with($str, $prefix){
		$len = strlen($prefix);
		return (substr($str, 0, $len) === $prefix);
	}
	
	public static function ends_with($str, $suffix){
		$len = strlen($suffix);
		$len2 = strlen($str);
		if($len > $len2) return false; 
		return (substr($str, 0 - $len) == $suffix);
	}
	
	public static function extract_dependents(&$values, &$dependents, $model){
		$column_attr = array_keys($values);
		//get the item columns/values
		foreach($column_attr as $col_attr){
			if(Model_Kiwi::item_type_attribute($col_attr, $model)){
				$dependents[ $col_attr] = $values[$col_attr];
				unset($values[$col_attr]);
			}
		}
	}	
	
	//returns json which confirms to json-io library
	public function to_json_io($classname, $attributes){
		$tablename = $this::$table_name;		
		$primary_key =  Model_Kiwi::json_primary_key( $tablename );
		

		//print "-----to_json_io: for   ${classname} : ${tablename} :: ${primary_key}------\n<br> ";
		//print_r($attributes);
		foreach($attributes as $attr){
			//print "${attr} => type: ". gettype($this->$attr)." , val: " . $this->$attr . " , ";
		}
		//print "\n<br>";
		
		$json="{  ";
		
	
		foreach($attributes as $attr){
			$to_include= TRUE;
			$display_attr = lcfirst( Model_Kiwi::underscore_to_camelcase($attr));
			$add_ref = false;
			if($attr == $primary_key)
				$display_attr = 'id';
			else if(substr($attr, -3) == '_id'){
				$display_attr = "@ref";
				$add_ref = true;
			}
			$json_attr=  $this->$attr;
			$attr_type = gettype($this->$attr);		
	
	
			if($attr_type != 'integer' && $attr_type != 'double' &&  $attr_type != "NULL" )
				$json_attr = '"'.$this->$attr.'"';
			else {
				if((is_null($this->$attr))|| $attr_type == "NULL")
					$to_include = FALSE;
			}
			
			$target_attr = $attr;
			
			//AT specific 
			//can_flip is boolean
			if($classname == 'Asset' && $attr == 'can_flip'){ $json_attr = $this->$attr > 0 ? 'true': 'false' ; }
			if($classname == 'Asset' && $attr == 'expiry_time'){ $json_attr = strtotime($this->$attr); }
			if($classname == 'DailyNewsItem' && ($attr == 'start_time' || $attr == 'expiry_time')) { $json_attr = strtotime($this->$attr); }
			
			if($classname == 'AssetState' && $attr == 'state_id'){ $add_ref = false; $display_attr = 'state'; } 
			if($classname == 'AssetState' && $attr == 'next_id'){  $target_attr = 'asset_state_id'; } 
	
			if($classname == 'Plan' && ($attr == 'start_sale_time' || $attr == 'expiry_sale_time')){ $json_attr = strtotime($this->$attr); }

			if($add_ref){
				$target = lcfirst( Model_Kiwi::underscore_to_camelcase(substr($attr, 0, -3)));
				//"level":{"@ref":11}
				if($this->$attr != null)
					if($attr_type != 'integer' && $attr_type != 'double' &&  $attr_type != "NULL" )
						$json = $json . '"'. $target . '": {"id":' . '"' . $this->$attr . '" }, ' ;
					else
						$json = $json . '"'. $target . '": {"id":' . $this->$attr . '}, ' ;
			}else{
				if($display_attr == 'id'){
					$json = $json .'"@id":' . $this->md5_id($this->$attr, $attr_type, $target_attr) . ', ' ;
				}
				if($to_include){
					$json = $json .'"' . $display_attr . '":' . $json_attr . ', ' ;
				}
			}
		}
		$json = substr($json, 0, -2) . " }";
	//	print "json format:: ${json} \n<br>";
		return $json;
	}
	
	public static function md5_id($val, $attr_type, $attribute){
		return base_convert( substr( md5($attribute."_".$val),0,7), 16, 10);
	}
	
	/**
	/// Memcache related functions 
	*
	*
	*/	
	private static function user_id_tag($user_id){
		if ($user_id == NULL){
			throw new Exception("User_id_tag for memcache can't be generated ... Current User_id not set");
			Kohana::$log->add(Log::ERROR, "user_id for Memcache key generation is NULL");
		}
		return "_" . $user_id . "_#";
	}
	
	private static function kiwi_mc_key($kiwi_class, $primary_key){
		if( (strpos($kiwi_class, 'User') === 0) ) {
			return Model_Kiwi::$apc_memcache_key_prefix . $kiwi_class . Model_Kiwi::user_id_tag(Model_Kiwi::$current_user_id) . $primary_key;
		}
		return Model_Kiwi::$apc_memcache_key_prefix . $kiwi_class . "__" . $primary_key;
	}
	
	public static function generate_composite_key($user_id, $item_id){
		return $user_id . "__" . $item_id;
	}
	
	public function json_primary_key($table_name){
		//if the primary key of the table has been defined in config - return that else use convention
		if( in_array( $table_name, array_keys(Model_Kiwi::$kiwi_pk_hash))){
			return Model_Kiwi::$kiwi_pk_hash[ $table_name ];
		}
		return Model_Kiwi::singularize($table_name) . '_id';
	}
		
	private function pk_column(){
		//if the table has a composite_key column - return that
		if( in_array(static::$table_name, Model_Kiwi::$composite_key_tables) ){
			return "composite_key";
		}
		//if the primary key of the table has been defined in config - return that else use convention
		if( in_array( static::$table_name, array_keys(Model_Kiwi::$kiwi_pk_hash))){
			return Model_Kiwi::$kiwi_pk_hash[ static::$table_name ];
		}
		return Model_Kiwi::singularize(static::$table_name) . '_id';
	}
	
	private function kiwi_primary_key(){
		return $this->pk_column();
	}
	
	//Assuming user_id is the primary key
	public static function mc_find_by_user_id($user_id){
		return static::mc_find($user_id, true);
	}
	
	public static function mc_find_by_user_id_and_item_id($user_id, $item_id){
		return static::mc_find( static::generate_composite_key($user_id, $item_id), FALSE, TRUE);
	}
	
	//First look into memcache and then hit the DB - make the second variable true in case you need to call find_by_user_id
	// if the composite_pk is TRUE, we assume that the first column is user_id in the composite key
	public static function mc_find($primary_key, $pk_is_user_id = FALSE, $composite_pk = FALSE){
		try{
			$modelname = get_called_class();
			$kiwi_class = Model_Kiwi::get_classname( $modelname );
			$fetched = TRUE;
			$obj = null;
			if(Model_Kiwi::$mc_enabled &&  Model_Kiwi::$kiwi_mc && in_array($kiwi_class, Model_Kiwi::$mc_classes)){
				
				$mc_key =  static::kiwi_mc_key($kiwi_class, $primary_key);
				if( (($obj = Model_Kiwi::$kiwi_mc->get( $mc_key )) === FALSE)
				 && (Model_Kiwi::$kiwi_mc->getResultCode() != Memcached::RES_SUCCESS)){
					$fetched = FALSE;
					Kohana::$log->add(Log::DEBUG, "mc_find: Could not fetch the key ${mc_key} from memcache for class ${kiwi_class}");
					$t1 = 1000.0*microtime(true);
					$obj = ($composite_pk ? static::find_by_composite_key($primary_key) : ($pk_is_user_id ? static::find_by_user_id($primary_key) : static::find($primary_key) ));
					$random_prob = rand(1, 10000);
					if( $random_prob < Kohana::$config->load('gameconfig.profiling_log_probability') && $random_prob < Kohana::$config->load('gameconfig.profiling_log_probability_db') ){
						$t2 = 1000.0*microtime(true);
						$time_taken = $t2 - $t1;
						Model_Profiler::log_db_metric(static::$connection, static::$table_name, intval($time_taken));						
					}	
					Kohana::$log->add(Log::DEBUG, "mc_find: Fetched the key ${mc_key} from  db and now adding it to memcache for class ${kiwi_class} if it's not null");
					if ($obj){
						static::mc_set($mc_key, $obj);
						Kohana::$log->add(Log::DEBUG, "mc_find: Type of object being set is: " . gettype($obj) );
					}
   		 		}else{
			 		 Kohana::$log->add(Log::DEBUG, "mc_find: got the object for key- $mc_key and it's of type: ". gettype($obj) );
			 		 //since the db object is inserted after-save, its _new_record is still set to TRUE
			 		 if($obj instanceof  ActiveRecord\Model){
			 		 	$obj->set_as_old_record();
			 		 }
					 return $obj;
			 	}
			}
		}catch(Exception $ex){
			Kohana::$log->add(Log::ERROR, $ex->getTraceAsString() );
			if(! Model_Kiwi::$mc_supress_exceptions)  throw $ex;
		}
		//handle composite key, assume first is the user_id
		$t1 = 1000.0*microtime(true);
		if($composite_pk){
			Kohana::$log->add(Log::DEBUG, "returning the value - find_by_composite_key");
			$obj = static::find_by_composite_key($primary_key);
		}else{
			$obj = ($pk_is_user_id ? static::find_by_user_id($primary_key) : static::find($primary_key) );
		}
		$random_prob = rand(1, 10000);
		if( $random_prob < Kohana::$config->load('gameconfig.profiling_log_probability') && $random_prob < Kohana::$config->load('gameconfig.profiling_log_probability_db')){
			$t2 = 1000.0*microtime(true);
			$time_taken = $t2 - $t1;
			Model_Profiler::log_db_metric(static::$connection, static::$table_name, intval($time_taken));
		}
		return $obj;
	}

	public static function mc_find_all_by_user_id($user_id){
		$obj_list = static::find_all_by_user_id($user_id);
		$kiwi_class = Model_Kiwi::get_classname( get_called_class() );
		if(Model_Kiwi::$mc_enabled &&  Model_Kiwi::$kiwi_mc && in_array($kiwi_class, Model_Kiwi::$mc_classes)){
			if($obj_list)
				static::set_mc_key_values($obj_list, $kiwi_class);
		}
		return $obj_list;
	}

	
	public static function mc_init_transaction(){
		if (Model_Kiwi::$mc_enabled){
			Kohana::$log->add(Log::DEBUG, "mc_init_transaction: method called");
			if ( !empty(Model_Kiwi::$mc_transaction_elements) ){
				// something is wrong, it should be empty at the beginning of transaction
				// if we implement nested transactions, then condition should not be done
				Kohana::$log->add(Log::ERROR, "mc_transaction_elements array should be empty before starting any transaction");
			}
			if (Model_Kiwi::$mc_transaction_active == TRUE){
				// something went wrong with the last commit/rollback
				// or mc_transaction has been nested i.e. some other transaction was started before the
				// completion of previous one
				Kohana::$log->add(Log::ERROR, "mc_init_transaction: nested case: mc_transaction_active already set to TRUE");
			}
			Model_Kiwi::$mc_transaction_active = TRUE;
		}else{
			Kohana::$log->add(Log::DEBUG, "Memcache is Disabled - No use of calling mc_init_transaction");
		}
	} 
	
	public static function mc_commit_transaction(){
		if (Model_Kiwi::$mc_enabled){
			Kohana::$log->add(Log::DEBUG, "mc_commit_transaction: method called");
			if (empty(Model_Kiwi::$mc_transaction_elements)){
				Kohana::$log->add(Log::DEBUG, "Nothing happend in the transaction or something went wrong during transaction");
			}
			if (Model_Kiwi::$mc_transaction_active == FALSE){
				Kohana::$log->add(Log::ERROR, "mc_commit_transaction: nested case: mc_transaction_active already set to FALSE");
			}
			Model_Kiwi::$mc_transaction_elements = NULL;
			Model_Kiwi::$mc_transaction_active = FALSE;
		}else{
			Kohana::$log->add(Log::DEBUG, "Memcache is Disabled - No use of calling mc_commit_transaction");
		}
	}
	
	public static function mc_rollback_transaction(){
		if (Model_Kiwi::$mc_enabled){
			if ((!Model_Kiwi::$mc_transaction_elements) || empty(Model_Kiwi::$mc_transaction_elements)){
				Kohana::$log->add(Log::DEBUG, "mc_rollback_transaction: Nothing happend in the transaction or something went wrong during transaction");
				Model_Kiwi::$mc_transaction_elements = NULL;
				Model_Kiwi::$mc_transaction_active = FALSE;
				return;
			}
			if ( !(Model_Kiwi::$mc_transaction_active) ){
				Kohana::$log->add(Log::ERROR, "mc_rollback_transaction: mc_transaction_active already set to FALSE");
				Model_Kiwi::$mc_transaction_elements = NULL;
				Model_Kiwi::$mc_transaction_active = FALSE;
				return;
			}
			
			// In Rollback, we just invalidate the keys being updated during the txn
			foreach ( Model_Kiwi::$mc_transaction_elements as $mc_key){
				if( (Model_Kiwi::$kiwi_mc->delete($mc_key) === FALSE) || (Model_Kiwi::$kiwi_mc->getResultCode() == Memcached::RES_NOTFOUND) ){
					Kohana::$log->add(Log::ERROR, "mc_Rollback_transaction: Could NOT delete the key:${mc_key}, maybe the key doesn't exist in memcached or has expired");
			}else{
				Kohana::$log->add(Log::DEBUG, "mc_Rollback_transaction: DELETED the key ${mc_key} to memcache for class");
			}
			}
			Model_Kiwi::$mc_transaction_elements = NULL;
			Model_Kiwi::$mc_transaction_active = FALSE;
				
		}else{
			Kohana::$log->add(Log::DEBUG, "Memcache is Disabled - No use of calling mc_rollback_transaction");
		}
	}
	
	
	private static function set_mc_key_values($db_list, $kiwi_class){
		if (Model_Kiwi::$mc_enabled){
			$mc_list = array();
			if($db_list != null && sizeof($db_list) > 0){
				foreach($db_list as $db_obj){
					$pcol = $db_obj->kiwi_primary_key();
					$pval = $db_obj->$pcol;
					$mc_key = static::kiwi_mc_key($kiwi_class, $pval);
					$mc_list[ $mc_key ] = $db_obj;
				}
				static::mc_set_multi($mc_list);
			}
			return $mc_list;
		}else{
			Kohana::$log->add(Log::DEBUG, "Memcache is Disabled - Cannot set mc key/value pairs");
			return FALSE;
		}
	}
	
	/**
	* Deletes this model from the database and returns true if successful.
	* Also implemented memcache key handling 
	* @return boolean
	*/
	public function delete(){
		$kiwi_class = Model_Kiwi::get_classname( get_class($this) ); //returns User for Model_User
		$pcol = $this->kiwi_primary_key();
		$pk = $this->$pcol;
		$mc_key = static::kiwi_mc_key($kiwi_class, $pk);
		if (empty($pk))
		throw new ActiveRecordException("Cannot delete, no primary key defined for: " . $kiwi_class);
		//FIRST delete the key from memcache
		static::delete_from_memcache($mc_key, $kiwi_class);
		$return_status = false;
		//DO NOT DELETE - just soft delete
		if( Kohana::$config->load('gameconfig.mysql_hard_delete_disabled')  &&
				in_array( Model_Kiwi::get_table_name($kiwi_class), ActiveRecord\Model::$soft_delete_enabled_tables)	){
			Kohana::$log->add(Log::DEBUG, "Mysql Deletes are disabled - using soft delete");
			$return_status = $this->update_attribute(ActiveRecord\Model::$soft_deleted_column, 1);
		}else{
			$return_status = static::table()->delete(array($pcol => $pk));
		}
		return $return_status ;
	}
	
	protected static function delete_from_memcache($mc_key, $kiwi_class){
		try{
			if(Model_Kiwi::$mc_enabled && Model_Kiwi::$kiwi_mc && in_array($kiwi_class, Model_Kiwi::$mc_classes)){
				Kohana::$log->add(Log::DEBUG, "Entered the Delete func and deleting the key- $mc_key either it exists or not");
				if( (Model_Kiwi::$kiwi_mc->delete($mc_key) == FALSE) || (Model_Kiwi::$kiwi_mc->getResultCode() == Memcached::RES_NOTFOUND) ){
						Kohana::$log->add(Log::DEBUG, "Could NOT delete the key ${mc_key} from memcache for class ${kiwi_class}, key may not exist");
				}	else 	{
					Kohana::$log->add(Log::DEBUG, "DELETED the key ${mc_key} to memcache for class ${kiwi_class}");
				} 
			}	
		}catch(Exception $ex){
			Kohana::$log->add(Log::ERROR, $ex->getTraceAsString() );
			if(! Model_Kiwi::$mc_supress_exceptions)  throw $ex;
		}
	}

	public static function delete_mc_key($mc_key){
		try{
			if(Model_Kiwi::$mc_enabled && Model_Kiwi::$kiwi_mc){
				if( (Model_Kiwi::$kiwi_mc->delete($mc_key) == FALSE) || (Model_Kiwi::$kiwi_mc->getResultCode() == Memcached::RES_NOTFOUND) ){
					Kohana::$log->add(Log::DEBUG, "Could NOT delete the key ${mc_key} from memcache");
					return FALSE;
				}else{
					Kohana::$log->add(Log::DEBUG, "DELETED the key ${mc_key} in memcache on request");
					return TRUE;
				}
			}
		}catch(Exception $ex){
			Kohana::$log->add(Log::ERROR, $ex->getTraceAsString() );
			if(! Model_Kiwi::$mc_supress_exceptions)  throw $ex;
		}
		return FALSE;
	}
	
	/** 
	 *  after_save callback - push the object to memcache
	 */
	public function save_to_memcache(){
		try{
			$kiwi_class = Model_Kiwi::get_classname( get_class($this) ); //returns User for Model_User
			if(Model_Kiwi::$mc_enabled && Model_Kiwi::$kiwi_mc && in_array($kiwi_class, Model_Kiwi::$mc_classes)){
				$mc_updated = TRUE;
				$this->errors = null;
				// if the model was intended to be soft deleted - due to its soft delete flag is updated - lets not save it in memcache
				if( Kohana::$config->load('gameconfig.mysql_hard_delete_disabled') && 
				 in_array( Model_Kiwi::get_table_name($kiwi_class), ActiveRecord\Model::$soft_delete_enabled_tables) ){
					$soft_delete_column = ActiveRecord\Model::$soft_deleted_column;
					if($this->$soft_delete_column === 1) return;
				}
				$pcol = $this->kiwi_primary_key();
				$pval = $this->$pcol;
				if(!Model_Kiwi::$current_user_id){
				Model_Kiwi::$current_user_id = $this->user_id;
				}
				$mc_key = static::kiwi_mc_key($kiwi_class, $pval);
					
				//if any transaction is active - record its mc_key - so that it can be rolled back if required
				$pcol = $this->kiwi_primary_key();
				$pval = $this->$pcol;
				$mc_key = static::kiwi_mc_key($kiwi_class, $pval);
				static::record_during_transaction($mc_key);
				//save the object in memcache
				if(! Model_Kiwi::$kiwi_mc->set($mc_key, $this, Model_Kiwi::$mc_expiry_time) ){
					$mc_updated = FALSE;
					Kohana::$log->add(Log::DEBUG, "AfterSave Callback - Could not save the key ${mc_key} from memcache for class ${kiwi_class}");
				}else{
					Kohana::$log->add(Log::DEBUG, "AfterSave Callback - Saved the key ${mc_key} to memcache for class ${kiwi_class}"
					. "value inserted is of type: " . gettype($this) );
				}
			}
		}catch(Exception $ex){
			Kohana::$log->add(Log::ERROR, $ex->getTraceAsString() );
			if(! Model_Kiwi::$mc_supress_exceptions)  throw $ex;
		}
	} 
	
	protected static function record_during_transaction($mc_key){
		Kohana::$log->add(Log::DEBUG, "IS mc_transaction_active: " . Model_Kiwi::$mc_transaction_active);
		if(Model_Kiwi::$mc_transaction_active === TRUE){
			if(! Model_Kiwi::$mc_transaction_elements)
				Model_Kiwi::$mc_transaction_elements = array();
			Model_Kiwi::$mc_transaction_elements[] = $mc_key;
		}
	}
		
	public static function mc_set($mc_key, $obj, $expiry_time = null){
		if (Model_Kiwi::$mc_enabled){
			if(! $expiry_time){
				$expiry_time = Model_Kiwi::$mc_expiry_time;
			}
			if( !Model_Kiwi::$kiwi_mc->set($mc_key, $obj, $expiry_time)){
				Kohana::$log->add(Log::ERROR, "mc_set: could not set to memcache  key- $mc_key - response code - " . Model_Kiwi::$kiwi_mc->getResultCode() );
				if(! Model_Kiwi::$kiwi_mc->delete($mc_key) ){
					Kohana::$log->add(Log::ERROR, "mc_set: could not even delete the memcache key - $mc_key after mc_set failure - response code - " . Model_Kiwi::$kiwi_mc->getResultCode() );
				}else{
					Kohana::$log->add(Log::DEBUG, "mc_set: deleted the memcache key - $mc_key after the set failure");
				}
			}else{
				Kohana::$log->add(Log::DEBUG, "mc_set: Setting to memcache  key- $mc_key");
			}			
		}
	}
	
	public static function mc_set_multi($key_values, $expiry_time = null){
		if(! $expiry_time){
			$expiry_time = Model_Kiwi::$mc_expiry_time;
		}
		$mc_obj_str = null; //var_export($key_values, true);
		Kohana::$log->add(Log::DEBUG, "mc_set_multi: Values being inserted to cache are:/n"); 
		foreach($key_values as $key=>$value){
			Kohana::$log->add(Log::DEBUG, "mc_set_multi: key: " . $key . "Type of Value: " . gettype($value) );
		}		
		if(! Model_Kiwi::$kiwi_mc->setMulti($key_values, $expiry_time) ){
			//exceptional case
			$all_keys = array_keys($key_values);
			$first_key = $all_keys[0];
			Kohana::$log->add(Log::ERROR, "mc_set_multi: could not set to memcache  key-values - response code - " . Model_Kiwi::$kiwi_mc->getResultCode() . " - first key => $first_key ");
		}else{
			Kohana::$log->add(Log::DEBUG, "mc_set_multi: Setting to memcache - key-values :: ${mc_obj_str}");
		}
	}

	public static function auto_clear_market_cache($preserve=2){
		$schema_versions = Model_SchemaVersion::find('all');
		$version_list = array();
		if (sizeof($schema_versions) > $preserve){
			$schema_version = $schema_versions[count($schema_versions) - $preserve];
			$version = $schema_version->version;
			Model_Kiwi::clear_market_cache($version);
		}
		else{
			Kohana::$log->add(Log::DEBUG, "${preserve} or less versions have been created, no need to clear cache");
		}
	}

	public static function clear_apc_market_keys($preserve=2){
		$schema_versions = Model_SchemaVersion::find('all');
		$version_list = array();
		
		$count = count($schema_versions) - $preserve;
		
		$i = 0;
		while($i < $count) {
			$schema_version = $schema_versions[$i];
			$version_list[] = $schema_version->version;
			$apc_classes = array_merge( Kohana::$config->load('gameconfig.apc_classes'), Kohana::$config->load('gameconfig.sync_classes'));
			foreach($apc_classes as $apc_class){
				$key = Model_Kiwi::market_key($apc_class, $schema_version->version);
				if ( !apc_delete($key) ){
					Kohana::$log->add(Log::DEBUG, "Could not delete this APC key ${key}");
				}else{
					echo "deleting this key - $key<br>";
				}
			}
			// Deprecating the concept of soft_delete: Calling some extra apc_delete just to be sure
// 			$schema_version->soft_deleted = 1;
			$schema_version->save();
			$i++;
		}
		
		// All possible permutations can exist (in chronological order)
		for($i=0; $i<$count; $i++){
			for($j=$i; $j<$count; $j++){
				$key = Model_Kiwi::market_diff_key($version_list[$i], $version_list[$j]);
				if ( !apc_delete($key) ){
					Kohana::$log->add(Log::DEBUG, "Could not delete this APC key ${key}");
				}else{
					echo "deleting this key - $key<br>";
				}
				
			}
		}
		
	}
	
	public static function all_active_apc_keys(){
		$keys = array();
		$num = 10;
		$prefix = Model_Kiwi::$apc_memcache_key_prefix;
		$delimiter = '#';
		$it = new APCIterator('user', "/^$prefix/" , APC_ITER_KEY, $num, APC_LIST_ACTIVE);
		foreach($it as $key=>$value) {
			$keys[] = $key;
		}
		return $keys;
	}
	
	// This method uses APCIterator which locks 10 keys during its process
	public static function clear_market_cache($version, $quantifier='lessthanequalto'){
		$num = 10;
		$prefix = Model_Kiwi::$apc_memcache_key_prefix;
		$delimiter = '#';
		$it = new APCIterator('user', "/^$prefix/" , APC_ITER_KEY, $num, APC_LIST_ACTIVE);
		foreach($it as $key=>$value) {
			echo $key." is iterated over ... \n";
			$key_components = explode($delimiter, $key);
			if (sizeof($key_components) > 2){
				// checked the validity of the key_components array 
				if ($key_components[0] == $prefix){
					// it's a market key, look at its version in $key_components[0]
					$key_version = $key_components[1];
					echo "it's a market list key<br>";
				}else{
					// it's a market diff key
					echo "it's a market diff key";
					$key_version = $key_components[2];
				}
				
				if ( ($key_version <= $version) && ($quantifier == 'lessthanequalto') ){
					echo ": delete this one <br>";
					apc_delete($key);
					Kohana::$log->add(Log::DEBUG, "APC key $key deleted");
				}
				elseif ( ($key_version < $version) && ($quantifier == 'lesser') ){
					echo ": delete this one <br>";
					apc_delete($key);
					Kohana::$log->add(Log::DEBUG, "APC key $key deleted");
				}
				elseif ( ($key_version == $version) && ($quantifier == 'equal') ){
					echo ": delete this one <br>";
					apc_delete($key);
					Kohana::$log->add(Log::DEBUG, "APC key $key deleted");
				}
				else{
					Kohana::$log->add(Log::DEBUG, "clear_market_cache called: this key - $key doesn't qualify for delete");
				}
			}
			else{
				Kohana::$log->add(Log::DEBUG, "clear_market_cache called: this key - $key doesn't get separated by delimiter");
			}
		}
	}
	
	/**
	 * 
	 *   END of memcache related functions
	 * 
	 */

	public static function my_autoload($clazz){
		// Check to see whether the include declared the class
		if (!class_exists($clazz, false)) {
			trigger_error("Unable to load class: ${clazz}", E_USER_WARNING);
		}
	}
	
	public static function kiwiuser_info($user_id){
		foreach (Model_Kiwi::$mc_classes as $mc_class){
			if ( !(in_array($mc_class, Model_Kiwi::$mc_user_set_classes)) ){
		
				if($mc_class == 'UserDailyNewsItem'){
					continue;
				}
				$model = Model_Kiwi::get_modelname($mc_class);
				echo $model . " is the model being called <br>";
				$db_obj = $model::find_by_user_id($user_id);
				echo "type of object found in db: " . gettype($db_obj) . "<br>";
				if($db_obj){
					$db_obj->display_string();
				}
			}
		}	// end of for loop - mc_classes
		
		foreach (Model_Kiwi::$mc_user_set_classes as $mc_user_class){
			$model = Model_Kiwi::get_modelname($mc_user_class);
			echo $model . " is the model being called <br>";
			$db_obj_arr = $model::find_all_by_user_id($user_id);
			if($db_obj_arr != null){
				foreach($db_obj_arr as $db_obj){
					$db_obj->display_string();
				}
			}
		}
		
	}

	public static function generate_memcache_keys($user_id=null){
		if( !(Model_Kiwi::$mc_enabled &&  Model_Kiwi::$kiwi_mc) ){
			echo "Memcache is not enabled or memcache object has not been set properly<br>";
			return FALSE;
		}
		$time = time();
		$memcache = new Memcache();
		$servers_list = Kohana::$config->load('gameconfig.memcache_servers');
		foreach($servers_list as $server){
			// $server -> /server-address:port:weight
			$server_param = explode(':', $server);
			$memcache->addServer($server_param[0], $server_param[1]);
		}
		
		$memcache_list = array();
		$allSlabs = @$memcache->getExtendedStats('slabs');
		$items = @$memcache->getExtendedStats('items');
		foreach ($allSlabs as $server => $slabs) {
			foreach ($slabs as $slabId => $slabMeta) {
				if (!is_numeric($slabId)) {
					continue;
				}
		
				$cdump = $memcache->getExtendedStats('cachedump', (int)$slabId);
		
				foreach ($cdump as $server => $entries) {
					if (!$entries) {
						continue;
					}
		
				foreach($entries as $eKey => $eData) {
						$memcache_list[$eKey] = array( 'key' => $eKey, 'size' => $eData[0],'age' => ($eData[1]-$time) );
					}
				}
			}
		}

		$memcache_user_list = array();
		if (!$user_id){
			return $memcache_list;
		}
		else{
			$user_id_tag = Model_Kiwi::user_id_tag($user_id);
			foreach ($memcache_list as $row) {
				if (strpos($row['key'], $user_id_tag) !== FALSE) {
					$memcache_user_list[] = $row;
				}
			}
			return $memcache_user_list;
		}
		return $memcache_user_list;
	}
	
	public static function generate_db($user_id){
	
		foreach (Model_Kiwi::$mc_classes as $mc_class){
			if ( !(in_array($mc_class, Model_Kiwi::$mc_user_set_classes)) ){
				
				if($mc_class == 'UserDailyNewsItem'){
					continue;
				}
				$model = Model_Kiwi::get_modelname($mc_class);
				echo "<br>" . $model . " is the model being called <br>";
				$db_obj = $model::find_by_user_id($user_id);
// 				echo "type of object found in db: " . gettype($db_obj) . "<br>";
 				if($db_obj){
 					$db_obj->display_string();
 				}
			}
		}	// end of for loop - mc_classes
		
		foreach (Model_Kiwi::$mc_user_set_classes as $mc_user_class){
			$model = Model_Kiwi::get_modelname($mc_user_class);
			echo "<br>" . $model . " is the model being called <br>";
			$db_obj_arr = $model::find_all_by_user_id($user_id);
			if($db_obj_arr != null){
				$i = 1;
				foreach($db_obj_arr as $db_obj){
					echo $i++ . ": ";
					$db_obj->display_string();
				}
			}
			
		}
	}
	
	private static function mismatch_in_db_not_in_memcache($user_id, $res){
		// First, taking all DB objects and comparing with it's respective memcache keys
		foreach (Model_Kiwi::$mc_classes as $mc_class){
			$model = Model_Kiwi::get_modelname($mc_class);
			echo $model . " is the model being called <br>";
				
			if ( !(in_array($mc_class, Model_Kiwi::$mc_user_set_classes)) ){
				if($mc_class == 'UserDailyNewsItem'){
					continue;
				}
				$db_obj = $model::find_by_user_id($user_id);
				if ($db_obj){
					$key_mc_class = Model_Kiwi::kiwi_mc_key($mc_class, $user_id);
						
					if ( ( ($mc_obj = Model_Kiwi::$kiwi_mc->get($key_mc_class)) === FALSE )
					&& (Model_Kiwi::$kiwi_mc->getResultCode() != Memcached::RES_SUCCESS) ){
						if ($db_obj == $mc_obj){
							echo "GUESS, both the objects are NULL<br>";
						}
						else{
// 							echo "<br><b>Mismatch-" . ++$res['soft_mismatch'] . " </b>:Memcache key - ".$key_mc_class." has expired: ";
// 							$db_obj->display_string();
						}
					}
					else{
						if($mc_obj instanceof  ActiveRecord\Model){
							$mc_obj->set_as_old_record();
						}
						if ($db_obj == $mc_obj){
							$res['match']++;
							// 							echo "<br>Match-" . $res['match'] . ": Both the objects are SAME <br>";
						}
						else{
							echo "<br><b>Hard Mismatch-" . ++$res['hard_mismatch'] . "</b>:Memcache key $key_mc_class has NOT expired: db object is different from mc_obj ";
							$db_obj->display_string();
							echo "<br> Getting var_dump of mc_obj: <br>";
							$mc_obj->display_string();
							// 							var_dump($mc_obj);
		
						}
					}
				}
				else{
					echo "$mc_class: db_obj do not exist for this user_id-${user_id}";
			}
			}
			else{
			$db_obj_arr = $model::find_all_by_user_id($user_id);
			if($db_obj_arr != null && sizeof($db_obj_arr) > 0){
			foreach($db_obj_arr as $db_obj){
			$pcol = $db_obj->kiwi_primary_key();
			$pval = $db_obj->$pcol;
			$key_mc_class = Model_Kiwi::kiwi_mc_key($mc_class, $pval);
		
			if ( ( ($mc_obj = Model_Kiwi::$kiwi_mc->get($key_mc_class)) === FALSE )
			&& (Model_Kiwi::$kiwi_mc->getResultCode() != Memcached::RES_SUCCESS) ){
			if ($db_obj == $mc_obj){
			echo "GUESS, both the objects are NULL<br>";
			}
							else{
								echo "<br><b>Soft Mismatch-" . ++$res['soft_mismatch'] . " </b>:Memcache key - ".$key_mc_class." has expired: ";
								$db_obj->display_string();
							}
						}
							else{
								
							if($mc_obj instanceof  ActiveRecord\Model){
								$mc_obj->set_as_old_record();
							}
									
								if ($db_obj == $mc_obj){
								$res['match']++;
								// 								echo "<br>Match-" . $res['match'] . ": Both the objects are SAME <br>";
								}
								else{
								echo "<br><b>Hard Mismatch-" . ++$res['hard_mismatch'] . "</b>:Memcache key- $key_mc_class has NOT expired: db object is different from mc_obj ";
								$db_obj->display_string();
								echo "<br> Getting var_dump of mc_obj: <br>";
								$mc_obj->display_string();
// 								var_dump($mc_obj);
								}
								}
									} // end of for loop of object array found
			}
			}
		
			}	// end of for loop - mc_classes
		return $res;
	}
	
	private static function mismatch_in_memcache_not_in_db($user_id, $res){
		
		$memcache_list = Model_Kiwi::generate_memcache_keys(null);
		$memcache_keys = array_keys($memcache_list);
		$user_id_tag = Model_Kiwi::user_id_tag($user_id);
		foreach($memcache_keys as $mc_key){
			$split_key = explode($user_id_tag, $mc_key);
			// memcache key belonging to this user
			if (sizeof($split_key) > 1){
				$kiwi_class = substr( $split_key[0], strlen(Model_Kiwi::$apc_memcache_key_prefix) );
				$primary_key = $split_key[1];
				try{
					//find DB obj based on kiwi_class and primary key
					if ( in_array($kiwi_class, Model_Kiwi::$mc_classes) ){
						$sync_model = 'Model_'.$kiwi_class;
						$r = new ReflectionClass($sync_model);
						$ar_model = $r->newInstanceArgs( array() );
						$pcol = $ar_model->kiwi_primary_key();
			
// 						$find_query = 'find_by_'.$pcol;
// 						echo "primary key is $primary_key  .... find query is $find_query <br>";
// 						$db_obj = $ar_model::$find_query($primary_key);
// 						$db_obj->display_string();
						if ($pcol == 'composite_key'){
							$db_obj = $ar_model::find_by_composite_key($primary_key);
						}else{
							$db_obj = $ar_model::find($primary_key);
						}
			
						if ( (($mc_obj = Model_Kiwi::$kiwi_mc->get($mc_key)) === FALSE)
						&& (Model_Kiwi::$kiwi_mc->getResultCode() != Memcached::RES_SUCCESS) ){
						echo "key - $mc_key has expired - this should not be listed at all";
						}else{
							
							if($mc_obj instanceof  ActiveRecord\Model){
								$mc_obj->set_as_old_record();
							}
							// check with DB
							if ($db_obj == $mc_obj){
								$res['match']++;
		// 						echo "<br>Match-" . $res['match'] . ": Both the objects are SAME <br>";
							}
							else{
								echo "<br><b>Mismatch-" . ++$res['hard_mismatch'] . "</b>:Memcache key- $mc_key has NOT expired: db object is different from mc_obj ";
		// 						echo "<br> Getting var_dump of mc_obj: <br>";
		// 						$mc_obj->display_string();
							}
						}
					}
				}catch(Exception $ex){
					print "Got exception - most probably in finder function". $ex->getMessage()."<br>\n";
					// 					if(! Model_Kiwi::$mc_supress_exceptions)  throw $ex;
				}
		
			}else{
				// memcache key either belongs to some other user OR it is an APC key (market)
			}
		}
		return $res;
	}
	
	public static function cmp_db_memcache($user_id){
		$res['hard_mismatch'] =0;
		$res['soft_mismatch'] =0;
		$res['match'] =0;
		
		if( !(Model_Kiwi::$mc_enabled &&  Model_Kiwi::$kiwi_mc) ){
			echo "Memcache is not enabled, No Comparison Needed<br>";
			return;
		}

		echo "<br>All the MISMATCHES where object is <b>present in DB but not in cache</b><br>";
		$res = Model_Kiwi::mismatch_in_db_not_in_memcache($user_id, $res);
		
		echo "<br><b>no. of mismatches found: HARD - " . $res['hard_mismatch'] . " SOFT mismatches - " . $res['soft_mismatch']
		. " Total no. of Matches found: " . $res['match'] ."</b><br>";
		
		echo "<br>All the MISMATCHES where object is <b>present in Cache but not in DB</b><br>";
		Model_Kiwi::mismatch_in_memcache_not_in_db($user_id, $res);
		
		echo "<br><b>no. of mismatches found: HARD - " . $res['hard_mismatch'] . " SOFT mismatches - " . $res['soft_mismatch'] 
			. " Total no. of Matches found: " . $res['match'] ."</b><br>";
		return $res;
	}
		
	/**
	 * Returns the maximum id present in the table
	 */	
	public static function get_max_id($table_name, $user_id = null){
		/*
		 * If the soft delete is enabled, it will get the max for non-soft-deleted rows. 
		 * We need to turn off the soft_delete option before getting the max value, and the rest it to previous value. 
		 */
		$tmp_disable_mysql_delete = static::$disable_mysql_delete;
		static::$disable_mysql_delete = false;
			
		$model_name = Model_Kiwi::model_name($table_name);
		$id_column = Model_Kiwi::singularize($table_name) . '_id';

		if($user_id != null)
			$query_statement = "select max(" . $id_column . ") as max_id1 from " . $table_name. " where user_id = " . $user_id;
		else
			$query_statement = "select max(" . $id_column . ") as max_id1 from " . $table_name;

		$max_ids = $model_name::find_by_sql($query_statement);

		$max_id_value = (sizeof($max_ids) > 0)? $max_ids[0]->max_id1 : 0;
		static::$disable_mysql_delete = $tmp_disable_mysql_delete;
		return $max_id_value;
	}	

}
?>
