<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  function __construct()
	{
		parent::__construct();
		$this->load->model('Feedback_model');
    }
    
  public function index()
  {
    if($this->session->userdata('level') == '0' && !empty($this->session->userdata('is_login'))){
    $data['get_data'] = $this->Feedback_model->daftar();
    $this->load->view('header');
    $this->load->view('dashboard',$data);
    $this->load->view('footer');
    }else{
        redirect('Welcome');
    }
  }

  public function approve()
	{
    $user = $this->input->post('id_user');
    $id = $this->input->post('id_ulasan');
		$status = 1;
    $this->Feedback_model->update($user,$id,$status);
    redirect('Dashboard');
  }
  
  public function reject()
	{
    $user = $this->input->post('id_user');
    $id = $this->input->post('id_ulasan');
		$status = 0;
    $this->Feedback_model->update($user,$id,$status);
    redirect('Dashboard');
	}


}
