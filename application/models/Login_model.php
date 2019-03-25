<?php 

class Login_model extends CI_Model{
	public function can_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('user');
		if($query->num_rows()>0)
		{
			return true;
		}else
		{
			return false;
		}
	}

public function can_login1($username,$password){
		$this->db->where('mobile',$username);
		$this->db->where('pass',$password);
		$query=$this->db->get('customer');
		if($query->num_rows()>0)
		{
			return true;
		}else
		{
			return false;
		}
	}

	public function get_id($username){
		$this->db->select('id');
		$this->db->from('customer');
		$this->db->where('mobile',$username);
		$query=$this->db->get();
		return $query->result();
	}

	

}