<?php
  App::uses('Enum', 'Lib');
  class Gender extends Enum {
    const MALE = 1;
    const FEMALE = 2;
    const TRANSGENDER = 3;

    protected static $_options = array(
		self::MALE => 'Male',
		self::FEMALE => 'Female',
		self::TRANSGENDER => 'Transgender'
		);
}