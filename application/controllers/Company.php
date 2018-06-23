<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {

	function __construct () {
		$this->model = 'Companies';
		parent::__construct();
	}

  function index () {
    $model = $this->model;
    if ($post = $this->$model->lastSubmit($this->input->post())) {
      if (isset ($post['delete'])) $this->$model->delete($post['delete']);
      else $this->$model->save($post);
    }
  	if ('admin' === $this->session->userdata('role')) parent::index();
  	else $this->read($this->session->userdata('company'));
  }

}