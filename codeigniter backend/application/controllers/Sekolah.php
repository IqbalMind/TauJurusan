<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
  function __construct()
	{
		parent::__construct();
		$this->load->model('Sekolah_model');
    }
    
  public function index()
  {
    $jurusan = $this->input->get('jurusan');
    $data['jurusan'] = $jurusan;
    $data['get_data'] = $this->Sekolah_model->cek($jurusan);
    $this->load->view('header');
    $this->load->view('sekolah',$data);
    $this->load->view('footer');
  }


}
