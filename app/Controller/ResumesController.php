<?php
App::uses('AppController', 'Controller');
/**
 * Resumes Controller
 *
 * @property Resume $Resume
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ResumesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

}
