<?php
App::uses('Interview', 'Model');

/**
 * Interview Test Case
 *
 */
class InterviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.interview',
		'app.candidate',
		'app.feedback',
		'app.user',
		'app.profile',
		'app.city',
		'app.resume'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Interview = ClassRegistry::init('Interview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Interview);

		parent::tearDown();
	}

}
