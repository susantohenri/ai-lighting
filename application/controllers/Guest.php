<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

  public function __construct () {
    parent::__construct();
    $this->load->helper('url');
  }

  public function Migration ($version = 0)
  {
    $this->load->library('migration');
    $success = $version > 0 ? $this->migration->version($version) : $this->migration->latest();
    if (!$success) show_error($this->migration->error_string());
  }

  public function Login () {
  	if ($post = $this->input->post()) {
  		$this->load->database();
  		if ($user = $this->db->get_where('user', array(
  				'email' => $post['email'],
  				'password' => md5($post['password'])
  			))->row_array()) {
  			$this->load->library('session');
  			$this->session->set_userdata($user);
  			redirect(base_url());
  		}
  	}
  	$this->load->view('Login');
  }

  public function Logout () {
    $this->load->library('session');
    $this->session->sess_destroy();
    redirect(base_url());
  }

}