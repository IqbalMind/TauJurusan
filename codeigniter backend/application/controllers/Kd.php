<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kd extends CI_Controller {
  function __construct()
	{
		parent::__construct();
		// $this->load->model('Kd_model');
    }
    
  public function index()
  {
    redirect('Welcome');
  }

  public function tkj(){
    $this->load->view('header');
    $this->load->view('kd_tkj');
    $this->load->view('footer');
  }

  public function rpl(){
    $this->load->view('header');
    $this->load->view('kd_rpl');
    $this->load->view('footer');
  }


}
