<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
    }
    
  public function index()
  {
    $this->load->view('signup');
  }

  public function process()
	{
        $this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('kota', 'kota','trim|required|min_length[1]|max_length[50]');
        $this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[30]|is_unique[pengguna.username]');
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[50]|is_unique[pengguna.email]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
			$nama = $this->input->post('nama');
			$kota = $this->input->post('kota');
			$status = $this->input->post('status');
			$this->Auth->register($nama,$kota,$username,$email,$password,$status);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('Welcome');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('feedback/jurusan');
		}
	}
}
