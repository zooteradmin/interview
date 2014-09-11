<?php
App::uses('AppController', 'Controller');
/**
 * Candidates Controller
 *
 * @property Candidate $Candidate
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CandidatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Candidate->recursive = 0;
		$this->set('candidates', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Candidate->exists($id)) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		$options = array('conditions' => array('Candidate.' . $this->Candidate->primaryKey => $id));
		$this->set('candidate', $this->Candidate->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Candidate->create();
			if ($this->Candidate->save($this->request->data)) {
				$this->Session->setFlash(__('The candidate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Candidate->exists($id)) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Candidate->save($this->request->data)) {
				$this->Session->setFlash(__('The candidate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The candidate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Candidate.' . $this->Candidate->primaryKey => $id));
			$this->request->data = $this->Candidate->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Candidate->id = $id;
		if (!$this->Candidate->exists()) {
			throw new NotFoundException(__('Invalid candidate'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Candidate->delete()) {
			$this->Session->setFlash(__('The candidate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The candidate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
