<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Model {

  function __construct () {
    parent::__construct();
    $this->table = 'product';
    $this->thead = array(
      (object) array('mData' => 'item', 'sTitle' => 'Item'),
      (object) array('mData' => 'image_file', 'sTitle' => 'Product Image'),
      (object) array('mData' => 'installed_payback_price', 'sTitle' => 'Installed Payback Price'),
      (object) array('mData' => 'availability_value', 'sTitle' => 'Availability'),
      (object) array('mData' => 'spec_sheet_link', 'sTitle' => 'Spec Sheet'),
      (object) array('mData' => 'edit', 'sTitle' => '')
    );
    $this->form  = array ();

    $this->form[]= array(
      'name'    => 'item',
      'label'   => 'Item',
      'type'    => 'textarea'
    );

    $this->form[]= array(
      'name'    => 'image',
      'label'   => 'Image',
      'type'		=> 'file'
    );

    $this->form[]= array(
      'name'    => 'installed_payback_price',
      'label'   => 'Installed Payback Price',
    );

    $this->form[]= array(
      'name'    => 'availability',
      'label'   => 'Availability',
      'options' => array(
      	array('value' => 'available', 'text' => 'Available'),
      	array('value' => 'out_of_stock', 'text' => 'Out of Stock'),
      )
    );

    $this->form[]= array(
      'name'    => 'spec_sheet',
      'label'   => 'Spec Sheet',
      'type'		=> 'file'
    );

  }

  function save ($data) {
  	if ($_FILES) {
			$storage = 'asset/file/';
			$filefields = array('image', 'spec_sheet');
			foreach ($filefields as $field) {
				if (strlen($_FILES[$field]['name']) < 1) continue;
		    $generate = $this->db->select('UUID() uuid', false)->get()->row_array();
		    $filename = $generate['uuid'];
		    $extension= explode('.', basename($_FILES[$field]['name']));
		    $filename.= '.' . end($extension);
		    $data[$field] = $filename;
		    $filename = $storage . $filename;
		    move_uploaded_file($_FILES[$field]['tmp_name'], $filename);
				if (isset ($data['uuid'])) {
					$record = $this->findOne($data['uuid']);
					if (strlen ($record[$field]) > 0 && file_exists($storage . $record[$field])) unlink($storage . $record[$field]);
				}
			}
  	}
  	return parent::save($data);
  }

  function find ($param = array()) {
  	$asset = base_url('asset/file/');
  	$this->db
  		->select("{$this->table}.*")
  		->select("CASE WHEN 'available' = availability THEN 'Available' WHEN 'out_of_stock' = availability THEN 'Out of Stock' END availability_value", false)
      ->select("'<a class=\"btn btn-primary\">Edit</a>' edit", false);
  	$records = parent::find($param);
  	foreach ($records as &$record) {
      $record->image_file = '';
  		$record->spec_sheet_link = '';
      if (strlen ($record->image) > 0) $record->image_file = '<img class="img-responsive" src="' . $asset.$record->image.'">';
  		if (strlen ($record->spec_sheet) > 0) $record->spec_sheet_link = '<a href="'.$asset . $record->spec_sheet .'" target="_blank" class="btn btn-primary">Download</a>';
  	}
  	return $records;
  }

  function delete ($uuid) {
    $record = $this->findOne($uuid);
    $filefields = array('image', 'spec_sheet');
    foreach ($filefields as $field) if (strlen ($record[$field]) > 0 && file_exists("asset/file/{$record[$field]}")) unlink("asset/file/{$record[$field]}");
    $result = parent::delete($uuid);
    $this->load->model('Activities');
    $this->Activities->create(array('activity' => 'delete', 'entity_name' => 'product', 'entity_id' => $uuid));
    return $result;
  }

  function create ($data) {
    $uuid = parent::create($data);
    $this->load->model('Activities');
    $this->Activities->create(array('activity' => 'create', 'entity_name' => 'product', 'entity_id' => $uuid));
    return $uuid;
  }

  function update ($data) {
    $uuid = parent::update($data);
    $this->load->model('Activities');
    $this->Activities->create(array('activity' => 'update', 'entity_name' => 'product', 'entity_id' => $uuid));
    return $uuid;
  }

}