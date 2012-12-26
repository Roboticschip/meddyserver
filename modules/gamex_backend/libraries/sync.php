<?php

/**
 *  Let us assume the classnames to contain the usual classname we would have given e.g. Plan, Bundle, AssetCategory
 *  modelname will be the kohana restricted model name e.g. Model_Plan, Model_Bundle, Model_AssetCategory
 *  tablename will be the underscore + plural form of classname e.g. plans, bundles, asset_categories
 */ 

include_once(MODPATH . "gamex_backend/libraries/Google_Spreadsheet.php");
include_once(MODPATH . "gamex_backend/libraries/Local_Spreadsheet.php");
include_once(Kohana::$config->load('gameconfig.sync_helper_path'));

class ExLimitReachedException extends Exception { }

//AT specific => its not getting activity and activities 
function pluralize($str){
	//if(substr($str, -7) == 'ctivity') return substr($str,0,-7).'ctivities';
	return ActiveRecord\Utils::pluralize($str);
}

 function get_modelname($classname){
	return 'Model_'.$classname;
}

function sync_spreadsheet($username, $password, $spreadsheet_name, $sync_classes_before, $sync_classes_after, $assets_spreadsheet, $to_be_synced_categories, $sync_selected, $state_worksheets, $catch_exceptions_flag){

	$exceptions = array();
	$maximum_exceptions = Kohana::$config->load('gameconfig.max_exceptions_allowed');
	$ss = new Google_Spreadsheet($username,$password);
	//for i18n support
	if( Kohana::$config->load('gameconfig.use_i18n' )){
		$locale_code = $_REQUEST['locale_code'];
		if(! $locale_code) throw new Exception('No locale code was provided when using the internation version');
		$spreadsheet_name = $spreadsheet_name . "-final-" . $locale_code;
		$assets_spreadsheet = $assets_spreadsheet . "-final-" . $locale_code;
		$ss = new Local_Spreadsheet();
		print "created the local spreadsheet";
	}

	$ss->useSpreadsheet($spreadsheet_name);
	
	/*
	//$sync_models = array('Bundle');
	print "Will sync the following Models before assets: <br>\n";
	foreach($sync_classes_before as $sclass){
		print $sclass.".........\n<br>";
	}
	print "==========\n<br>";
*/
	
	
	$current_time = time();
	$table_updated = false;

	//$dbconn = Model_TableVersion::connection();
	//$dbconn->transaction();
	try{
		sync_extra_sheets($ss, $current_time);
		// Turn on market_update before syncing
	//	Model_ServerParam::turn_on_market_update();

	//	$previous_version = Model_TableVersion::global_version();
/*		sync_before();
		//sync the non-asset tables (including asset categories
		$updated_classes = array();
		foreach($sync_classes_before as $sync_class){
			$worksheet_name = $sync_class;//Model_Kiwi::pluralize($sync_class);
			try{
				$table_updated = sync_worksheet($ss, $sync_class, $current_time, $worksheet_name, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
				if($table_updated){
					//Model_TableVersion::update_version($sync_class, $current_time);
				}
				print_r($updated_classes);
			}
			catch(Zend_Gdata_App_Exception $ex){
				$error_message = $ex->getMessage();
				if($error_message=="A worksheet id must be provided for list queries."){
					$error_message = "<font color=\"red\">Worksheet By name ".$worksheet_name." cannot be found/loaded.</font>";
				}
				else{
					throw $ex;
				}
				if(!$catch_exceptions_flag)
					throw $ex;
				array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
				print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
				if(count($exceptions)>=$maximum_exceptions){
					throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
				}
			}
			$updated_classes = array_unique($updated_classes);
		}
		//update the version for updated classes
		foreach($updated_classes as $classname){
			//Model_TableVersion::update_version($classname, $current_time);
		}


		//now sync the asset related tables
		if($assets_spreadsheet != null){
			$ss->useSpreadsheet($assets_spreadsheet);
			if($sync_selected == false){
				$categories = Model_AssetCategory::find('all');
			}
			else
				$categories = $to_be_synced_categories;
				
			$updated_classes = array();
			foreach($categories as $cat){
				try{
					if(!in_array($cat->asset_category_id, Kohana::$config->load('gameconfig.do_not_sync')))
						sync_asset_worksheet($ss, $cat, $current_time, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
				}
				catch(Zend_Gdata_App_Exception $ex){
					$error_message = $ex->getMessage();
					if($error_message=="A worksheet id must be provided for list queries."){
						$error_message = "<font color=\"red\">Worksheet By name ".Model_Kiwi::underscore_to_camelcase(Model_Kiwi::pluralize($cat->asset_category_id))." cannot be found/loaded.</font>";
					}
					else{
						throw $ex;
					}
					if(!$catch_exceptions_flag)
						throw $ex;
					array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
					print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
					if(count($exceptions)>=$maximum_exceptions){
						throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
					}
				}
				catch(Exception $ex){
					print "<font color=\"red\">worksheet can not be synced for category: ". $cat->asset_category_id. " <\n<br></font>";
					throw $ex;
				}
				print_r($updated_classes);
				$updated_classes = array_unique($updated_classes);
			}
				
			if($sync_selected == false)
				$sync_asset_states = Kohana::$config->load('gameconfig.sync_asset_states') ;
			else
				$sync_asset_states = $state_worksheets;
			foreach ( $sync_asset_states as $sheetname ) {
				sync_asset_state_worksheet($ss, $sheetname, $current_time, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
			}
			//update the version for updated classes
			print_r($updated_classes);
			foreach($updated_classes as $classname){
				Model_TableVersion::update_version($classname, $current_time);
			}
		}

		sync_extra_sheets($ss, $current_time);

		print "Will sync the following Models after assets: <br>\n";
		foreach($sync_classes_after as $sclass){
			print $sclass."\n<br>";
		}
		print "\n<br>";

		//sync the non-asset tables after assets
		foreach($sync_classes_after as $sync_class){
			$worksheet_name = Model_Kiwi::pluralize($sync_class);
			$table_updated = false;
			try{
				if(in_array($sync_class, array('Quest', 'QuestTask')) ){
					$table_updated = sync_worksheet($ss, $sync_class, $current_time, 'Fue'.$worksheet_name, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
				}
			}
			catch(Zend_Gdata_App_Exception $ex){
				$error_message = $ex->getMessage();
				if($error_message=="A worksheet id must be provided for list queries."){
					$error_message = "<font color=\"red\">Worksheet By name Fue".$worksheet_name." cannot be found/loaded.</font>";
				}
				else{
					throw $ex;
				}
				if(!$catch_exceptions_flag)
					throw $ex;
				array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
				print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
				if(count($exceptions)>=$maximum_exceptions){
					throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
				}
			}
			try{
				$table_updated = sync_worksheet($ss, $sync_class, $current_time, $worksheet_name, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag) || $table_updated;
			}
			catch(Zend_Gdata_App_Exception $ex){
				$error_message = $ex->getMessage();
				if($error_message=="A worksheet id must be provided for list queries."){
					$error_message = "<font color=\"red\">Worksheet By name ".$worksheet_name." cannot be found/loaded.</font>";
				}
				else{
					throw $ex;
				}
				if(!$catch_exceptions_flag)
					throw $ex;
				array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
				print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
				if(count($exceptions)>=$maximum_exceptions){
					throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
				}
			}
			if($table_updated){
				Model_TableVersion::update_version($sync_class, $current_time);
			}
			$updated_classes = array_unique($updated_classes);
		}
		
		foreach($updated_classes as $classname){
			Model_TableVersion::update_version($classname, $current_time);
		}*/
	}
	catch(ExLimitReachedException $ex){
		print "</br></br>Exception limit reached.</br>Note that there may be more coming your way in the next sync. hehehe!!!</br></br>";
	}
	catch(Exception $ex){
	//	$dbconn->rollback();
		print "Rolling back due to the exception => ". $ex->getMessage();
		throw $ex;
	}
	
}



function sync_spreadsheetold($username, $password, $spreadsheet_name, $sync_classes_before, $sync_classes_after, $assets_spreadsheet, $to_be_synced_categories, $sync_selected, $state_worksheets, $catch_exceptions_flag){
	
	$exceptions = array();
	$maximum_exceptions = Kohana::$config->load('gameconfig.max_exceptions_allowed');
	$ss = new Google_Spreadsheet($username,$password);
	//for i18n support
	if( Kohana::$config->load('gameconfig.use_i18n' )){
		$locale_code = $_REQUEST['locale_code'];
		if(! $locale_code) throw new Exception('No locale code was provided when using the internation version');
		$spreadsheet_name = $spreadsheet_name . "-final-" . $locale_code;
		$assets_spreadsheet = $assets_spreadsheet . "-final-" . $locale_code;
		$ss = new Local_Spreadsheet();
		print "created the local spreadsheet";
	}
	
	$ss->useSpreadsheet($spreadsheet_name);
	//$sync_models = array('Bundle');
	print "Will sync the following Models before assets: <br>\n";
	foreach($sync_classes_before as $sclass){
		print $sclass."\n<br>";
	}
  	print "\n<br>";

	$current_time = time();
	$table_updated = false;

	$dbconn = Model_TableVersion::connection();
	$dbconn->transaction();
	try{
		
		// Turn on market_update before syncing 
		Model_ServerParam::turn_on_market_update();
		
		$previous_version = Model_TableVersion::global_version();
		sync_before();
		//sync the non-asset tables (including asset categories
		$updated_classes = array();
		foreach($sync_classes_before as $sync_class){
			$worksheet_name = Model_Kiwi::pluralize($sync_class);
			try{
				$table_updated = sync_worksheet($ss, $sync_class, $current_time, $worksheet_name, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
				if($table_updated){
					Model_TableVersion::update_version($sync_class, $current_time);
	    		}
	    		print_r($updated_classes);
			}
			catch(Zend_Gdata_App_Exception $ex){
				$error_message = $ex->getMessage();
				if($error_message=="A worksheet id must be provided for list queries."){
					$error_message = "<font color=\"red\">Worksheet By name ".$worksheet_name." cannot be found/loaded.</font>";
				}
				else{
					throw $ex;
				}
				if(!$catch_exceptions_flag)
					throw $ex;
				array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
				print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
				if(count($exceptions)>=$maximum_exceptions){
					throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
				}
			}
			$updated_classes = array_unique($updated_classes);
		}
		//update the version for updated classes
		foreach($updated_classes as $classname){
			Model_TableVersion::update_version($classname, $current_time);
		}
		
	
		//now sync the asset related tables
		if($assets_spreadsheet != null){
			$ss->useSpreadsheet($assets_spreadsheet);
			if($sync_selected == false){
				$categories = Model_AssetCategory::find('all');
			}
			else
				$categories = $to_be_synced_categories;
			
			$updated_classes = array();
			foreach($categories as $cat){
				try{
					if(!in_array($cat->asset_category_id, Kohana::$config->load('gameconfig.do_not_sync')))
					sync_asset_worksheet($ss, $cat, $current_time, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
				}
				catch(Zend_Gdata_App_Exception $ex){
					$error_message = $ex->getMessage();
					if($error_message=="A worksheet id must be provided for list queries."){
						$error_message = "<font color=\"red\">Worksheet By name ".Model_Kiwi::underscore_to_camelcase(Model_Kiwi::pluralize($cat->asset_category_id))." cannot be found/loaded.</font>";
					}
					else{
						throw $ex;
					}
					if(!$catch_exceptions_flag)
						throw $ex;
					array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
					print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
					if(count($exceptions)>=$maximum_exceptions){
						throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
					}
				}
				catch(Exception $ex){
					print "<font color=\"red\">worksheet can not be synced for category: ". $cat->asset_category_id. " <\n<br></font>";
					throw $ex;
				}
				print_r($updated_classes);
				$updated_classes = array_unique($updated_classes);
			}
			
			if($sync_selected == false)
				$sync_asset_states = Kohana::$config->load('gameconfig.sync_asset_states') ;
			else
				$sync_asset_states = $state_worksheets;
			foreach ( $sync_asset_states as $sheetname ) {
				sync_asset_state_worksheet($ss, $sheetname, $current_time, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
			}
			//update the version for updated classes
			print_r($updated_classes);
			foreach($updated_classes as $classname){
				Model_TableVersion::update_version($classname, $current_time);
			}
		}
		
		sync_extra_sheets($ss, $current_time);
		
		print "Will sync the following Models after assets: <br>\n";
		foreach($sync_classes_after as $sclass){
			print $sclass."\n<br>";
		}
		print "\n<br>";
	  	
		//sync the non-asset tables after assets
		foreach($sync_classes_after as $sync_class){
			$worksheet_name = Model_Kiwi::pluralize($sync_class);
			$table_updated = false;
			try{
				if(in_array($sync_class, array('Quest', 'QuestTask')) ){
					$table_updated = sync_worksheet($ss, $sync_class, $current_time, 'Fue'.$worksheet_name, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag);
				}
			}	
			catch(Zend_Gdata_App_Exception $ex){
				$error_message = $ex->getMessage();
				if($error_message=="A worksheet id must be provided for list queries."){
					$error_message = "<font color=\"red\">Worksheet By name Fue".$worksheet_name." cannot be found/loaded.</font>";
				}
				else{
					throw $ex;
				}
				if(!$catch_exceptions_flag)
					throw $ex;
				array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
				print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
				if(count($exceptions)>=$maximum_exceptions){
					throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
				}
			}
			try{
				$table_updated = sync_worksheet($ss, $sync_class, $current_time, $worksheet_name, $updated_classes, $exceptions, $maximum_exceptions, $catch_exceptions_flag) || $table_updated;	
		   	}
		   	catch(Zend_Gdata_App_Exception $ex){
		   		$error_message = $ex->getMessage();
		   		if($error_message=="A worksheet id must be provided for list queries."){
		   			$error_message = "<font color=\"red\">Worksheet By name ".$worksheet_name." cannot be found/loaded.</font>";
		   		}
		   		else{
		   			throw $ex;
		   		}
				if(!$catch_exceptions_flag)
					throw $ex;
		   		array_push($exceptions,new Zend_Gdata_App_Exception($error_message));
		   		print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
		   		if(count($exceptions)>=$maximum_exceptions){
		   			throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
		   		}
		   	}
		   	if($table_updated){
					Model_TableVersion::update_version($sync_class, $current_time);
		   	}
		   	$updated_classes = array_unique($updated_classes);
		}
		foreach($updated_classes as $classname){
			Model_TableVersion::update_version($classname, $current_time);
		}	
	}
	catch(ExLimitReachedException $ex){
		print "</br></br>Exception limit reached.</br>Note that there may be more coming your way in the next sync. hehehe!!!</br></br>";
	}
	catch(Exception $ex){
		$dbconn->rollback();
		print "Rolling back due to the exception => ". $ex->getMessage();
		throw $ex;
	}
	if(count($exceptions)>0){
		$dbconn->rollback();
		$error_message = "Some exceptions are caught in the sync process which are listed above";
		print ("Rolling back due to presence of following exceptions :</br>");
		$count = 1;
		foreach($exceptions as $exception){
			$r = new ReflectionClass($exception);
			print ("</br><b>EXCEPTION ".$count." :</b></br>");
			print ("Name: ".$r->getName()."</br>Message: ".$exception->getMessage()."</br>");
			$count++;
		}
		print "</br>";
		throw new Exception($error_message);
	}
	else{
		sync_after();
		$current_version = Model_TableVersion::global_version();
		Model_SchemaVersion::create_or_update($current_version);
		// Turn off market update once syncing finishes
		Model_ServerParam::turn_off_market_update();
		 
		print '</br>' . '</br>' . "Previous Version was : " . $previous_version;
		 
		$table_versions = Model_TableVersion::find_all_by_version($current_time);
		print '</br>'. '</br>' . "Tables Changed :" . '</br>';
		foreach($table_versions as $tv){
			print $tv->tablename . '</br>';
		}
		$dbconn->commit();
	}
}

function sync_worksheet($ss, $classname, $version, $worksheet_name, &$updated_classes, &$exceptions, $maximum_exceptions, $catch_exceptions_flag){
	$ss->useWorksheet( $worksheet_name );
	print "will sync worksheet - ".$worksheet_name." ...<br>\n<br>\n";
	$arrayBundleNameId = array();
		$row = array
	(
			"package_id" => "John Doe"
			, "package_name" => "john@example.com"
	);
	
	if ($ss->addRow($row)) echo "Form data successfully stored using Google Spreadsheet";
	else echo "Error, unable to store spreadsheet data";
	$rows = $ss->getRows();
	$table_updated = false;
	print_r($rows);
	

	foreach($rows as $values){
		print "Value : ".$values."<br>\n<br>";
		$modelname = Model_Gamex::get_modelname($classname);
		//$modelname = get_modelname($classname);
		try{
			$tu = $modelname::create_model($classname,  $values, $version,'_', $updated_classes);
			$table_updated = $table_updated || $tu;
		}
		catch(Exception $ex){
			if($catch_exceptions_flag)
				add_exception_to_list($ex, $worksheet_name, $values, $exceptions, $maximum_exceptions);
			else
				throw $ex;
		}
	}
	return $table_updated;
}

function sync_asset_worksheet($ss, $category, $version, &$updated_classes, &$exceptions, $maximum_exceptions, $catch_exceptions_flag){
	$worksheet_name = Model_Kiwi::underscore_to_camelcase(Model_Kiwi::pluralize($category->asset_category_id));
	print "will sync Assets worksheet - ".$worksheet_name." ...<br>\n<br>\n";
	$ss->useWorksheet($worksheet_name);
	
	$rows = $ss->getRows();
	$table_updated = false;
	foreach($rows as $values){
		$values = pre_process_values($worksheet_name, $values);
		try{
			$tu = Model_Asset::create_or_update($category, $values, $version, $updated_classes);
		}
		catch(Exception $ex){
			if($catch_exceptions_flag)
				add_exception_to_list($ex, $worksheet_name, $values, $exceptions, $maximum_exceptions);
			else
				throw $ex;
		}
	}
}

function sync_asset_state_worksheet($ss, $sheet_name, $version, &$updated_classes, &$exceptions, $maximum_exceptions, $catch_exceptions_flag){
	$ss->useWorksheet($sheet_name);
	$rows = $ss->getRows();
	foreach ( $rows as $values ) {
		try{
    		$tu = Model_AssetState::update_properties($values['assetid'], $values['stateid'], $values, $version, $updated_classes);
		}
		catch(Exception $ex){
			if($catch_exceptions_flag)
				add_exception_to_list($ex, $sheet_name, $values, $exceptions, $maximum_exceptions);
			else
				throw $ex;
		}
	}
}

function add_exception_to_list( $ex, $worksheet_name, $values, &$exceptions, $maximum_exceptions){
	$r = new ReflectionClass($ex);
	$changed = false;
	if($r->getName()=="ActiveRecord\DatabaseException"){
		if(strpos($ex->getMessage(),"foreign key constraint fails")!=false){
			$parts_with_dot = explode('.',$ex->getMessage());
			$parts_with_quote = explode('`',$parts_with_dot[1]);
			$child_table = $parts_with_quote[1];
			$foreign_part = substr($ex->getMessage(),strpos($ex->getMessage(),"REFERENCES"));
			print $foreign_part."</br>";
			$parts_with_quote = explode('`',$foreign_part);
			$foreign_column = $parts_with_quote[3];
			$parent_table = $parts_with_quote[1];
			$ex = new Activerecord\DatabaseException("<font color=\"red\">A ".$foreign_column." value which is not present in ".$parent_table." is used </font>in ".$child_table."</br>Worksheet: ".$worksheet_name."</br>values:<pre>".print_r($values,true)."</pre>Position: ".$ex->getFile()." : ".$ex->getLine());
			$changed=true;
		}
		elseif(strpos($ex->getMessage(),"Unknown column")!=false){
			$trace_array = $ex->getTrace();
			foreach($trace_array as $element){
				if(Model_Kiwi::starts_with($element['class'], "Model_")){
					$parts_with_quote = explode('\'',$ex->getMessage());
					$unknown_column_name = $parts_with_quote[1];
					$unknown_table = Model_Kiwi::get_table_name(Model_Kiwi::get_classname($element['class']));
					$ex = new Activerecord\DatabaseException("<font color=\"red\">A required column `".$unknown_column_name."` is not present in database table `".$unknown_table."`</font></br>Worksheet: ".$worksheet_name."</br>values:<pre>".print_r($values,true)."</pre>Position: ".$ex->getFile()." : ".$ex->getLine());
					break;
				}
			}
			$changed = true;
		}
	}
	if(!$changed){
		$ex = $r->newInstance("<font color=\"red\">".$ex->getMessage()."</font></br>Worksheet: ".$worksheet_name."</br>values:</br><pre>".print_r($values,true)."</pre>Position: ".$ex->getFile()." : ".$ex->getLine());
	}
	array_push($exceptions,$ex);
	print ("<br><b><font color=\"red\">Exception ".count($exceptions)." occured here.</font></b><br>");
	if(count($exceptions)>=$maximum_exceptions){
		throw new ExLimitReachedException("Dude, I had enough of these exceptions. Handle Them.");
	}
}

/**
 * returns the updated data in JSON format
 * $refresh_cache: It can be set only by admin - called in action_cachediff()
 * @throws Exception
 */
function updated_data($last_version, $current_market_version, $only_classes = array(), $refresh_cache = FALSE, $prefix_key = null , $user_diff = null){
	
	
	if ((Model_Kiwi::$apc_enabled || Model_Kiwi::$mc_enabled) && !Model_Kiwi::$is_call_from_lower_version){
		$diff_data_from_cache = Model_Kiwi::get_market_diff_from_cache($last_version, $current_market_version, $prefix_key);
	}else{
		$diff_data_from_cache = FALSE;
	}
	
	
	if((!$diff_data_from_cache) || $refresh_cache){
		$updated_classes = Model_TableVersion::updated_classes($last_version, $current_market_version, $only_classes);
			
		$json_str = "  ";
		$json_str = $json_str . "\"version\" : ". $current_market_version . ",\n";
		foreach($updated_classes as $classname){
			$json_str = $json_str . json_array($classname, $last_version, $current_market_version).",\n";
		}
		
		$diff_data = substr($json_str,0,-2);
		
		if ((Model_Kiwi::$apc_enabled || Model_Kiwi::$mc_enabled) && !Model_Kiwi::$is_call_from_lower_version){
			//push the calculated diff back to apc and memcache
			push_diff_data_to_cache($last_version, $diff_data, $current_market_version, $prefix_key);
		}
		
		// this will be null in the case refresh cache so won't interfere with that
		if ($user_diff != null) {
			Kohana::$log->add(Log::DEBUG , 'Recalculating the diff since user_diff is non null');
			
			$test_classes = array_keys($user_diff);
			$test_classes = array_intersect($test_classes , $only_classes);
			$updated_classes = array_unique(array_merge($test_classes , $updated_classes));
		
			$json_str = " ";
			$json_str = $json_str . "\"version\" : ". $current_market_version . ",\n";
			
			foreach($updated_classes as $classname){
				$json_str = $json_str . json_array($classname, $last_version, $current_market_version , $user_diff).",\n";
			}
			
			$diff_data = substr($json_str,0,-2);
		}
		
		return $diff_data;
	} else {
		
		if ($user_diff != null) {
			
			$updated_classes = Model_TableVersion::updated_classes($last_version, $current_market_version, $only_classes);
			
			Kohana::$log->add(Log::DEBUG , 'though diff in cache recalculating it since user_diff is non null');

			$test_classes = array_keys($user_diff);
			$test_classes = array_intersect($test_classes , $only_classes);
			$updated_classes = array_unique(array_merge($test_classes , $updated_classes));
			
			$json_str = " ";
			$json_str = $json_str . "\"version\" : ". $current_market_version . ",\n";
				
			foreach($updated_classes as $classname) {
				$json_str = $json_str . json_array($classname, $last_version, $current_market_version , $user_diff).",\n";
			}
			
			$diff_data = substr($json_str,0,-2);
			
			return $diff_data;
			
		}
		
		Kohana::$log->add(Log::DEBUG, "Found the diff for ${last_version} in cache");
		return $diff_data_from_cache;
	}
}

function push_diff_data_to_cache($last_version, $diff_data, $current_market_version, $prefix_key){
	$market_diff_key = Model_Kiwi::market_diff_key($last_version, $current_market_version, $prefix_key);
	if(! Model_Kiwi::$is_market_update_in_progress){
		Model_Kiwi::apc_mc_set($market_diff_key, $diff_data);
	}
}

//classname can be 'Plan', 'Bundle'
function json_array($classname, $last_version, $current_market_version , $user_diff = null){
	
	$model_attr = Model_Kiwi::get_attributes($classname);
	$models = Model_Kiwi::updated_models($classname, $last_version, $current_market_version , $user_diff);
	$json_str = '"' . lcfirst(Model_Kiwi::pluralize($classname) ) . '": [' . " \n";
	foreach( $models as $m){
		$json_str = $json_str . $m->to_json_io($classname, $model_attr) . ",\n";
	}
	//remove the extra ",\n" added. if no extra ",\n" then initially added " \n" will be removed
	$json_str = substr($json_str,0, -2)."\n ]";
	return $json_str;
}

function displayErrors($errors){
	global $response;
	$response = $response . "<div id='error-Display' class='errorDisplay'>\n";
	foreach($errors as $atterror)
	{
		foreach($atterror as $values)
		$response =  $response .  $values. "</br>";
	}
	$response =  $response . "</div>";
}

function download_generalsheet($username, $password, $sheet_name, $exclude, $env, $dir){
	$ss = new Google_Spreadsheet($username,$password);
	$ss->downloadGeneralsheet($sheet_name, $exclude, "assets/".$env."/".$dir);
	exit;
}

// Speicific function for Slots for downloading spreadsheet
function download_spreadsheet($username, $password, $spreadsheet_name, $env){
	$ss = new Google_Spreadsheet($username,$password);
	$ss->downloadSpreadsheet($spreadsheet_name, "assets/".$env);
	exit;
}


//find and return the Quest object from given list with the specified quest_id
function exists_quest($quest_list, $quest_id){
	if($quest_list != null){
		foreach($quest_list as $lquest){
			if($lquest->quest_id === $quest_id && ($quest_id != NULL || $quest_id != "")){
				Kohana::$log->add(Log::DEBUG, "found the quest in the list :: lquest " . $lquest->quest_id . " , search $quest_id");
				return $lquest;
			}
		}
	}
	return null;
}

//returns whether the user quest has been completed, actual_expired. This quest should never be re-triggered
function check_user_quest_completion_status($user_quest_list, $quest_id){
	foreach($user_quest_list as $uquest){
		if($uquest->quest_id === $quest_id && ($uquest->quest_status == "completed")){
			return TRUE;
		}
	}
	return FALSE;
}

//returns whether the pre requisite quest has been completed not actual expired.
// Then only activate the target quest 
function check_prerequisite_quest_completion_status($user_quest_list, $quest_id){
	foreach($user_quest_list as $uquest){
		if($uquest->quest_id === $quest_id && ($uquest->quest_status == "completed")) {
			return TRUE;
		}
	}
	return FALSE;
}

// create the user_quests for the newly added quests in case the dependent quests are complete or partially complete
function create_or_update_new_user_starter_packs($user_id,$last_version,$current_version){

        if ($last_version == $current_version)
                return;
        $market_class_key = Model_Kiwi::market_key("StarterPack", $current_version);
        $starter_packs = Model_Kiwi::get_object_from_apc_mem_cache($market_class_key);

        if($starter_packs == null) {
                $starter_packs = Model_StarterPack::find("all");
        }

	$user_quests = Model_UserQuest::find('all', array('conditions' => array('user_id = ? AND quest_status = ?', $user_id, 'completed')));
	$user_starter_packs = Model_UserStarterPack::find_all_by_user_id($user_id);
	$user_quest_map = array();
	foreach ($user_quests as $user_quest) {
		$user_quest_map[$user_quest->quest_id] = 1;
	}
	$user_quest_map['']=1; //This is to handle empty quest_dependency field in starter_packs
	$starter_pack_map = array();
	foreach ($starter_packs as $starter_pack) {
		$starter_pack_map[$starter_pack->starter_pack_id] = $starter_pack;
	}
	foreach ($user_starter_packs as $user_starter_pack){
		$starter_pack = $starter_pack_map[$user_starter_pack->starter_pack_id];
		if (strcmp($user_starter_pack->starter_pack_status,Model_UserStarterPack::USED)!=0
			||strcmp($user_starter_pack->starter_pack_status,Model_UserStarterPack::REJECTED)!=0){
			if (strtotime($starter_pack->start_time)<strtotime(Model_Kiwi::now())
					&&strtotime($starter_pack->end_time)>strtotime(Model_Kiwi::now())
					&&(isset($user_quest_map[$starter_pack->quest_dependency])||empty($starter_pack->quest_dependency))) {
				$user_starter_pack->starter_pack_status = Model_UserStarterPack::AVAILABLE;
			}
			else {
				$user_starter_pack->starter_pack_status = Model_UserStarterPack::UNAVAILABLE;
			}
		}
		unset($starter_pack_map[$user_starter_pack->starter_pack_id]);
		$user_starter_pack->save();
	}
	foreach ($starter_pack_map as $starter_pack) {
		if (strtotime($starter_pack->start_time)<strtotime(Model_Kiwi::now())
				&&strtotime($starter_pack->end_time)>strtotime(Model_Kiwi::now())
				&&(isset($user_quest_map[$starter_pack->quest_dependency])||empty($starter_pack->quest_dependency))) {
			$user_starter_pack = new Model_UserStarterPack;
			$user_starter_pack->user_id = $user_id;
			$user_starter_pack->starter_pack_id = $starter_pack->starter_pack_id;
			$user_starter_pack->starter_pack_status = Model_UserStarterPack::AVAILABLE;
			$user_starter_pack->save();
		}
	}
}

// create the user_quests for the newly added quests in case the dependent quests are complete or partially complete
function create_new_user_quests($user_id, $last_version, $current_market_version){
	Kohana::$log->add(Log::INFO, "adding  user_quests for the newly added quests in case the dependent quests are complete or partially complete");
	
	//getting all the user quests
	$user_quests = Model_UserQuest::find_all_by_user_id($user_id);
	
	//getting list of all the quests and questdependencies object from cache
	$market_class_key = Model_Kiwi::market_key("QuestDependency", $current_market_version);
	$quest_dependency_list = Model_Kiwi::get_object_from_apc_mem_cache($market_class_key);
	$market_class_key = Model_Kiwi::market_key("Quest", $current_market_version);
	$quest_list = Model_Kiwi::get_object_from_apc_mem_cache($market_class_key);
	
	if($quest_list == null) {
		$quest_list = Model_Quest::find("all");
	}
	if($quest_dependency_list == null) {
		$quest_dependency_list = Model_QuestDependency::find("all");
	}
	
	//For the quest which are newly added
	// NO need to handle new quests. QuestDependency gets changed for them anyway
		
	//For the quests whose dependencies have been changed
	$new_dependent_quest_models = Model_Kiwi::updated_models("QuestDependency", $last_version, $current_market_version);
	$new_quest_models_for_dependency_change = array();
	foreach($new_dependent_quest_models as $ndqm){
		$lquest = exists_quest($quest_list, $ndqm->quest);
		if($lquest != null)
			array_push($new_quest_models_for_dependency_change, $lquest);
	}
	check_dependency_and_create_quest($user_id, $new_quest_models_for_dependency_change, $user_quests, $quest_list, $quest_dependency_list, $current_market_version);
	
}

function check_dependency_and_create_quest($user_id, $new_quest_models, $user_quests, $quest_list, $quest_dependency_list, $current_market_version){
	
	foreach($new_quest_models as $quest){
			 
		$dependent_quests = array();
			
		$status_check = check_user_quest_completion_status($user_quests, $quest->quest_id);
        
        if($status_check == TRUE){
        	continue;
        }
		
		foreach($quest_dependency_list as $qd){
			if($qd->quest == $quest->id){
				$lquest = exists_quest($quest_list, $qd->dependson_quest);
				if($lquest != null)
					array_push($dependent_quests, $lquest);
			}
			
		}
	
		//check if the dependent quests are already complete
		$count = 0;
		foreach($dependent_quests as $dep_quest){
			$status_check = check_prerequisite_quest_completion_status($user_quests, $dep_quest->quest_id) ;
			if($status_check == TRUE){
				$count += 1;
			}
		}
		
		//add the user_quest with proper status
		if($count > 0){
			if($count === count($dependent_quests)){
				//activate the current quest
				$is_le_quest_supported = Kohana::$config->load('gameconfig.is_le_quest_supported') ;
				if($is_le_quest_supported && $quest->isLEQuest()) {
					if($quest->isPreActualStart()) {
						Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'pre_actual_start', $count);
					} else if($quest->isPreActive()) {
						Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'pre_activated', $count);
					} else if ($quest->isExpired()) { 
						Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'actual_expired', $count);
					} else {
						Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'activated', $count);
					}
				} else {
					Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'activated', $count);
				}
			} else {
				//initialize the current quest
				Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'initialized', $count);
			}	
		}
		
		//If the count of dependent quests is zero then also mark the quest as activated
		if(count($dependent_quests) == 0){
			Model_UserQuest::create_user_quest($user_id, $quest->quest_id, 'activated', $count);
		}
	}
}

?>
