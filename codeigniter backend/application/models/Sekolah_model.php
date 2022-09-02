<?php 
class Sekolah_model extends CI_Model{

	public function __construct()
	{
        parent::__construct();
    }
    
 
	function cek($jurusan)
	{
		$query = $this->db->query("SELECT * FROM sekolah WHERE jurusan like '%$jurusan%' ORDER BY nama_sekolah ASC");
		return $query->result();
	}
}