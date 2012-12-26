<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Package extends Model_Gamex {// ORM {
     
	 protected $_table_name = "packages";
	//static $connection = 'development';
	 
	 
	 
	 public static function create_or_update ($package_id, $package_name, $version, &$updated_classes) {
	 	//$row = Model_Package::find_by_packageid($package_id);
	 	$row = ORM::factory('package')->where('package_id', '=', $package_id)->find();
	 	//$row->loaded();
	 //	print ".....#########......".$row."-----".$package_id;
	 	if ($row == null) {
	 		$row = new Model_Package;
	 		$row->package_id = $package_id;
	 		
	 		print "......123.....".$package_id;
	 	}

	 	if ($row->package_id != $package_id ||
	 			$row->package_name   != $package_name ) {
	    	$row->package_id  = $package_id;
	 		$row->package_name   = $package_name;
	 		$row->version  = $version;
	 		try {
	 		$row->save();
	 		}catch(Exception $e) {
	 			print "Error :".$e->getMessage()."<br>\n<br>";
	 		}
	    //  $row->update();
	 		$updated_classes[] = 'Package';
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