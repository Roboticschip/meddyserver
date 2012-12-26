<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

	public function action_hello()
	{

	//$articles = ORM::factory('introduction',1);
	$articles = ORM::factory('introduction')->find_all();
	  $val  = Model_Introduction::getTitleMsg();
	//  print_r ($articles);
	//  print $articles->title;
	  foreach($articles as $ival){
	   //$this->response->body($val);
	   //print_r ($val);
	   print $ival->title;
	  }
	//  $this->response->body($val);
	}
} // End Welcome
