<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model 
{
	public function chk_user($email,$pass)
	{
		$this->load->database();
		$this->db->where('u_email', $email);
		$this->db->where('u_password', $pass);
		$query = $this->db->get('users');
	//	$query = $this->db->get('ki_login');
		if($query -> num_rows() == 1)
			return $query->result();
		
	}	
	
	
	public function listrecords()
	{
		$query = $this->db->get('users');
		return $query->result();
		
	}
	
	function create_Member()
	{
		//$username=$this->input->post('username');
		$insert_data=array(
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'cpassword'=>md5($this->input->post('cpassword')),
			'email'=>$this->input->post('email'),
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
		
			
		);
		$insert=$this->db->insert('users',$insert_data);
		return $insert;
					
	}
	public function verifyemail($email)
	{
		$this->db->where('u_email',$email);
		$query=$this->db->get('users');
		if($query->num_rows()==0)
		return true;
		
	}
	public function check_email($email,$password)
	{
		$this->db->where('u_email',$email);
		$query = $this->db->get('users');
		if($query->num_rows() ==1)
		{  
			//echo "check_email model return true";die;
			$this->db->where('u_email',$email);
			$this->db->update('users',array('u_password'=>md5($password)));
			return true;
		}
		else
		{
			//echo "check_email model return false";die;
			return false;
			
		}
	}
}
?>