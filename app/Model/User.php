<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Profile $Profile
 * @property Feedback $Feedback
 * @property Interview $Interview
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Feedback' => array(
			'className' => 'Feedback',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Interview' => array(
			'className' => 'Interview',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
/**
 * beforeSave callback
 *
 * @param $options array
 * @return boolean
 */
	public function beforeSave($options = array()) {
		if (isset($this->data['User']['password'])) {
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		}
		if (!isset($this->data['User']['level'])) {
			$this->data['User']['level'] = UserLevel::INTERVIEWER;
		}
		return true;
	}

}
