<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Planet | Login';
		$data['page'] = 'login';
		$this->load->view('templates/content',$data);
	}
	public function register()
	{
		$data['title'] = 'Planet | Login';
		$data['page'] = 'register';
		$this->load->view('templates/content',$data);
	}
	public function validregister()
	{
		$this->form_validation->set_rules('firstname','First Name','trim|required|alpha_space|min_length[2]|max_length[15]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|alpha|min_length[3]|max_length[15]');	
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[30]|callback_varifyemail');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');	
		$this->form_validation->set_rules('cnfpassword','Confirm Password','trim|required|min_length[6]|max_length[32]||matches[password]');
		
		$this->form_validation->set_rules('mobile','Mobile no.','trim|required|exact_length[10]|mobile_no');	
		if($this->form_validation->run()==false)
		{
			$data['title'] = 'Planet | Registration';
			$data['page'] = 'register';
			$this->load->view('templates/content',$data);
		}
		else
		{
			date_default_timezone_set('Asia/Kolkata');
			$data = array(
			'u_firstname' => $this->input->post('firstname') ,
   			'u_lastname' => $this->input->post('lastname') ,
  			'u_email' => $this->input->post('email') ,
   			'u_password' =>md5($this->input->post('password')) ,
			'u_address' => '' ,
			'u_mobile' => $this->input->post('mobile') ,
			'u_created_at'	=> date('Y-m-d H:i:s')
			
			);
			$this->db->insert('users', $data); 
			$this->session->set_flashdata('success','You Are Successfully Registered proceed to login.');
			redirect('users');
		}
	}

		public function usercontact()
		{
		
		$this->form_validation->set_rules('txtname','Name','trim|required|max_length[30]|min_length[3]|alpha_space');
		$this->form_validation->set_rules('mob','Mobile','trim|required|exact_length[10]|mobile_no');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');	
		$this->form_validation->set_rules('msg','Message','trim|required|min_length[10]');
		
		if($this->form_validation->run() == false)
		{					
			$data['title'] = 'Planet | Contact Us';
		$data['page'] = 'contact';
		$this->load->view('templates/content',$data);
			
		}
		else
		{
			
			date_default_timezone_set('Asia/Kolkata');
			$name=$this->input->post('txtname');
			$mob=$this->input->post('mob');
			$email=$this->input->post('email');
			$msg=$this->input->post('msg');

			$data = array(
						'name' => $name ,
						'mobile' => $mob,
						'email' => $email ,
						'message' => $msg ,
						'contactdate'=>date('Y-m-d H:i:s')
						);
			$this->db->insert('contact', $data); 
			$this->session->set_flashdata('success','Your Request submitted ');
			redirect('page/contact');				
		}
	}
	public function validlogin()
	{ 
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('password','password','trim|required');	
		
		if($this->form_validation->run() == false)
		{
			$this->index();
		}
		else
		{
			$email=$this->input->post('email');
			$pass =md5($this->input->post('password'));	
			
			$this->load->model('login_model');
			$res=$this->login_model->chk_user($email,$pass);
			
			
			if($res)
			{
				if($res[0]->status == 0){
				$this->session->set_flashdata('error','Your are blocked contact to planetfashion.co@gmail.com .. ');
			redirect('users');
			}
				$data=array(
				'username'=> $res[0]->u_firstname,
				'userid'=> $res[0]->u_id,
				'email'=> $res[0]->u_email,
				'is_logged_in' => TRUE);
				
				$this->session->set_userdata($data);
				
				if($this->session->userdata('lasturl'))
				redirect($this->session->userdata('lasturl'));
				else
				redirect('page');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Login');
				redirect('users');
			}
		}
	}
	
	public function varifyemail($email1)
	{
		$this->load->model('login_model');
		$flag=$this->login_model->verifyemail($email1);
		if($flag)
		return true;
		else
		return false;
	}
	
	public function forgotpassword()
	{
		$data['title'] = 'Planet | Forgot Password';
		$data['page'] = 'forgotpassword';
		$this->load->view('templates/content',$data);
	}	
	
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('is_logged_in'); 
		redirect('page');
	}
	public function check_email()
	{
		//echo "check_email";die;
		$this->load->model('login_model');
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email|max_length[32]');
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Planet | Forgot Password';
			$data['page'] = 'forgotpassword';	
			$this->load->view('templates/content',$data);
		}		
		else
		{
			$email = $this->input->post('email');
			//$data= array($email);
			
			date_default_timezone_set('GMT');
			$this->load->helper('string');
			$password= random_string('alnum', 8);
			$query=$this->login_model->check_email($email,$password);
			if($query)
			{
				$this->sendMail($password,$email);
			}
			else
			{
				$data['title'] = 'Planet | Forgot Password';
				$this->session->set_userdata('msg',"You Have Enterd Wrong Email Address");
			
				$data['page'] = 'forgotpassword';	
				$this->load->view('templates/content',$data);
			}
		}
	}
	
	public function sendMail($password,$email)
	{
		
		//echo "sendMail";die;
		//echo $password;die;
/*		$config = Array(
		'protocol' => 'smtp',
		//'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_host' => 'ssl://smtp.mail.yahoo.com',
		'smtp_port' => 465,
		'smtp_user' => 'smaurya786@yahoo.com', // change it to yours
		'smtp_pass' => '9714807411', // change it to yours
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
		);
*/
        $message = "Dear User \n";
        $this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('test@kalikundhost.org','Planet Fashion'); // change it to yours
		$this->email->to($email);// change it to yours
		$this->email->subject('Your Password Reseted Successfully');
		$url = "www.kalikundhost.org/projects/planet/users";
		$url = prep_url($url);
		$message=('You have requested the new password, Here is you new password:'. $password.'<br>'.
		anchor($url,'Click Here').'To Login');
		$this->email->message($message);
		if($this->email->send())
		{
			$data['title'] = 'Planet | Login';
			$this->session->set_flashdata('msg','Message Sent ');
			redirect('users');
		}
		else
		{
			$this->session->set_userdata('net_error_msg',"Unable to send Email check Your Internet connection.. ");
			$data['title'] = 'Planet | Forgot password';
			$data['page'] = 'forgotpassword';
			$this->load->view('templates/content',$data);
		}
	}  
}
?>