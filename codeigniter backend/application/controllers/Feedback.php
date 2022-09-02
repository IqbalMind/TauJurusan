<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {
  function __construct()
	{
		parent::__construct();
		$this->load->model('Feedback_model');
    }
    
  public function index()
  {
    $jurusan = $this->input->get('jurusan');
    $data['jurusan'] = $jurusan;
    $data['get_data'] = $this->Feedback_model->cek($jurusan);
    $this->load->view('header');
    $this->load->view('feedback',$data);
    $this->load->view('footer');
  }

  public function submit()
	{
        $this->form_validation->set_rules('ulasan', 'ulasan','trim|required|min_length[5]|max_length[200]');
		if ($this->form_validation->run()==true)
	   	{
			$user = $this->input->post('user');
            $jurusan = $this->input->post('jurusan');
            $ulasan = $this->input->post('ulasan');
			$this->Feedback_model->submit($user,$jurusan,$ulasan);
			$this->session->set_flashdata('success_submit','Proses Pemberian Ulasan Berhasil');
			redirect('welcome');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('welcome');
		}
	}



}
