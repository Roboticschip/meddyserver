<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Introduction extends ORM {
     
	 public static function getTitleMsg()
	 {
	 	//Model_Introduction
		$m = new Model_Introduction();
	 $retval = $m->find('all');//,array();
	 
	 return $retval;
	 }
	 
}