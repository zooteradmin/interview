<?php
App::uses('AppController', 'Controller');
/**
 * Interviews Controller
 *
 * @property Interview $Interview
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterviewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function index() {
		$this->Interview->recursive = 0;
		$this->set('interviews', $this->Paginator->paginate());
	}

	public function schedule() {
		if ($this->request->is('post')) {

			$data = $this->__formatData($this->request->data);

			if ($this->Interview->Candidate->saveInterview($data)) {
				$this->Session->setFlash(__('Interview Scheduled successfully'), 'default', array('class' => 'alert alert-success'));
				$this->redirect('/dashboard');
			} else {
				$this->Session->setFlash(__('Interview Scheduling failed'), 'default', array('class' => 'alert alert-error'));
			}
		}
		$users = $this->Interview->User->find('list');
		$this->set(compact('users'));
	}

	private function __formatData($requestData) {
		$data = $requestData;
		unset($data['Candidate']['user_id']);
		unset($data['Candidate']['time']);
		$data['Interview'] = array(
			array(
				'user_id' => $requestData['Candidate']['user_id'],
				'scheduled_time' => $requestData['Candidate']['time']
			)
		);
		return $data;
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Interview->recursive = 0;
		$this->set('interviews', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
		$this->set('interview', $this->Interview->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Interview->create();
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'));
			}
		}
		$candidates = $this->Interview->Candidate->find('list');
		$users = $this->Interview->User->find('list');
		$this->set(compact('candidates', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Interview.' . $this->Interview->primaryKey => $id));
			$this->request->data = $this->Interview->find('first', $options);
		}
		$candidates = $this->Interview->Candidate->find('list');
		$users = $this->Interview->User->find('list');
		$this->set(compact('candidates', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Interview->id = $id;
		if (!$this->Interview->exists()) {
			throw new NotFoundException(__('Invalid interview'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Interview->delete()) {
			$this->Session->setFlash(__('The interview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The interview could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
