<?php
class PracticesController extends AppController {

	var $name = 'Practices';

	function index() {
		$this->Practice->recursive = 0;
		$this->set('practices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid practice', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('practice', $this->Practice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Practice->create();
			if ($this->Practice->save($this->data)) {
				$this->Session->setFlash(__('The practice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The practice could not be saved. Please, try again.', true));
			}
		}
		$events = $this->Practice->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid practice', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Practice->save($this->data)) {
				$this->Session->setFlash(__('The practice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The practice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Practice->read(null, $id);
		}
		$events = $this->Practice->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for practice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Practice->delete($id)) {
			$this->Session->setFlash(__('Practice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Practice was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
