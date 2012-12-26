<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

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
	
	public function action_signup()
	{
	$user_name = $this->request->query('user_name');
	$password =  $this->request->query('password');
	 $validuser = ORM::factory('userdetail')->where('user_name', '=', $user_name)->find();
	 //print $validuser;
	// print_r ($validuser->user_name);
	 if(($validuser->user_name) != null)
	 {
	 $this->response->body("Allready a user with this name");
	 return false;
	 }
	 else 
	 {
	 $user = ORM::factory('userdetail');
	 $user->user_name = $user_name;
	 $user->password = $password;
	 $user->save();
	 $this->response->body("Congrats ".$user_name);
	 return true;
	 }
	}
} // End Welcome
