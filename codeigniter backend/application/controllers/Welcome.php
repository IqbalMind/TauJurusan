<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		// $this->auth->cek_login();
	}
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $this->load->view('header');
    $this->load->view('welcome_message');
    $this->load->view('footer');
  }

  public function logout()
	{
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('user');
    $this->session->unset_userdata('nama');
    $this->session->unset_userdata('level');
    $this->session->unset_userdata('status');
		$this->session->unset_userdata('is_login');
		redirect('Welcome');
	}
}
