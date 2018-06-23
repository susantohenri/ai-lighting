<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  var $controller, $model, $page_title, $subformlabel;

  function __construct () {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    if(empty($this->session->userdata['uuid'] == TRUE)) redirect(site_url('Guest/Login'), 'refresh'); 
    $this->controller = $this->router->class;
    if (!isset ($this->model)) $this->model = $this->controller . 's';
    $this->load->model($this->model);
  }

  public function loadview ($view, $vars = array()) {
    $vars['account_type'] = $this->session->userdata('role');
    if (!isset ($vars['form_action'])) $vars['form_action'] = site_url($this->controller);
    $vars['current'] = array (
      'model' => $this->model,
      'controller' => $this->controller,
      'user' => $this->session->userdata()
    );
    $this->load->view($view, $vars);
  }

  public function index () {
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

  function create () {
    $model= $this->model;
    $vars = array();
    $vars['page'] = 'Form';
    $vars['form']     = $this->$model->getForm();
    $vars['subform'] = $this->$model->getFormChild();
    $vars['uuid'] = '';
    $this->loadview('Template', $vars);
  }

  function subformcreate () {
    $model= $this->model;
    $vars = array();
    $vars['form'] = $this->$model->getForm();
    $vars['subformlabel'] = $this->subformlabel;
    $vars['controller'] = $this->controller;
    $vars['uuid'] = '';
    $this->loadview('mitraklinik/subform', $vars);
  }

  function read ($id) {
    $data = array();
    $data['page'] = 'Form';
    $model = $this->model;
    $data['form'] = $this->$model->getForm($id);
    $data['subform'] = $this->$model->getFormChild($id);
    $data['uuid'] = $id;
    $this->loadview('Template', $data);
  }

  function subformread ($uuid) {
    $data = array();
    $model = $this->model;
    $data['form'] = $this->$model->getForm($uuid);
    $data['subformlabel'] = $this->subformlabel;
    $data['controller'] = $this->controller;
    $data['uuid'] = $uuid;
    $this->loadview('mitraklinik/subform', $data);
  }

  function delete ($uuid) {
    $vars = array();
    $vars['page'] = 'Confirm';
    $vars['uuid'] = $uuid;
    $this->loadview('Template', $vars);
  }

  function select2 ($model, $field) {
    $this->load->model($model);
    echo '{"results":'. json_encode($this->$model->select2($field, $this->input->post('term'))) . '}';
  }

}