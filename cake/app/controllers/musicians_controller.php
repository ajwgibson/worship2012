<?php
class MusiciansController extends AppController {

	var $name = 'Musicians';

	function index() {
		$this->Musician->recursive = 0;
		$this->paginate = array('limit' => 10);
		$this->set('musicians', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid musician', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('musician', $this->Musician->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Musician->create();
			if ($this->Musician->save($this->data)) {
				$this->Session->setFlash(__('The musician has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The musician could not be saved. Please, try again.', true));
			}
		}
		$events = $this->Musician->Event->find('list');
		$this->set(compact('events'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid musician', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Musician->save($this->data)) {
				$this->Session->setFlash(__('The musician has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The musician could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Musician->read(null, $id);
		}
		$events = $this->Musician->Event->find('list');
		$this->set(compact('events'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for musician', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Musician->delete($id)) {
			$this->Session->setFlash(__('Musician deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Musician was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
