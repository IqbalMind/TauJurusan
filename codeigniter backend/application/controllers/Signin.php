<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
    }

  public function index()
  {
    $this->load->view('signin');
  }

  public function process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->Auth->login_user($username,$password))
		{
			redirect('Welcome');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('signin');
		}
	}
}
