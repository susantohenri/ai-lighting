<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'user';
    $this->thead = array(
      (object) array('mData' => 'email', 'sTitle' => 'Email'),
      (object) array('mData' => 'company_name', 'sTitle' => 'Company')
    );
    $this->form  = array ();

    $this->form[]= array(
      'name'    => 'firstname',
      'label'   => 'First Name',
    );

    $this->form[]= array(
      'name'    => 'lastname',
      'label'   => 'Last Name',
    );

    $this->form[]= array(
      'name'    => 'email',
      'label'   => 'Email',
    );

    $this->form[]= array(
      'name'    => 'password',
      'label'   => 'Password',
    );

    $this->form[]= array(
      'name'    => 'role',
      'label'   => 'Role',
      'options' => array(
      	array('value' => 'admin', 'text' => 'Admin'),
      	array('value' => 'company', 'text' => 'Company')
      )
    );

  }

  function find ($where = array()) {
  	$this->db
  		->select("{$this->table}.*")
  		->select('company.name company_name', false)
  		->join('company', 'company.user = user.uuid', 'left');
  	return parent::find($where);
  }

  function select2 ($field, $term) {
  	$field = "CONCAT(`firstname`, ' ', `lastname`)";
  	return parent::select2($field, $term);
  }

  function save ($record) {
    if (!empty ($record['password'])) $record['password'] = md5($record['password']);
    else unset($record['password']);
    return parent::save($record);
  }

}