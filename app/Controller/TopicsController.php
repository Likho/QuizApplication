<?php

class TopicsController extends AppController{
	public $name = 'Topics';
	public $helpers = array('Form','Paginator' );

	public $paginate = array(
		'limit' => 5,
		'order' => array(
			'Topic.id' => 'asc'
			)
		); 
        
	/**
     *
     */
	public function admin_index(){
        
        $this->layout = 'loggedin_admin';
		$this->Topic->contain();
		$topics = $this->paginate('Topic');

		$this->set('topics', $topics);
	}

	/**
     *
     */
	public function admin_add(){
	   
        $this->layout = 'loggedin_admin';
		if(!empty($this->data)){

			$this->Topic->create();

			if($this->Topic->save($this->data)){
                
				$this->Session->setFlash('Successfully inserted topic', 'flash_success');
				$this->redirect(array('controller' => 'topics', 'action' => 'add'));
			}else{
				$this->Session->setFlash('Topic could not be inserted, Please try again', 'flash_error');
				$this->data = null;
			}
		}
	}

	/**
     *
     */
	public function admin_edit($id = null){
		
        $this->layout = 'loggedin_admin';
		if(empty($this->data)){
			$this->data = $this->Topic->read(null, $id);
		}else{
			$this->Topic->Create();

			if($this->Topic->save($this->data)){
				$this->Session->setFlash('Successful update', 'flash_success');
				$this->redirect(array('controller' => 'topics', 'action' => 'edit'));
			}else{
				$this->Session->setFlash('Could not update topic, Please try again', 'flash_error');
			}
		}
	}

	/**
     *
     */
	public function admin_delete($id){

		if(!$id){
			$this->Session->setFlash('Could not delete topic', 'flash_error');
			$this->redirect(array('action' => 'index'));
		}

		if($this->Topic->delete($id)){
			$this->Session->setFlash('Topic deleted!!','flash_success' );
			$this->redirect(array('action' => 'index'));

		}
	}
	
}
?>
