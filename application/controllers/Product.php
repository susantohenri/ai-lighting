<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

  public function index () {
    $model = $this->model;
    if ($post = $this->$model->lastSubmit($this->input->post())) {
      if (isset ($post['delete'])) $this->$model->delete($post['delete']);
      else $this->$model->save($post);
    }
    $vars = array();
    $role = $this->session->userdata('role');
    $vars['page'] = $role . '/product-table';
    $vars['records'] = $this->$model->find();
    $vars['thead'] = $this->$model->thead;
    if ('admin' !== $role) foreach ($vars['thead'] as $key => $value) if ('edit' === $value->mData) unset($vars['thead'][$key]);
    $this->loadview('Template', $vars);
  }

}