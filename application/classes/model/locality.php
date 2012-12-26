<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Locality extends Model_Gamex {// ORM {
     
	 protected $_table_name = "localitys";
	//static $connection = 'development';
	 
	 
	 
	 public static function create_or_update ($locality_id, $name,$pincode,$city_id, $version, &$updated_classes) {
	 	//$row = Model_Package::find_by_packageid($package_id);
	 	$row = ORM::factory('locality')->where('locality_id', '=', $locality_id)->find();
	 	//$row->loaded();
	 //	print ".....#########......".$row."-----".$package_id;
	 	
	 	if ($row == null) {
	 		$row = new Model_Locality;
	 		$row->locality_id = $locality_id;
	 		
	 		print "......123.....".$locality_id;
	 	}

	 	if ($row->locality_id != $locality_id ||
	 			$row->name != $name ||
	 			$row->pincode != $pincode ||
	 			$row->city_id   != $city_id ) {
	    	$row->locality_id  = $locality_id;
	 		$row->name   = $name;
	 		$row->pincode != $pincode;
	 		$row->city_id   != $city_id;
	 		$row->version  = $version;
	 		try {
	 		$row->save();
	 		}catch(Exception $e) {
	 			print "Error :".$e->getMessage()."<br>\n<br>";
	 		}
	    //  $row->update();
	 		$updated_classes[] = 'Locality';
	 		return true;
	 	}
	 	return false;
	 }
	 
	 public static function getTitleMsg()
	 {
	 	//Model_Introduction
		//$m = new Model_Introduction();
	 //$retval = $m->find('all');//,array();
	 return $retval;
	 }
	
}