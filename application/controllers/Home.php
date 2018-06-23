<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct () {
		$this->model = '';
		parent::__construct();
	}

	function index () {
		$this->loadview('Template', array('page' => 'Home'));
	}

	function Intro () {
		$this->loadview('Template', array('page' => 'Intro'));
	}

}