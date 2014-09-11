<?php
App::uses('AppController', 'Controller');
App::uses('InterviewStatus', 'Lib/Enum');
/**
 * Feedback Controller
 *
 * @property Feedback $Feedback
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FeedbackController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');


public function add($interviewId) {
	if ($this->request->is('post')) {
		$this->request->data['Feedback']['user_id'] = AuthComponent::user('id');
		$this->request->data['Feedback']['interview_id'] = $interviewId;
		if ($this->Feedback->saveFeedback($this->request->data)) {
			$this->Session->setFlash(__('Feeback Added successfully'), 'default', array('class' => 'alert alert-success'));
			$this->redirect('/dashboard');
		} else {
			$this->Session->setFlash(__('Feeback not added'), 'default', array('class' => 'alert alert-error'));
		}
	}
	$statuses = InterviewStatus::options();
	$this->set(compact('statuses'));
}

public function index() {
	$this->Paginator->settings = array(
		'contain' => array(
			'Interview' => array('Candidate'),
			'User'
		)
	);
	$feedback = $this->Paginator->paginate('Feedback');
	$this->set(compact('feedback'));
}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Feedback->recursive = 0;
		$this->set('feedback', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Feedback->exists($id)) {
			throw new NotFoundException(__('Invalid feedback'));
		}
		$options = array('conditions' => array('Feedback.' . $this->Feedback->primaryKey => $id));
		$this->set('feedback', $this->Feedback->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Feedback->create();
			if ($this->Feedback->save($this->request->data)) {
				$this->Session->setFlash(__('The feedback has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback could not be saved. Please, try again.'));
			}
		}
		$candidates = $this->Feedback->Candidate->find('list');
		$users = $this->Feedback->User->find('list');
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
		if (!$this->Feedback->exists($id)) {
			throw new NotFoundException(__('Invalid feedback'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Feedback->save($this->request->data)) {
				$this->Session->setFlash(__('The feedback has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Feedback.' . $this->Feedback->primaryKey => $id));
			$this->request->data = $this->Feedback->find('first', $options);
		}
		$candidates = $this->Feedback->Candidate->find('list');
		$users = $this->Feedback->User->find('list');
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
		$this->Feedback->id = $id;
		if (!$this->Feedback->exists()) {
			throw new NotFoundException(__('Invalid feedback'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Feedback->delete()) {
			$this->Session->setFlash(__('The feedback has been deleted.'));
		} else {
			$this->Session->setFlash(__('The feedback could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
