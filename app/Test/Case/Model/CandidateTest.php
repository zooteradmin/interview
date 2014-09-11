<?php
App::uses('Candidate', 'Model');

/**
 * Candidate Test Case
 *
 */
class CandidateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.candidate',
		'app.feedback',
		'app.interview',
		'app.resume'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Candidate = ClassRegistry::init('Candidate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Candidate);

		parent::tearDown();
	}

}
