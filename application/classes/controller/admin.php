<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template {
	public $template = 'plain';
     public function before(){
      if ($this->request->action() == "showQuestionForm"){
			$this->template = 'addquestion';
			// Switch template to JSON version if request is AJAX
      } elseif ($this->request->is_ajax()){
				$this->template = 'json';
			}
			elseif ($this->request->action() == "getUsers"){
				$this->template = 'userList';
			}elseif ($this->request->action() == "sync"){
				$this->template = 'syncConfirmation';
			}/* @author manjeet*/
			elseif ($this->request->action() == "home"){
				$this->template = 'home';
			}/* @author manjeet*/
			elseif ($this->request->action() == "pushNotificationAll"){
				$this->template = 'pushNotificationAll';
			}
			parent::before();
		}
		
	public function action_index()
	{	
		$this->response->body('hello, meddy!');
	}
	
	public function action_home()
	{
		$view = new View('home'); // loads the 'article/index.php' file under 'application/view' folder
	//	$view->set("data","Add Question : ");
		$this->response->body($view); // render the  view as response
	}
	
	public function action_updateLocaleSpreadsheet(){
		/*
			//commenting out this 'diff' call code for now,
		//since diff is failing when called through PHP/URLcall at 'setUserCredentials' in jar
		$is_prod_server = Kohana::$config->load('gameconfig.is_production_server');
		if (! $is_prod_server){
		$username = Kohana::$config->load('gameconfig.ss_username');
		$password = Kohana::$config->load('gameconfig.ss_password');
		$diffmerge_jarfile_name = Kohana::$config->load('gameconfig.diffmerge_jarfile_name');
		$mainspreadsheet_name = Kohana::$config->load('gameconfig.mainspreadsheet_name');
		$return_success = -1;
		if(Kohana::$config->load('gameconfig.use_i18n')){
		$localecode = $_REQUEST['locale_code'];
		$configfile_path = Kohana::$config->load('gameconfig.configfile_path');
		$configfile_path = $configfile_path . '_' . $localecode . '.cfg';
		$logfile_path = Kohana::$config->load('gameconfig.logfile_path');
		$logfile_path = $logfile_path . '_' . $localecode . '_' . 'diff';
		//$command = 'java -jar ' . $diffmerge_jarfile_name . ' -a diff ' . '-u ' . $username . ' -p ' . $password . ' -s ' . $mainspreadsheet_name . ' -l ' . $localecode . ' -c ' . $configfile_path . ' -log ' . $logfile_path;
		$command = 'java -jar ' . $diffmerge_jarfile_name . ' -a diff ' . '-u ' . $username . ' -p ' . $password . ' -s ' . $mainspreadsheet_name . ' -l ' . $localecode . ' -c ' . $configfile_path;
		print('command to be executed: ' . $command);
		system($command, $return_success);
		if($return_success != 0){
		$this->template->data = 'Diff failed somewhere !';
		}else{
		$this->template->data = 'Locale Spreadsheets Diff Successful !' ;
		}
		}else{
		$this->template->data = 'use_i18n is not enabled. Diff will not be done !';
		}
		}else{
		$this->template->data = 'You are on production server, diff not allowed';
		}
		*/
		$this->template->data = 'I am not working right now ! Please run the Job [2] (diff) of cms in Run-deck instead !' ;
		$this->template->message = 'Locale Spreadsheets Diff';
	}
	
	public function action_sync(){
		$this->template->data = "This is confirmation page for CMS Sync" ;
		$this->template->message = 'hello, Admin!';
		$this->template->locale_code = "en";
		$this->template->asset_categories = array();	
			
	/*	$categories = Model_AssetCategory::find('all');
		foreach($categories as $category)
			array_push($this->template->asset_categories,$category->asset_category_id);
		$this->template->asset_categories = array_diff($this->template->asset_categories,Kohana::$config->load('gameconfig.do_not_sync'));
		*/
		if( Kohana::$config->load('gameconfig.use_i18n' )){
			$this->template->locale_code = $_REQUEST['locale_code'];
			if(! $this->template->locale_code) throw new Exception('No locale code was provided when using the internation version');
		}
	}
	
	public function action_syncConfirmation(){
		$response = "Sync Successful ";
	
		if(!isset($_POST['legalRequest']))
			die('SyncConfirmation should not be directly accessed.');
	
		$is_prod_server = Kohana::$config->load('gameconfig.is_production_server');
		if (! $is_prod_server){
			include_once(MODPATH . "gamex_backend/libraries/sync.php");
			$username = Kohana::$config->load('gameconfig.ss_username');
			$password = Kohana::$config->load('gameconfig.ss_password');
			$ss_name =Kohana::$config->load('gameconfig.ss_name');
			$ss_assets =Kohana::$config->load('gameconfig.ss_assets');
		//	$ss_name =KiwiConfig::server_env_config('SPREADSHEET_NAME');
		//	$ss_assets =KiwiConfig::server_env_config('ASSETS_SPREADSHEET');
		//	print "Sheet Detail: (".$username.",".$password.",".$ss_name.",".$ss_assets.")   "; 
			print "Reading from environment variables:$ss_name $ss_assets <br/>";
			if(!$ss_name || !$ss_assets) {
			$ss_name = Kohana::$config->load('gameconfig.ss_name');
					$ss_assets = Kohana::$config->load('gameconfig.ss_assets'); // PLEASE DO NOT ADD ANY COMMENTS TO THIS LINE
					print "Reading from gameconfig.php variables:$ss_name $ss_assets <br/>";
			}
	
			$sync_models_before = Kohana::$config->load('gameconfig.admin_sync_models_before_assets');
			$sync_models_after = Kohana::$config->load('gameconfig.admin_sync_models_after_assets');
	
			/*
				//commenting out this 'merge' code for now,
				//since merge is failing when called through PHP/URLcall at 'setUserCredentials' in jar
				$diffmerge_jarfile_name = Kohana::$config->load('gameconfig.diffmerge_jarfile_name');
				$mainspreadsheet_name = Kohana::$config->load('gameconfig.mainspreadsheet_name');
				$return_success = -1;
				if(Kohana::$config->load('gameconfig.use_i18n')){
				$localecode = $_REQUEST['locale_code'];
				$configfile_path = Kohana::$config->load('gameconfig.configfile_path');
				$configfile_path = $configfile_path . '_' . $localecode . '.cfg';
				$logfile_path = Kohana::$config->load('gameconfig.logfile_path');
				$logfile_path = $logfile_path . '_' . $localecode . '_' . 'merge';
				//$command = 'java -jar ' . $diffmerge_jarfile_name . ' -a merge ' . '-u ' . $username . ' -p ' . $password . ' -s ' . $mainspreadsheet_name . ' -l ' . $localecode . ' -c ' . $configfile_path . ' -log ' . $logfile_path;
				$command = 'java -jar ' . $diffmerge_jarfile_name . ' -a merge ' . '-u ' . $username . ' -p ' . $password . ' -s ' . $mainspreadsheet_name . ' -l ' . $localecode . ' -c ' . $configfile_path;
				print('command to be executed: ' . $command);
				system($command, $return_success);
				if($return_success != 0){
				$response1 = 'Merge failed somewhere !';
				}else{
				$response1 = 'Merge successful ! ';
				}
				}else{
				$response1 = 'use_i18n is not enabled. Merge will not be done !';
				}
				*/
					
				$to_be_synced_categories = array();
				$state_worksheets = Kohana::$config->load('gameconfig.sync_asset_states');
			$catch_exceptions_flag = false;
				if(isset($_POST['catchExceptions']))
					$catch_exceptions_flag = true;
					$sync_selected = false;
					if(!isset($_POST['syncAll'])){
						/*
					$to_be_removed = array();
						foreach ($sync_models_before as $sync_model){
						if(!isset($_POST[$sync_model])){
						array_push($to_be_removed,$sync_model);
						}
						}
						$sync_models_before = array_diff($sync_models_before,$to_be_removed);
						foreach ($sync_models_after as $sync_model){
						if(!isset($_POST[$sync_model])){
						array_push($to_be_removed,$sync_model);
						}
						}
						$sync_models_after = array_diff($sync_models_after,$to_be_removed);
						foreach ($state_worksheets as $sync_model){
						if(!isset($_POST[$sync_model])){
						array_push($to_be_removed,$sync_model);
						}
						}
						$state_worksheets = array_diff($state_worksheets,$to_be_removed);
						$sync_selected = true;
						$categories = Model_AssetCategory::find('all');
						foreach($categories as $category){
						$category_name = $category->asset_category_id;
						if(isset($_POST[$category_name])){
						array_push($to_be_synced_categories,$category);
						}
						}*/
						}
							
						// 			echo "<pre>";
						// 			print_r($sync_models_before);
						// 			print_r($sync_models_after);
						// 			print_r($to_be_synced_categories);
						// 			echo "</pre>";
							
						sync_spreadsheet($username, $password, $ss_name, $sync_models_before,  $sync_models_after,$ss_assets, $to_be_synced_categories, $sync_selected, $state_worksheets, $catch_exceptions_flag);
							
						if(Kohana::$config->load('gameconfig.push_quests_to_initial_user_items'))
						Model_InitialUserItem::push_quests_to_initial_items();
	
					//	if(Model_Kiwi::$mc_enabled || Model_Kiwi::$apc_enabled)
			        //	$this->action_refreshcache();
	
			//$this->template->data = $response1 . ' ' . $response ;
			$this->template->data = $response ;
			}else{
			$this->template->data = 'You are on production server, sync() not allowed';
	}
			$this->template->message = 'TA Sync';
		}
	
		
		
} // End Welcome
