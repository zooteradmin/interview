<?php
App::uses('AppModel', 'Model');
/**
 * Interview Model
 *
 * @property Candidate $Candidate
 * @property User $User
 */
class Interview extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Candidate' => array(
			'className' => 'Candidate',
			'foreignKey' => 'candidate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Feedback' => array(
			'className' => 'Feedback',
			'foreignKey' => 'interview_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
