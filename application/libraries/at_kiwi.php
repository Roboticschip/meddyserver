<?php

include_once(MODPATH . "kiwi-backend/libraries/kiwi_sync.php");

function diff_at($user_id, $last_version, $sync_classes, $remove_lp , $user_diff = null){
	$current_version = Model_TableVersion::get_latest_market_version();
	$updated_classes = Model_TableVersion::updated_classes($last_version, $current_version, $sync_classes);
	
	// added for ab testing (START)
	$test_classes = null;
	if ($user_diff != null) {
		$test_classes = array_keys($user_diff);
		foreach($test_classes as $class) {
			Kohana::$log->add(Log::DEBUG , 'Found '.$class.' as test class');
		}
		$test_classes = array_intersect($test_classes , $sync_classes);
		$updated_classes = array_unique(array_merge($test_classes , $updated_classes));
	}
	// added for ab testing (END)
	

	$delimiter = Kohana::$config->load('gameconfig.json_data_delimiter');
	$market_data_wrapper_class = Kohana::$config->load('gameconfig.market_data_wrapper_class');
	$user_data_wrapper_class = Kohana::$config->load('gameconfig.user_data_wrapper_class');
	$user_data = null;

	$market_data = '{ "@type":"'.$market_data_wrapper_class.'"'.", \n" .updated_data($last_version, $current_version, $updated_classes , FALSE , null , $user_diff) . "\n}";
	if($user_id != null){
		//fix_bundle_sale($user_id, $current_version);
		create_new_user_quests($user_id, $last_version, $current_version);
		create_or_update_new_user_starter_packs($user_id,$last_version,$current_version);
		$user_resources = Model_UserStat::to_resource_json($user_id, $remove_lp);
		$user_request_log = Model_UserRequestLog::to_request_logs_json($user_id);
		$user_assets = Model_UserAsset::to_assets_json($user_id);
		$user_quest_list = Model_UserQuest::get_user_quests($user_id);
		$user_quests = Model_UserQuest::to_quests_json($user_quest_list);
		$user_quest_tasks = Model_UserQuestTask::to_quest_tasks_json($user_id, $user_quest_list);
		$user_daily_bonus = Model_UserDailyBonus::to_daily_bonus_json($user_id);
		$user_daily_news = Model_UserDailyNews::to_daily_news_json($user_id);
		$user_details = Model_UserDetail::to_details_json($user_id);
		$user_plans = Model_UserPlan::to_plans_json($user_id);
		$user_starter_packs = Model_UserStarterPack::to_starter_packs_json($user_id);
		$user_themes = Model_UserTheme::to_user_themes_json($user_id);
		$user_data = $user_resources . ", " . $user_assets . ", " . $user_quests . ", " . $user_quest_tasks . ", " . $user_daily_bonus. "," .$user_request_log.",". 
		$user_daily_bonus . ", " . $user_daily_news . ", " . $user_details. "," . $user_plans. "," . $user_starter_packs . "," . $user_themes;
		
		if (Kohana::$config->load('gameconfig.social_enabled')) {
			$user_social_profiles = Model_UserNetworkProfile::to_user_network_profiles_json($user_id);
			$user_neighbors = Model_UserGlobalNeighborDetail::to_neighbors_json($user_id);
			$user_pending_neighbor_requests = Model_UserGlobalNeighborDetail::to_pending_neighbor_requests_json($user_id);
			$users_pending_social_gift_requests = Model_UserSocialGift::to_pending_social_gift_requests_json($user_id);
			$users_pending_user_requests = Model_UserGlobalNeighborDetail::to_pending_user_requests_json($user_id);
			$max_neighbor_gift_id = Model_UserNeighborGift::max_user_neighbor_gift_id($user_id);
		
			$user_data = $user_data . "," . $user_social_profiles . "," . $user_neighbors . "," .
					$user_pending_neighbor_requests . "," .
					$users_pending_social_gift_requests . "," . $users_pending_user_requests . "," .
					'"maxNeighborGiftIdOnServer": ' . $max_neighbor_gift_id;
		}
		if ($user_id >= Model_UserAsset::$START_ID && $user_id <= Model_UserAsset::$END_ID)
			$max_user_asset_id = Model_KiwiUserAsset::max_user_asset_id_in_range($user_id);
		else
			$max_user_asset_id = Model_KiwiUserAsset::max_user_asset_id($user_id); 
					 
		$user_data = '{ "@type":"' . $user_data_wrapper_class . '"' . ", \n" . $user_data . 
						', ' . '"serverEpochTimeAtSessionStart": ' . strtotime(Model_Kiwi::now()). ',' . '"maxUserAssetIdOnServer": ' . $max_user_asset_id."\n}";
	}
	$data_array = array(implode(",", $updated_classes), $market_data, $user_data);
	$jdata = implode($delimiter, array_filter($data_array, 'strlen'));
	//appending current server time
	return $jdata;
}

function neighbor_diff($user_id, $friend_id, $last_version, $sync_classes){
	$current_version = Model_TableVersion::global_version();
	$delimiter = Kohana::$config->load('gameconfig.json_data_delimiter');
	$user_data_wrapper_class = Kohana::$config->load('gameconfig.user_data_wrapper_class');
	$user_data = null;

	if($user_id != null){
		$user_resources = Model_UserStat::to_resource_json($user_id);
		$user_assets = Model_UserAsset::to_assets_json($user_id);
		$user_neighbor_gifts = Model_UserNeighborGift::to_gifts_json($user_id, $friend_id);
			
		$user_data = $user_resources . ", " . $user_assets . ", " .  $user_neighbor_gifts;

		if ($user_id >= Model_UserAsset::$START_ID && $user_id <= Model_UserAsset::$END_ID)
			$max_user_asset_id = Model_KiwiUserAsset::max_user_asset_id_in_range($user_id);
		else
			$max_user_asset_id = Model_KiwiUserAsset::max_user_asset_id($user_id);

		$user_data = '{ "@type":"' . $user_data_wrapper_class . '"' . ", \n" . $user_data .
		', ' . '"serverEpochTimeAtSessionStart": ' . strtotime(Model_Kiwi::now()). ',' . '"maxUserAssetIdOnServer": ' . $max_user_asset_id.
		"\n}";
	}
	$data_array = array($user_data);
	$jdata = implode($delimiter, array_filter($data_array, 'strlen'));
	//appending current server time
	return $jdata;
}

function fix_bundle_sale($user_id, $current_version) {
//	if ($user_id = 3273) {
		$is_catsy_available = 0;
		//$catsy_assets = Model_UserAsset::find('all',array('conditions' => array('user_id = ? AND asset_id = ?', $user_id, 'Catsy')));
		$catsy_assets = Model_UserAsset::find_by_sql("SELECT * from user_assets where user_id =".$user_id." AND asset_id ='Catsy'");
		foreach ($catsy_assets as $c_asset) {
			$is_catsy_available = 1;
		}
	
//		$market_class_key = Model_Kiwi::market_key("AssetState", $current_version);
//		$incubation_states = Model_Kiwi::get_object_from_apc_mem_cache($market_class_key);
	
//		if($incubation_states == null) {
			$incubation_states = Model_AssetState::find("all",array('conditions' => array('state_id = ?', 'incubation')));
//		}
	
	
	
		$in_states = Array();
		foreach ($incubation_states as $inc_state) {
			$in_states[] = $inc_state->asset_state_id;
		}
		$users = Model_UserPlan::find('all', array('conditions' => array('user_id = ? AND plan_id = ?', $user_id, '1002')));
		$first = true;
		foreach ($users as $user) {
			if ($first) {
				$first = false;
				$nursery_assets = Model_UserAsset::find('all',array('conditions' => array('user_id = ? AND asset_state_id in (?)', $user_id, array(570,572,574,576,578))));
				$nursery_ids = Array();
				foreach ($nursery_assets as $nasset) {
					$nursery_ids[] = $nasset->user_asset_id;
				}//AND soft_deleted = ?
				$assets_in_nursery = Model_UserAsset::find('all',array('conditions' => array('user_id = ? AND asset_state_id in (?) and room_id in (?) ', $user_id, $in_states, $nursery_ids)));
				$vacant_nursery = 0;
				foreach ($nursery_ids as $nid) {
					$flag = 0;
					foreach ($assets_in_nursery as $asset) {
						if ($nid == $asset->room_id) {
							$flag = 1;
							break;
						}
					}
					if ($flag == 0) {
						$vacant_nursery = $nid;
						break;
					}
				}
				$max_user_asset_id = Model_UserAsset::find_by_sql("SELECT MAX(user_asset_id) as max from user_assets where user_id = ".$user_id." and user_asset_id <= ".$user_id."999999");
				if ($is_catsy_available == 0 && $vacant_nursery != 0) {
					$catsy_asset = new Model_UserAsset();
					$catsy_asset->user_asset_id = $max_user_asset_id[0]->max+1;
					$catsy_asset->user_id = $user_id;
					$catsy_asset->asset_id = "Catsy";
					$catsy_asset->room_id = $vacant_nursery;
					$catsy_asset->xpos = 0;
					$catsy_asset->ypos = 0;
					$catsy_asset->asset_state_id = 4547;
					$catsy_asset->crystals_fed = 0;
					$catsy_asset->crystals_total_fed = 0;
					$catsy_asset->state_start_time = $user->created_at;
					$catsy_asset->save();
				}
			}
		}
	echo "</pre>";
//	}
}

?>
