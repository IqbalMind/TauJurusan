<?php 
class Feedback_model extends CI_Model{

	public function __construct()
	{
        parent::__construct();
    }
    
 
	function cek($jurusan)
	{
		$query = $this->db->query("SELECT nama,status,ulasan,jurusan FROM ulasan a, pengguna b WHERE a.id_user=b.id and jurusan like '%$jurusan%' AND approve = 1 ORDER BY id_ulasan ASC");
		return $query->result();
    }
    
    function submit($user,$jurusan,$ulasan)
	{
		$data_user = array(
            'id_user'=>$user,
            'jurusan'=>$jurusan,
			'ulasan'=>$ulasan,
            'approve'=>0
		);
		$this->db->insert('ulasan',$data_user);
	}
	
    function daftar()
	{
		$query = $this->db->query("SELECT id_ulasan,id_user,nama,status,ulasan,jurusan,approve FROM ulasan a, pengguna b WHERE a.id_user=b.id ORDER BY id_ulasan ASC");
		return $query->result();
	}
	
	function update($user,$id,$status)
	{
		$query = $this->db->query("UPDATE ulasan SET approve=$status WHERE id_ulasan=$id and id_user=$user");
    }
}