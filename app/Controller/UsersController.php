<?php
App::uses('Controller', 'Controller');
App::import('Vendor', 'Facebook',array('file'=>'Facebook'.DS.'facebook.php'));
class UsersController extends AppController{
    
    public $name = 'Users';
    public $components = array('Auth');

    public $gender = array(
        'female' => 'Female',
        'male' => 'Male',
        'other' => 'Other'
        );
    
    /**
     * 
     */

    public function beforeFilter(){

        $this->Auth->allow('signup');
    }

    /**
     * User Sign up for the front end 
     */
    function signup(){
        if (!empty($this->data)) {

            if( $this->data[ 'User' ][ 'password' ] != $this->data[ 'User' ][ 'password2' ] ) {
                $this->User->invalidate( 'password2', "The passwords don't match." );
            }else{
                       
                $this->User->create();
                if ($this->User->save($this->data)) {
                   
                    $this->Session->setFlash('Successfully signed up for Quiz App','flash_success');
                    $this->redirect(array('controller' => 'users','action'=>'login'));
                } else {
                    $this->Session->setFlash('There was an error signing up. Please, try again.','flash_error');
                    $this->data = null;
                }
            }
          
        }
        $gender = $this->gender;
        $this->set('gender', $gender);
    }

    /**
     *
     */
    public function admin_login(){

        if($this->request->is('post')){

            if($this->Auth->login()){

                $this->redirect(array('controller' => 'topics', 'action' => 'index'));
            }else{
                $this->Session->setFlash('Invalid username/password combination', 'flash_error');
            }
        }
    }

    /**
     * Login for the front end 
     */
    public function login(){

        if($this->request->is('post')){

            if($this->Auth->login()){

                $this->redirect(array('controller' => 'tests', 'action' => 'home'));
            }else{
                $this->Session->setFlash('Invalid username/password combination', 'flash_error');
            }
        }
    }  

   /**
    * 
    */
    public function admin_logout()
	{

	    if($this->Auth->user())
	    {
	        $this->redirect($this->Auth->logout());
	    }
	}

    /**
     *
     */
    public function logout(){

        if($this->Auth->User()){
            $this->redirect($this->Auth->logout());
        }
    }

}
?>