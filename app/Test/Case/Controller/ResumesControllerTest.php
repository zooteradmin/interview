<?php
App::uses('ResumesController', 'Controller');

/**
 * ResumesController Test Case
 *
 */
class ResumesControllerTest extends ControllerTestCase {

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

}
