<?php
/**
 * FeedbackFixture
 *
 */
class FeedbackFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'feedbacks';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'candidate_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'score' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'technical_score' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'personality_score' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'candidate_id' => 1,
			'user_id' => 1,
			'score' => 1,
			'technical_score' => 1,
			'personality_score' => 1,
			'status' => 1,
			'created' => '2014-09-11 14:08:08',
			'modified' => '2014-09-11 14:08:08'
		),
	);

}
