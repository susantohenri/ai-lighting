<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

  public function index () {
    $model = $this->model;
    if ($post = $this->$model->lastSubmit($this->input->post())) {
      if (isset ($post['delete'])) $this->$model->delete($post['delete']);
      else $this->$model->save($post);
    }
    $vars = array();
    $vars['page'] = $this->session->userdata('role') . '/product-table';
    $vars['records'] = $this->$model->find();
    $vars['thead'] = $this->$model->thead;
    $this->loadview('Template', $vars);
  }

}