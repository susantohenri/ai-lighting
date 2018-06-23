<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'company';
    $this->form  = array ();

    $this->form[]= array(
      'name'    => 'user',
      'label'   => 'User',
      'options' => array(array('text' => '', 'value' => '')),
      'attributes' => array(
        array('data-autocomplete' => 'true'),
        array('data-model' => 'Users'),
        array('data-field' => 'email')
      ),
    );

    $this->form[]= array(
      'name'    => 'name',
      'label'   => 'Name',
    );

    $this->form[]= array(
      'name'    => 'abn',
      'label'   => 'ABN',
    );

    $this->form[]= array(
      'name'    => 'address',
      'label'   => 'Address',
    );

    $this->form[]= array(
      'name'    => 'suburb',
      'label'   => 'Suburb',
    );

    $this->form[]= array(
      'name'    => 'postcode',
      'label'   => 'Postcode',
    );

    $this->form[]= array(
      'name'    => 'email',
      'label'   => 'Email',
    );

    $this->form[]= array(
      'name'    => 'phone',
      'label'   => 'Phone',
    );

    $this->form[]= array(
      'name'    => 'a_class_lic_no',
      'label'   => 'A Class Lic No',
    );

    $this->form[]= array(
      'name'    => 'rec_no',
      'label'   => 'Rec No',
    );

  }

  function getForm ($uuid = false) {
    if ('admin' !== $this->session->userdata('role'))
      foreach ($this->form as $key => $value)
        if ('user' === $value['name']) unset($this->form[$key]);
    return parent::getForm ($uuid);
  }

  function prepopulate ($uuid) {
    $record = $this->findOne($uuid);
    foreach ($this->form as &$f) {
      if (isset ($f['attributes']) && in_array(array('data-autocomplete' => 'true'), $f['attributes'])) {
        $model = '';
        $field = '';
        foreach ($f['attributes'] as $attr) foreach ($attr as $key => $value) switch ($key) {
          case 'data-model': $model = $value; break;
          case 'data-field': $field = $value; break;
        }
        $this->load->model($model);
        foreach ($this->$model->findIn('uuid', explode(',', $record[$f['name']])) as $option)
          $f['options'][] = array('text' => $option->$field, 'value' => $option->uuid);
      }
      if (isset ($f['multiple'])) $f['value'] = explode(',', $record[$f['name']]);
      else if ($f['name'] === 'password') $f['value'] = '';
      else $f['value'] = $record[$f['name']];
      if ('email' === $f['name']) $f['attributes'][] = array('disabled' => 'disabled');
    }
    return $this->form;
  }

}