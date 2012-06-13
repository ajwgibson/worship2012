<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	/**
     *  The AuthComponent provides the needed functionality
     *  for login, so the login function is blank.
     */
    function login() {
    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }
}

