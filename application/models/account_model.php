<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account_model extends CI_Model
{

	public function get_usersProfile()
	{
		$this->db->where('u_id',$this->session->userdata('userid'));
		$query = $this->db->get('users');
		return $query->row();
	}
	
	public function upadate_profile()
	{
		$username=$this->input->post('u_firstname');
		$name=$this->input->post('u_lastname');
		//$address=$this->input->post('address');
		$mobile_no=$this->input->post('u_mobile');
		//$email_id=$this->input->post('email_id');
		$data=array(
			'u_firstname'=>$username,
			'u_lastname'=>$name,
			'u_mobile'=>$mobile_no
			
		);
		$res=$this->db->where('u_id',$this->session->userdata('userid'))->update('users',$data);
		return $res;
	}
	public function checkcurrentpassword($cpass)
	{
		$res=$this->db->where('u_password',md5($cpass))->where('u_id',$this->session->userdata('userid'))->get('users')->row();
		return $res;
	}
	public function updatepassword()
	{
		$password=md5($this->input->post('newpassword'));
		$res=$this->db->where('u_id',$this->session->userdata('userid'))->update('users',array('u_password'=>$password));
		return $res;
	}
	
	public function upadate_address()
	{
		$address=$this->input->post('u_address');
		$data=array(
			
			'u_address'=>$address,
			
		);

		$res=$this->db->where('u_email',$this->session->userdata('email'))->update('users',$data);
		return $res;
	}

	public function upadate_email()
	{
		$email=$this->input->post('u_email');
		$data=array(
			
			'u_email'=>$email,
			
		);
		$res=$this->db->where('u_email',$this->session->userdata('email'))->update('users',$data);
		$this->session->set_userdata('email',$email);
		return $res;
	}
	
	public function get_wishlist()
	{
		$this->db->where('u_id',$this->session->userdata('userid'));
		$query = $this->db->get('wishlist');
		
		return $query->result();

	}
}
?>