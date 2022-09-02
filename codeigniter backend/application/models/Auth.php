<?php 
class Auth extends CI_Model{

	public function __construct()
	{
        parent::__construct();
    }
    
 
	function register($nama,$kota,$username,$email,$password,$status)
	{
		$data_user = array(
            'nama'=>$nama,
            'kota'=>$kota,
			'username'=>$username,
            'email'=>$email,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
            'level'=>1,
            'status'=>$status
		);
		$this->db->insert('pengguna',$data_user);
	}
	function login_user($username,$password)
	{
        $query = $this->db->get_where('pengguna',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('id',$data_user->id);
                $this->session->set_userdata('nama',$data_user->nama);
                $this->session->set_userdata('level',$data_user->level);
                $this->session->set_userdata('status',$data_user->status);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}