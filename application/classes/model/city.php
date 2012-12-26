<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_City extends Model_Gamex {// ORM {
     
	 protected $_table_name = "citys";
	//static $connection = 'development';
	 
	 
	 
	 public static function create_or_update ($city_id, $name, $version, &$updated_classes) {
	 	//$row = Model_Package::find_by_packageid($package_id);
	 	$row = ORM::factory('city')->where('city_id', '=', $city_id)->find();
	 	//$row->loaded();
	 //	print ".....#########......".$row."-----".$package_id;
	 	if ($row == null) {
	 		$row = new Model_City;
	 		$row->city_id = $city_id;
	 		
	 		print "......123.....".$city_id;
	 	}

	 	if ($row->city_id != $city_id ||
	 			$row->name   != $name ) {
	    	$row->city_id  = $city_id;
	 		$row->name   = $name;
	 		$row->version  = $version;
	 		try {
	 		$row->save();
	 		}catch(Exception $e) {
	 			print "Error :".$e->getMessage()."<br>\n<br>";
	 		}
	    //  $row->update();
	 		$updated_classes[] = 'City';
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