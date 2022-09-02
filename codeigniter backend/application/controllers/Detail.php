<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

  public function index()
  {
    $this->load->view('header');
    $this->load->view('welcome_message');
    $this->load->view('footer');
  }

  function tkj()
  {
    $this->load->view('header');
    $this->load->view('detail_tkj');
    $this->load->view('footer');
  }

  function rpl()
  {
    $this->load->view('header');
    $this->load->view('detail_rpl');
    $this->load->view('footer');
  }
  function tm()
  {
    $this->load->view('header');
    $this->load->view('detail_tm');
    $this->load->view('footer');
  }
}
