<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		date_default_timezone_set('Asia/Kolkata');
		$this->load->model('account_model');
	}


	public function index($page = 'account')
	{
			if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
		
			}
			
			else
			{
				$res=$this->account_model->get_wishlist();
				$i=0;
					foreach($res as $row):
					$this->db->where('p_id',$res[$i]->p_id);
					$data['product'][]=$this->db->get('products')->row();
					$i++;
					endforeach;
				
				$data['result'] = $this->account_model->get_usersProfile();
				$data['title'] = ucfirst($page);
				$data['page']=$page;
				$this->load->view('templates/content', $data);
			}
			
	}
	
	
	public function updateprofile()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('u_firstname','Username','trim|required|min_length[6]|max_length[15]|alpha_space');
		$this->form_validation->set_rules('u_lastname','Name','trim|required|alpha_space');
		$this->form_validation->set_rules('u_mobile','Mobile No','trim|required|mobile_no');
		
		if($this->form_validation->run()==true)
		{
			$res=$this->account_model->upadate_profile();
			if($res)
			{
				$this->session->set_userdata('succ_account','Your Profile Is Updated Successfully !!');
				redirect('account');
			}
			else
			{
				$this->index();
			}
		}
		else
		{
			$this->index();
			
		}
		
	}
	
	public function changepassword()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('currentpassword','Curent Paaword','trim|required|callback_checkCurrentPassword');
		$this->form_validation->set_rules('newpassword','New Paaword','required|min_length[6]|required|max_length[15]');
		$this->form_validation->set_rules('confirmpassword','Confirm Paaword','required|matches[newpassword]');
		if($this->form_validation->run()==true)
			{
			$res=$this->account_model->updatepassword();
			if($res)
			{
				$this->session->set_userdata('succ_account','Your Password Is Updated Successfully !!');
				redirect('account');
			}
			else
			{
				$this->index();
			}
		}
		else
		{
			$this->index();
		}
	}
	
	public function checkCurrentPassword($cpass)
	{

		$res=$this->account_model->checkcurrentpassword($cpass);
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	public function changeaddress()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('u_address','u_address','trim|required|min_length[10]|max_length[150]');
	
		if($this->form_validation->run()==true)
		{
			$res=$this->account_model->upadate_address();
			if($res)
			{
				$this->session->set_userdata('succ_account','Your Profile Is Updated Successfully !!');
				redirect('account');
			}
			else
				$this->index();
		}
		else
			$this->index();				
	}
	
	public function changeemail()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('u_email','u_email','trim|required|valid_email|max_length[32]');
		if($this->form_validation->run()==true)
		{
			$res=$this->account_model->upadate_email();
			if($res)
			{
				$this->session->set_userdata('succ_account','Your Profile Is Updated Successfully !!');
				redirect('account');
			}
			else
				$this->index();
		}
		else
		{
			$this->index();			
		}		
	}
	
	
}
?>