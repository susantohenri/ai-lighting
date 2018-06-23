<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'activity';
    $this->thead = array(
      (object) array('mData' => 'stamp', 'sTitle' => 'Date Time'),
      (object) array('mData' => 'user_name', 'sTitle' => 'User'),
      (object) array('mData' => 'activity_name', 'sTitle' => 'Activity'),
    );
    $this->form  = array ();
  }

  function create ($data) {
    if (!isset ($data['user'])) $data['user'] = $this->session->userdata('uuid');
    $data['stamp']= date('Y-m-d H:i:s');
    return parent::create($data);
  }

  function find ($param = array()) {
    $this->db
      ->select("{$this->table}.*")
      ->select("CONCAT(firstname, ' ', lastname) user_name", false)
      ->select("CONCAT(activity, ' ', entity_name) activity_name", false)
      ->join('user', 'user.uuid = activity.user', 'left');
    return parent::find($param);
  }

}