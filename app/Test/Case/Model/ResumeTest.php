<?php
App::uses('Resume', 'Model');

/**
 * Resume Test Case
 *
 */
class ResumeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.resume',
		'app.candidate',
		'app.feedback',
		'app.user',
		'app.profile',
		'app.city',
		'app.interview'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Resume = ClassRegistry::init('Resume');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Resume);

		parent::tearDown();
	}

}
