<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questionbank extends Controller {

     public function before(){
      if ($this->request->action() == "showQuestionForm"){
			$this->template = 'addquestion';
		}
		
		}
	public function action_index()
	{	
		$this->response->body('hello, world!');
	}
	
	public function action_answer()
	{
	
	}
	
	public function action_nextquestion()
	{
	// Algo based on input (... user_id....)//
	ORM::factory('questionbank');
	$jsonret = Model_Questionbank::to_questionanswer_json( $this->request->query('quest_id'));
	
	print $jsonret;
	 return true;
	}
	
		public function action_addQuestion(){
		//$from_user_id = $_POST['from_user_id'];
		//$to_user_id = $_POST['to_user_id'];
	 $addques = ORM::factory('questionbank');
	 $addques->question = $_POST['question'];
	 $addques->option_a = $_POST['option_a'];
	 $addques->option_b = $_POST['option_b'];
	 $addques->option_c = $_POST['option_c'];
	 $addques->option_d = $_POST['option_d'];
	 $addques->answer = $_POST['answer'];
     //$addques->answer = $_POST['answer'];

	 $addques->save();
		
		}
		
	public function action_showQuestionForm(){
			print "manjeet";
			   $view = new View('addquestion'); // loads the 'article/index.php' file under 'application/view' folder
				$view->set("data","Add Question : ");
		  $this->response->body($view); // render the  view as response
		    
			//$this->template->data = "Move User Data from one device to another";
			
			//$this->template = 'addquestion';
		}
		
		
} // End Welcome
