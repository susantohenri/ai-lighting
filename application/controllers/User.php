<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

  public function index () {
    $model = $this->model;
    if ($post = $this->$model->lastSubmit($this->input->post())) {
      if (isset ($post['delete'])) $this->$model->delete($post['delete']);
      else if (isset ($post['status'])) $this->$model->status($post['status']);
      else $this->$model->save($post);
    }
    $vars = array();
    $vars['page'] = 'admin/user-table';
    $vars['records'] = $this->$model->find();
    $vars['thead'] = $this->$model->thead;
    $this->loadview('Template', $vars);
  }

  function status ($uuid) {
    $vars = array();
    $vars['page'] = 'admin/user-status';
    $vars['uuid'] = $uuid;
    $this->loadview('Template', $vars);
  }

}