<?php
class HomeController extends AppController {

	var $uses = array('Event', 'Practice');

	function index() {
		
		$this->set(
			'event', 
			$this->Event->find(
				'first', 
				array(
					'conditions' => array('Event.starts >' => date('Y-m-d H:i:s')),
					'order' => array('Event.starts ASC'))));
					
		$this->set(
			'practice', 
			$this->Practice->find(
				'first', 
				array(
					'conditions' => array('Practice.starts >' => date('Y-m-d H:i:s')),
					'order' => array('Practice.starts ASC'))));
	}

}
