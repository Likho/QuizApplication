<?php
class QuestionsController extends AppController{

	public $name = 'Questions';
	public $helpers = array('Form','Paginator' );

	/**
	  * Question level variable
	  */
	public $levels = array(
		'easy' => 'Easy',
		'medium' => 'Medium',
		'difficult' => 'Difficult'
		);

	public $paginate = array(
		'limit' => 5,
		'order' => array(
			'Question.id' => 'asc'
			)
		);

	/**
	 *
	 */
	public function admin_index(){

		$this->layout = 'loggedin_admin';
		$this->Question->contain(array('Topic.name'));
		$this->Question->find('all');
		$questions = $this->paginate('Question');
		$this->set('questions', $questions);
		//debug($this->Question->find('all'));
	}
	/**
	  *
	  */	
	function admin_add(){
	   
        $this->layout = 'loggedin_admin';
		if(!empty($this->data)){

			$this->Question->create();

			if($this->Question->save($this->data)){
			               
				$this->Session->setFlash('Question successfully inserted', 'flash_success');
				$this->redirect(array('action' => 'add'));
			}else{
				$this->Session->setFlash('Question could not be inserted, try again', 'flash_error');
			}
		}

		$topics = $this->Question->Topic->find('list', array('fields' => array('Topic.id', 'Topic.name')));
		$levels = $this->levels;
		$this->set('levels', $levels);

		$this->set(compact('topics', 'question_levels'));
	}

	/**
	  *
	  */	
	function admin_edit($id = null){
        
        $this->layout = 'loggedin_admin';
		if(empty($this->data)){
			$this->data = $this->Question->read(null, $id);
		}else{

			$this->Question->Create();

			if($this->Question->save($this->data)){

				$this->Session->setFlash('Successful update', 'flash_success');
				$this->redirect(array('controller' => 'questions', 'action' => 'admin_edit'));
			}else{
				$this->Session->setFlash('Could not update question', 'flash_error');
				$this->redirect(array('controller' => 'questions', 'action' => 'admin_edit'));
			}
		}

		$topics = $this->Question->Topic->find('list', array('fields' => array('Topic.id', 'Topic.name')));
		$levels = $this->levels;
		$this->set('levels', $levels);

		$this->set(compact('topics', 'question_levels'));

	}

	/**
	  *
	  */
	public function admin_delete($id){

		if(!$id){
			$this->Session->setFlash('Could not delete question', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}

		if($this->Question->delete($id)){
			$this->Session->setFlash('Question deleted!!','flash_success' );
			$this->redirect(array('action' => 'index'));

		}
	}

}
?>