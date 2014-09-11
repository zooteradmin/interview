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

  public function view($id) {

    $resume = $this->Resume->findById($id);
    $fullFilePath = WWW_ROOT . 'files' . DS . 'resumes' . DS . $resume['Resume']['filename'];

    $this->response->file($fullFilePath);
    // Return response object to prevent controller from trying to render
    // a view
    return $this->response;
  }

}
