<?php

include_once(MODPATH . "kiwi-backend/libraries/kiwi_sync.php");

function diff_at($user_id, $last_version, $sync_classes, $user_app_version, $user_diff = null){
	$current_version = Model_TableVersion::get_latest_market_version();
	$updated_classes = Model_TableVersion::updated_classes($last_version, $current_version, $sync_classes);
	$delimiter = Kohana::$config->load('gameconfig.json_data_delimiter');
	$market_data_wrapper_class = Kohana::$config->load('gameconfig.market_data_wrapper_class');
	$user_data_wrapper_class = Kohana::$config->load('gameconfig.user_data_wrapper_class');
	$user_data = null;
	$market_data = '{ "@type":"'.$market_data_wrapper_class.'"'.", \n" .updated_data($last_version, $current_version, $updated_classes) . "\n}";
	if($user_id != null){
		create_new_user_quests($user_id, $last_version, $current_version);
		$user_resources = Model_UserStat::to_resource_json($user_id);
		$user_assets = Model_UserAsset::to_assets_json($user_id);
		$user_quest_list = Model_UserQuest::get_user_quests($user_id);
		$user_quests = Model_UserQuest::to_quests_json($user_quest_list);
		$user_quest_tasks = Model_UserQuestTask::to_quest_tasks_json($user_id, $user_quest_list);
		$user_daily_bonus = Model_UserDailyBonus::to_daily_bonus_json($user_id);
		$user_daily_news = Model_UserDailyNews::to_daily_news_json($user_id);
		$user_data = $user_resources . ", " . $user_assets . ", " . $user_quests . ", " . $user_quest_tasks . ", " . 
		$user_daily_bonus . ", " . $user_daily_news;
		
		if (Kohana::$config->load('gameconfig.social_enabled')) {
			$user_social_profiles = Model_UserNetworkProfile::to_user_network_profiles_json($user_id);
			$user_neighbors = Model_UserGlobalNeighborDetail::to_neighbors_json($user_id);
			$user_pending_neighbor_requests = Model_UserGlobalNeighborDetail::to_pending_neighbor_requests_json($user_id);
			$users_ack_pending_town_visits = Model_UserTownVisit::to_pending_acknowledged_visits_json($user_id);
			$users_pending_social_gift_requests = Model_UserSocialGift::to_pending_social_gift_requests_json($user_id);
			$users_pending_user_requests = Model_UserGlobalNeighborDetail::to_pending_user_requests_json($user_id);
			$max_neighbor_gift_id = Model_UserNeighborGift::max_user_neighbor_gift_id($user_id);
				
			$user_data = $user_data . "," . $user_social_profiles . "," . $user_neighbors . "," .
					$user_pending_neighbor_requests . "," . $users_ack_pending_town_visits . "," . 
					$users_pending_social_gift_requests . "," . $users_pending_user_requests . "," .
					'"maxNeighborGiftIdOnServer": ' . $max_neighbor_gift_id;
		}
		
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

?>
