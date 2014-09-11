<?php
  App::uses('Enum', 'Lib');
  class UserLevel extends Enum {
    const ADMINISTRATOR = 100;
    const INTERVIEWER = 50;

	protected static $_options = array(
    self::ADMINISTRATOR => 'Administrator',
		self::INTERVIEWER => 'Interviewer'
	);
}