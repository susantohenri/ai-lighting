<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'user';
    $this->thead = array(
      (object) array('mData' => 'email', 'sTitle' => 'Email'),
      (object) array('mData' => 'company_name', 'sTitle' => 'Company'),
      (object) array('mData' => 'status_value', 'sTitle' => 'Status'),
      (object) array('mData' => 'edit', 'sTitle' => '')
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

  }

  function find ($where = array()) {
  	$this->db
  		->select("{$this->table}.*")
  		->select('company.name company_name', false)
      ->select("CASE WHEN 'active' = status THEN 'Active' WHEN 'inactive' = status THEN 'Inactive' END status_value", false)
      ->select("
        '<a class=\"btn btn-primary btn-edit\">Edit</a>'
        '<a class=\"btn btn-danger btn-delete\">Delete</a>'
        edit", false)
  		->join('company', 'company.uuid = user.company', 'left');
  	$records = parent::find($where);
    foreach ($records as &$record) {
      $set = 'Set ';
      $set.= $record->status === 'active' ? 'Inactive' : 'Active';
      $record->edit .= '<a class="btn btn-warning btn-status">'.$set.'</a>';
    }
    return $records;
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

  function create ($data) {
    $data['role'] = 'company';
    $data['status'] = 'active';
    return parent::create($data);
  }

  function status ($uuid) {
    $record = $this->findOne($uuid);
    $status = $record['status'] === 'active' ? 'inactive' : 'active';
    return $this->db->where('uuid', $uuid)->set('status', $status)->update($this->table);
  }


}