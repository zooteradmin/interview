<?php
App::uses('AppModel', 'Model');
/**
 * Feedback Model
 *
 * @property Candidate $Candidate
 * @property User $User
 */
class Feedback extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'feedbacks';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Interview' => array(
			'className' => 'Interview',
			'foreignKey' => 'interview_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function saveFeedback($data) {
		$this->create();
		return $this->save($data);
	}
}
