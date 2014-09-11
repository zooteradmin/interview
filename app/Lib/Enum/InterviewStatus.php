<?php
  App::uses('Enum', 'Lib');
  class InterviewStatus extends Enum {
    const SELECTED = 1;
    const REJECTED = 2;
    const Hold = 3;

  protected static $_options = array(
    self::SELECTED => 'Selected',
    self::REJECTED => 'Rejected',
    self::Hold => 'Hold'
  );
}