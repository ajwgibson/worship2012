<?php

class AppController extends Controller {

	var $components = array('Auth', 'Session');
	
	function beforeFilter() {
	
		// Set up the Auth component
		$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'construction');
		
		// Stop guest users from accessing admin functions
		if ($this->Auth->user('username') == 'guest') {
			
			if ($this->params['action'] == 'add' 
					|| $this->params['action'] == 'delete'
					|| ($this->params['action'] == 'edit' && $this->params['controller'] != 'musicians')) { 
				
				$this->Session->setFlash(__('Sorry, that functionality is only for admin users', true));
				$this->redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
}
