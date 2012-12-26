<?php
/*
 * Created on 31-Dec-2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 function pre_process_values($worksheet_name, $values){
	print_r($worksheet_name);
	if($worksheet_name == 'Monsters'){
		for($i=1;$i<=15;$i++){
			$values['state'.$i.'costcrystal'] = round($values['basecrystalconsumption']*pow($values['crystalconsumptionmultiplier'],($i-1))); 
			$values['state'.$i.'rewardsilver']=	round($values['basesilvergeneration'] + $values['silvergenerationadder']*($i-1));
			$values['state'.$i.'speedupcrystal'] = $values['state'.$i.'costcrystal']*3;
		}
 	}
	return $values;
 }

function update_asset_states_for_cg($last_asset_id, $state_name){
	if($last_asset_id != null){
		$asset_states = Model_AssetState::find_all_by_asset_id($last_asset_id);
        	if($asset_states != null){
			foreach($asset_states as $asset_state){
				if($asset_state->name == 'finished'){
				   $asset_state->next_state_name = $state_name;
				   $asset_state->save();	
				}
                	}

        		foreach($asset_states as $asset_state){
                		Model_AssetState::update_next_state($asset_state);
                	}
       		}
	}

}
function sync_after(){

}

function sync_before(){

}

 function sync_extra_sheets($mainsheet, $version){
 	
 	$mainsheet->useWorksheet('Citys');
 	$rows = $mainsheet->getRows();
 	//print_r($rows);
 	foreach($rows as $values){
 		//print_r($values);
 		$tu = Model_City::create_or_update($values['cityid'], $values['name'], $version, $updated_classes);
 	}
 	
 	$mainsheet->useWorksheet('Localitys');
 	$rows = $mainsheet->getRows();
 	//print_r($rows);
 	foreach($rows as $values){
 		//print_r($values);
 		$tu = Model_Locality::create_or_update($values['localityid'], $values['name'], $values['pincode'], $values['cityid'], $version, $updated_classes);
 	}
 	
 /* 	$mainsheet->useWorksheet('Packages');
 //	$row = array("package_id" => "John Doe"
 //			,"package_name" => "john@example.com");
 //	if ($mainsheet->addRow($row)) echo "Form data successfully stored using Google Spreadsheet";
 //	else echo "Error, unable to store spreadsheet data";  
	$rows = $mainsheet->getRows();
	//print_r($rows);
	foreach($rows as $values){
		//print_r($values);
		$tu = Model_Package::create_or_update($values['packageid'], $values['packagename'], $version, $updated_classes);
	}


	$mainsheet->useWorksheet('Questionbanks');
	$rows = $mainsheet->getRows();
	//print_r($rows);
	foreach($rows as $values){
		//print_r($values);
		$tu = Model_Questionbank::create_or_update($values['questid'], $values['question'], $values['optiona'], $values['optionb'], $values['optionc'], $values['optiond'],
	 		$values['answer'], $values['solution'], $values['resources'], $values['packageid'], $values['levelid'], $version, $updated_classes);
	}
	 */
	
	
	$unique_updated_classes = array();
try {
	foreach ($updated_classes as $updated_class) {
		if (array_key_exists($updated_class, $unique_updated_classes)) { continue; }
		//Model_TableVersion::update_version($updated_class, $version);
		$unique_updated_classes[$updated_class] = "";
	}
}catch (Exception $e) {
	print "updated class array is null";
}
	
 }
 
 
 
?>
