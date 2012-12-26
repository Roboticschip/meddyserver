<?php

include_once(APPPATH . "/libraries/kiwi_sync.php");

function diff_ta($last_version){
	$json_models = array('Plan', 'Bundle', 'GameParam');//, 'Animation', 'AnimationGroup', 'GameParam');
	$updated_classes = updated_classes($last_version);
	$jdata =  updated_tables($last_version,  $json_models);
	// add data for exceptional  models
	// animation groups - convert animation list to array of strings
	$animation_group_class = 'AnimationGroup';
	if(in_array($animation_group_class, $updated_classes)){
		$models = updated_models($animation_group_class, $last_version);
		if( sizeof($models) > 0){
			$agdata = "  ";
			foreach($models as $m){
				$ag = $m->to_json(array('except' => 'animation_list'));
				$ag = substr($ag,0,-1). ', "animation": ["' . str_replace(',', '","', $m->animation_list) . '"] }';
				$agdata = $agdata . $ag . ",\n";
			}
			$jdata = $jdata. ",\n ".'"animation_group": ['." \n". substr($agdata,0,-2) ."\n]\n";
		}
	}
	$jdata = "\"global_version\" : ". global_version().", \n" . $jdata;
	return "{\n" .$jdata . "\n}";
}


?>