<?php

App::uses('Controller', 'Controller');
App::import('Vendor', 'Facebook', array('file' => 'Facebook' . DS . 'facebook.php'));

class FacebookCpsController extends AppController {

	public $name = 'FacebookCps';
	public $uses = array();

	public function index() {
		$this->layout = false;
	}

	function login() {
		Configure::load('facebook');
		$appId = Configure::read('Facebook.appId');
		$app_secret = Configure::read('Facebook.secret');
		$facebook = new Facebook(array(
			'appId' => $appId,
			'secret' => $app_secret,
		));
		$loginUrl = $facebook->getLoginUrl(array(
			'scope' => 'email,read_stream, publish_stream, user_birthday, user_location, user_work_history, user_hometown, user_photos',
			'redirect_uri' => BASE_URL . 'facebook_cps/facebook_connect',
			'display' => 'popup'
		));
		$this->redirect($loginUrl);
	}

	function facebook_connect() {
		Configure::load('facebook');
		$appId = Configure::read('Facebook.appId');
		$app_secret = Configure::read('Facebook.secret');

		$facebook = new Facebook(array(
			'appId' => $appId,
			'secret' => $app_secret,
		));

		$user = $facebook->getUser();
		if ($user) {
			try {
				$user_profile = $facebook->api('/me');
				$params = array('next' => BASE_URL . 'facebook_cps/facebook_logout');
				$logout = $facebook->getLogoutUrl($params);
				$this->Session->write('User', $user_profile);
				$this->Session->write('logout', $logout);
			} catch (FacebookApiException $e) {
				error_log($e);
				$user = NULL;
			}
		} else {
			$this->Session->setFlash('Sorry.Please try again', 'default', array('class' => 'msg_req'));
			$this->redirect(array('controller' => 'users','action' => 'login'));
		}
	}

	function facebook_logout() {
		$this->Session->delete('User');
		$this->Session->delete('logout');
		$this->redirect(array('controller' => 'users','action' => 'login'));
	}

}

?>