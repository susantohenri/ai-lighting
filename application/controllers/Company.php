<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {

	function __construct () {
		$this->model = 'Companies';
		parent::__construct();
	}

  function index_ () {
    $model = $this->model;
    if ($post = $this->$model->lastSubmit($this->input->post())) {
      if (isset ($post['delete'])) $this->$model->delete($post['delete']);
      else $this->$model->save($post);
    }
    $vars = array();
    $vars['page'] = 'Table';
    $vars['records'] = $this->$model->find();
    $vars['thead'] = $this->$model->thead;
    $this->loadview('Template', $vars);
  }

  function index () {
    $model = $this->model;
    if ($post = $this->$model->lastSubmit($this->input->post())) {
      if (isset ($post['delete'])) $this->$model->delete($post['delete']);
      else $this->$model->save($post);
    }
  	if ('admin' === $this->session->userdata('role')) parent::index();
  	else {
	  	$companies = $this->Companies->find(array('user' => $this->session->userdata('uuid')));
	  	$id = $companies ? $companies[0]->uuid : false;
  		$this->read($id);
  	}
  }

}