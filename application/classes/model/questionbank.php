<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Questionbank extends ORM {
     
	 protected $_table_name = "questionbanks";
	//static $connection = 'development';
	 
	 
	 public static function create_or_update ($quest_id, $question, $option_a, $option_b, $option_c, $option_d,
	 		$answer, $solution, $resources, $package_id, $level_id, $version, &$updated_classes) {
	 	//$row = Model_Package::find_by_packageid($package_id);
	 	
	 	$row = ORM::factory('questionbank')->where('quest_id', '=', $quest_id)->find();
	 	$row->loaded();
	 	//	print ".....#########......".$row."-----".$package_id;
	 	if ($row == null) {
	 		$row = new Model_Questionbank;
	 		$row->quest_id = $quest_id;
	 
	 	//	print "......123.....".$package_id;
	 	}
	 
	 	if (true) {
	 		
	 		$row->quest_id = $quest_id;
	 		 $row->question = $question;
	 		  $row->option_a = $option_a;
	 		   $row->option_b = $option_b;
	 		    $row->option_c = $option_c;
	 		     $row->option_d = $option_d;
	 		     
	 		$row->answer = $answer;
	 		 $row->solution = $solution;
	 		  $row->resources = $resources;
	 		   $row->package_id = $package_id;
	 		    $row->level_id = $level_id;
	 		$row->version  = $version;
	 		
	 		try {
	 			$row->save();
	 		}catch(Exception $e) {
	 			print "Error :".$e->getMessage()."<br>\n<br>";
	 		}
	 		//  $row->update();
	 		$updated_classes[] = 'Questionbank';
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
	 
	 
	public static function to_questionanswer_json($quest_id){
	//print '.........'.$quest_id;
	// Temp : we need put algo
	$quest_id = $quest_id + 1;
             $questionanswer = ORM::factory('questionbank')->where('quest_id', '=', $quest_id)->find();
	        //    $str = '"nextQuestion": [  ';
				$str = '[';
				$str = $str . '{"quest_id:":'. $questionanswer->quest_id . ", ";
				if($questionanswer->question != null)
					$str = $str . '"Question" : "'. $questionanswer->question .'",';
 				if($questionanswer->option_a != null)
					$str = $str . '"OptionA" : "'. $questionanswer->option_a  .'",';
				if($questionanswer->option_b != null)
					$str = $str . '"OptionB" : "'.$questionanswer->option_b .'",';
				if($questionanswer->option_c != null)
					$str = $str . '"OptionC" : "'. $questionanswer->option_c .'",';
				if ($questionanswer->option_d != null)
					$str = $str . '"OptionD" : "'. $questionanswer->option_d .'",';
				if ($questionanswer->answer != null)
					$str = $str . '"Answer" : "'. $questionanswer->answer .'",';
					
					
				if ($questionanswer->solution != null)
					$str = $str . '"Information" : "'. $questionanswer->solution .'",';
				if ($questionanswer->resources != null)
					$str = $str . '"ResourceLink" : "'. $questionanswer->resources .'",';

					
					return  substr($str, 0, -1) . '}]';
	//	return  $str;
	}	
	
	
	
}