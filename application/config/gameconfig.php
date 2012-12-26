<?php defined('SYSPATH') or die('No direct access allowed.');

/*$db_name = KiwiConfig::server_env_config('DB_NAME');
$sheet_name = KiwiConfig::server_env_config('SHEET_NAME');
$game_id = getenv('GAME_ID');
return array(

		'BASE_URL_SUBPATH' => '/cms-mc/',
		'DB_NAME' => 'monster_castle',
		'DISABLE_MYSQL_DELETES' => 1,
		'USE_MEMCACHE' => 1,
		'MEMCACHE_SERVERS' => 'vm06-dal05.internal-kiwiup.com:11211:1,vm07-dal05.internal-kiwiup.com:11211:1',
		'USE_APC' => 1,
		'APC_MEMCACHE_KEY_PREFIX' => 'mc_cms_',
		'USE_SHARDING' => 1,
		'SHEET_NAME' => 'moc-cms-developers',
		'SHARD_MAP' => 'development => mysql://kiwi_mc:yzhmBVPC@10.80.144.227/cms_mc, s001 => mysql://kiwi_mc:yzhmBVPC@10.80.144.227/cms_mc, s002 => mysql://kiwi_mc:yzhmBVPC@10.80.144.227/cms_mc',
		'ADMIN_SHARD_MAP' => 'admin_development => mysql://kiwi_mc_admin:VDEscVNR@game-at-qa.internal-kiwiup.com:13306/cms_mc',
		'SCRIBE_SERVER' => '127.0.0.1',
		'USE_NEW_BI_IMPLEMENTATION' => 1,
		'USE_NEW_PAYLOAD_IMPLEMENTATION' => 1,
		'ON_QA_SERVER' => 1,

);
*/


if(empty($db_name))
	$db_name = 'meddydatabase';
if(empty($sheet_name))
	$sheet_name = 'meddy-sheet';
if (empty($game_id))
	$game_id = 4;
	
return array(
	'sync_classes'	=> array(/*'Resource', 'Level', 'LevelReward', 'Plan', 'PlanItem', 'Activity', 'GameParam', 
							'AssetCategory', 'Asset', 'AssetSpeedupCost', 'AssetProperty', 'MonsterAnimation', 
							'BreedingParameter', 'BreedingParameterValue', 'Quest', 'QuestTask', 'AssetActivityTask', 
							'AssetStateTask','ResourceActivityTask', 'QuestReward', 'Activity', 'QuestDependency', 
							'DailyBonus','DailyNewsItem', 'CategoryStateTask', 'CategoryActivityTask', 'AssetState',
							'AssetStateCost','AssetStateReward', 'AssetCost', 'GuidedTask', 'GameplayNotification',
							'ReminderNotification', 'WidgetActivityTask', 'VisitorAnimation', 'LevelUpTask', 
							'CharacterAnimation', 'RoomAnimation', 'QuestImage', 'PropertyStateTask', 'PropertyActivityTask', 'SocialActivityTask',
							'PopularityCap', 'MiscDownload', 'CrossPromoGame', 'SaleItem', 'Collection', 'LpProbability', 'LpCost', 'SocialGift', 
							'GameRoomEvent', 'GameRoomProbability', 'FeatureProperty', 'StarterPack', 'GenericPopupItem', 'FaqItem',
							'BabynatorProbability', 'DiscountedPlan', 'BundleSale', 'Theme', 'SlotRoomParameter', 'SpinnerParameter'*/),
	'ss_username'	=> 'roboticschip@gmail.com',
	'ss_password'	=> 'r0b0tics',
	'ss_name'		=> $sheet_name,
	'ss_assets'		=> $sheet_name,
	'sync_asset_states' => array(),
	'market_data_wrapper_class' => 'com.kiwi.monstercastle.db.MarketWrapper',
	'user_data_wrapper_class' => 'com.kiwi.monstercastle.db.UserDataWrapper',
	'data_wrapper_class' => 'com.kiwi.monstercastle.db.UserDataWrapper',
	'sizecolumnname'	=> 'size',
	'diff_file_path' => APPPATH . "/libraries/at_kiwi.php",
	'data_wrapper_class' => 'com.kiwi.monstercastle.db.UserDataWrapper',
	'sync_helper_path' 	 => 'application/libraries/sync_helper.php',
	'gameresponse_class'	=> 'com.kiwi.backend.GameResponse',
	'connect_ad_networks' => FALSE,
	'notify_ad_networks' => TRUE,
	'admin_sync_models_before_assets'       => array('Citys'),//,'Resource', 'AssetCategory', 'RoomAnimation', 'FeatureProperty', 'StarterPack'),
    'admin_sync_models_after_assets'        => array(),/*'GameParam', 'Plan', 'Quest', 'QuestTask', 'Level', 'DailyBonus', 
    												'PopularityCap', 'InitialUserAsset', 'MiscDownload', 'CrossPromoGame',
    												 'Collection', 'FaqItem', 'BabynatorProbability', 'SlotRoomParameter', 'SpinnerParameter'),*/
		
    'model_primary_keys' => array('daily_bonuses' => 'day', 'daily_news_items' => 'id', 'default_assets' => 'id',
    								'gameplay_notifications' => 'id', 'reminder_notifications' => 'id', 
									'user_daily_bonuses' => 'user_id', 'user_daily_news' => 'user_id', 'user_stats' => 'user_id'),

	'sharded_models' => array('User', 'UserAsset', 'UserAssetExtended', 'UserStat', 'UserQuest', 'UserCollectable',
					 		'UserDailyBonus', 'UserDailyNewsItem', 'UserPlan', 'UserQuestTask', 'UserStarterPack', 
							'UserTheme'),
	'memcached_classes' => array('UserShard', 'User', 'UserAsset', 'UserAssetExtended', 'UserStat', 'UserQuest', 
							'UserCollectable', 'UserDailyBonus', 'UserDailyNewsItem', 'UserPlan', 'UserQuestTask', 
							'UserStarterPack', 'UserTheme'),
    'db_name'	=> $db_name,
	'log_bi_events' => TRUE,
	'log_bi_level' => 3,
  	'resource_priority' => array(0=>'gold', 1=>'silver', 2=>'crystal', 3=>'future_resource', 4=> 'xp', 5=> 'popularity', 6 => 'lp'),
  	'game_id' => $game_id ,
  	'tapjoy_secret_key' => "4FwJSsXpgQqcS7fTurJG",
	'user_levels_exists' => FALSE,
	'user_collectables_exists' => FALSE,
	'push_quests_to_initial_user_items' => FALSE,
	'social_enabled' => TRUE, 
	'c2dm_enabled' => TRUE,
	'mysql_shards' => array('s001', 's002'),
	'soft_delete_enabled_tables' => array('user_shards', 'user_assets', 'user_xpromo_stats', 'user_request_logs',
										'user_global_neighbor_details', 'user_assets_extended'),
	'xpromo_level_up' => 5,
	'xpromo_action' => 'ADVANCE_LEVELS_TO_5',
	'quest_tasks_validation_enabled'=> FALSE,
	'admin_connection_classes' => array(),
	'apc_classes'	=> array('Resource', 'Level', 'LevelReward', 'Plan', 'PlanItem', 'Activity', 'GameParam',
				'AssetCategory', 'Asset', 'AssetSpeedupCost', 'AssetProperty', 'MonsterAnimation',
				'BreedingParameter', 'BreedingParameterValue', 'Quest', 'QuestTask', 'AssetActivityTask',
				'AssetStateTask','ResourceActivityTask', 'QuestReward', 'Activity', 'QuestDependency',
				'DailyBonus','DailyNewsItem', 'CategoryStateTask', 'CategoryActivityTask', 'AssetState',
				'AssetStateCost','AssetStateReward', 'AssetCost', 'GuidedTask', 'GameplayNotification',
				'ReminderNotification', 'WidgetActivityTask', 'VisitorAnimation', 'LevelUpTask',
				'CharacterAnimation', 'RoomAnimation', 'QuestImage', 'PropertyStateTask', 'PropertyActivityTask', 'SocialActivityTask',
				'PopularityCap', 'MiscDownload', 'TableVersion', 'CrossPromoGame', 'SaleItem', 'Collection', 'LpProbability', 'LpCost', 'SocialGift', 
				'GameRoomEvent', 'GameRoomProbability', 'FeatureProperty', 'StarterPack', 'GenericPopupItem', 'FaqItem',
				'BabynatorProbability', 'DiscountedPlan', 'BundleSale', 'Theme', 'SlotRoomParameter', 'SpinnerParameter' ,'ABTest' , 'ABTestInfo' , 'ABGroupInfo'),
	'ab_testing_enabled' => TRUE

);
