<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Checkout extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		$this->load->model('cart_model');
		
	}
	public function index()
	{
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		
		if(!$this->session->userdata('userid'))
		redirect('users');
		else{
			$data['result']=$this->db->get_where('users',array('u_id'=>$this->session->userdata('userid')))->row();
			$accinfo=array(
				'fname'	=> $data['result']->u_firstname,
				'lname'	=> $data['result']->u_lastname,
				'email'	=> $data['result']->u_email,
				'mobile'=> $data['result']->u_mobile
			);
			$this->session->set_userdata($accinfo);
			$data['title']	= 'Planet | Checkout';
			$data['page'] = 'checkout/checkout';
			$this->load->view('templates/content',$data);
		}
	}
	public function billingdetail()
	{		
		
		$this->form_validation->set_rules('billing_firstname','First Name','trim|required|alphanumeric|max_length[15]|min_length[3]|alpha_space');
		$this->form_validation->set_rules('billing_lastname','Last Name','trim|required|alphanumeric|max_length[15]|min_length[3]|alpha_space');
		$this->form_validation->set_rules('billing_address','Address','trim|required|max_length[150]|min_length[10]|valid_address');
		$this->form_validation->set_rules('landmark','Landmark','trim||max_length[15]|min_length[5]|alpha_space');
		$this->form_validation->set_rules('billing_towncity','Town City','trim|required|alphanumeric|max_length[20]|min_length[3]|valid_address');
		$this->form_validation->set_rules('billing_postcode','Postcode','trim|required|numeric|max_length[6]|min_length[6]');
		$this->form_validation->set_rules('billing_email','E-mail','trim|required|valid_email|max_length[32]|min_length[8]');
		$this->form_validation->set_rules('billing_phone','Mobile','trim|required|numeric|exact_length[10]|mobile_no');
		
		if($this->form_validation->run()==false)
		{ 
			//echo "khhkhk";die;
			$this->index();
		}
		else
		{
			$data=array(
			'bill_firstname'	=>$this->input->post('billing_firstname'),
			'bill_lastname'		=>$this->input->post('billing_lastname'),
			'bill_email'		=>$this->input->post('billing_email'),
			'bill_phone'		=>$this->input->post('billing_phone'),
			'bill_address1'		=>$this->input->post('billing_address'),
			'bill_address2'		=>$this->input->post('landmark'),
			'bill_city'			=>$this->input->post('billing_towncity'),
			'bill_zip'			=>$this->input->post('billing_postcode'),
			
			);
			$this->session->set_userdata($data);
			if(!isset($_POST['shipadd'])){
				
				$this->_shipping();
			}
			else{
				$data=array(
				'ship_firstname'	=>$this->input->post('billing_firstname'),
				'ship_lastname'		=>$this->input->post('billing_lastname'),
				'ship_email'		=>$this->input->post('billing_email'),
				'ship_address1'		=>$this->input->post('billing_address'),
				'ship_address2'		=>$this->input->post('landmark'),
				'ship_city'			=>$this->input->post('billing_towncity'),
				'ship_zip'			=>$this->input->post('billing_postcode'),
				'ship_phone'		=>$this->input->post('billing_phone'),
				);
				$this->session->set_userdata($data);
				$this->_vieworder();
			}
			//redirect('checkout/vieworder');
			//echo $this->session->userdata($data);die;
		}
	}
	public function shippingdetail()
	{		
		
		$this->form_validation->set_rules('shipping_firstname','First Name','trim|required|alphanumeric|max_length[15]|min_length[3]|alpha_space');
		$this->form_validation->set_rules('shipping_lastname','Last Name','trim|required|alphanumeric|max_length[15]|min_length[3]|alpha_space');
		$this->form_validation->set_rules('shipping_address','Address','trim|required|max_length[150]|min_length[10]|valid_address');
		$this->form_validation->set_rules('shipping_landmark','Landmark','trim||max_length[15]|min_length[5]|alpha_space');
		$this->form_validation->set_rules('shipping_towncity','Town City','trim|required|alphanumeric|max_length[20]|min_length[3]|alpha_space');
		$this->form_validation->set_rules('shipping_postcode','Postcode','trim|required|numeric|max_length[6]|min_length[6]');
		$this->form_validation->set_rules('shipping_email','E-mail','trim|required|valid_email|max_length[32]|min_length[8]');
		$this->form_validation->set_rules('shipping_phone','Mobile','trim|required|numeric|exact_length[10]|mobile_no');
		
		if($this->form_validation->run()==false)
		{ 
			//echo "khhkhk";die;
			$this->_shipping();
		}
		else
		{
			$data=array(
			'ship_firstname'	=>$this->input->post('shipping_firstname'),
			'ship_lastname'		=>$this->input->post('shipping_lastname'),
			'ship_email'		=>$this->input->post('shipping_email'),
			'ship_address1'		=>$this->input->post('shipping_address'),
			'ship_address2'		=>$this->input->post('shipping_landmark'),
			'ship_city'			=>$this->input->post('shipping_towncity'),
			'ship_zip'			=>$this->input->post('shipping_postcode'),
			'ship_phone'		=>$this->input->post('shipping_phone'),
			);
			//echo "<pre>";print_r($data);die;//------------Aj developer-----
			$this->session->set_userdata($data);
			$this->_vieworder();
			//redirect('checkout/vieworder');
			//echo $this->session->userdata($data);die;
		}
	}
	public function _vieworder()
	{
			$data['result'] = array(
			'bill_address1'	=> $this->session->userdata('bill_address1'),
			'bill_address2'	=> $this->session->userdata('bill_address2'),
			'bill_city'		=> $this->session->userdata('bill_city'),
			'bill_zip'		=> $this->session->userdata('bill_zip'),
			
			'ship_address1'	=> $this->session->userdata('ship_address1'),
			'ship_address2'	=> $this->session->userdata('ship_address2'),
			'ship_city'		=> $this->session->userdata('ship_city'),
			'ship_zip'		=> $this->session->userdata('ship_zip'),
			);
			
			//echo "<pre>";print_r($data);die;//--------------------------------Aj developer-----
			$data['title']	= 'Planet | View Order';
			$data['page'] = 'checkout/orderdetail';
			$this->load->view('templates/content',$data);
	}
	public function _shipping()
	{
			$data['title'] = 'Planet | View Order';
			$data['page']  = 'checkout/checkout1';
			$this->load->view('templates/content',$data);
			
	}
	public function confirmorder()
	{
		date_default_timezone_set('Asia/Kolkata');
		$this->db->order_by('id','desc');
		$orderno=$this->db->select('order_number')->get('orders')->row();
		$orderno=$orderno->order_number + 1;
		$data=array(
			'id'			=>0,
			'order_number'	=> $orderno,
			'u_id'			=> $this->session->userdata('userid'),
			'status'		=> 'Order Placed',
			'ordered_on'	=>date('Y-m-d H:i:s'),
			'shipped_on'	=>'',
			'total'			=>$this->input->post('total'),
			
			'firstname'		=> $this->session->userdata('fname'),
			'lastname'		=> $this->session->userdata('lname'),
			'phone'			=> $this->session->userdata('mobile'),
			'email'			=> $this->session->userdata('email'),
		
			'ship_firstname'	=>$this->session->userdata('bill_firstname'),
			'ship_lastname'		=>$this->session->userdata('bill_lastname'),
			'ship_email'		=>$this->session->userdata('bill_email'),
			'ship_phone'		=>$this->session->userdata('bill_phone'),
			'ship_address1'		=>$this->session->userdata('bill_address1'),
			'ship_address2'		=>$this->session->userdata('bill_address2'),
			'ship_city'		=>$this->session->userdata('bill_city'),
			'ship_zip'		=>$this->session->userdata('bill_zip'),
			
			'bill_firstname'	=>$this->session->userdata('bill_firstname'),
			'bill_lastname'		=>$this->session->userdata('bill_lastname'),
			'bill_email'		=>$this->session->userdata('bill_email'),
			'bill_address1'		=>$this->session->userdata('bill_address1'),
			'bill_address2'		=>$this->session->userdata('bill_address2'),
			'bill_city'		=>$this->session->userdata('bill_city'),
			'bill_zip'		=>$this->session->userdata('bill_zip'),
			
			);
		//$this->load->model('cart_model');
		$this->db->insert('orders',$data);
		$orderid=$this->db->insert_id();
		//$data=$this->cart_model->getcart();
		
		
		foreach($this->cart->contents() as $items):
		$data=array(
		'id' => 0,
		'order_id'	=> $orderid,
		'product_id'=> $items['id'],
		'quantity'	=> $items['qty'],
		'contents'	=> $items['name'],
		);
		$this->db->insert('order_items',$data);
		
		
		$quantity=$this->db->select('p_quantity')->get('products')->row();
		
		$p_qty=$quantity->p_quantity - $items['qty'];
		$data=array(
		'p_quantity' => $p_qty
		);
		$this->db->where('p_id',$items['id']);
		$this->db->update('products',$data);
		endforeach;
		//echo "<pre>";
		//print_r($datas);die;
		
		/*$config = Array(
	  'protocol' => 'smtp',
	  //'smtp_host' => 'ssl://smtp.googlemail.com',
	  'smtp_host' => 'ssl://smtp.mail.yahoo.com',
	  'smtp_port' => 465,
	  'smtp_user' => 'smaurya786@yahoo.com', // change it to yours
	  'smtp_pass' => '9714807411', // change it to yours
	  'mailtype' => 'html',
	  'charset' => 'iso-8859-1',
	  'wordwrap' => TRUE
		);*/
	$message="Your Order no:$orderno"."<br>"."for more inforemation mail us we are happy to help you"."<br>"."E-mail:smaurya786@yahoo.com";
       $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('test@kalikundhost.org','Planet Fashion'); // change it to yours
      $this->email->to($this->session->userdata('bill_email'));// change it to yours
      $this->email->subject('Order detail..');
      $this->email->message("Dear ".$this->session->userdata('ship_firstname').",<br>".$message);
	$this->email->send();

		//$this->session->unset_userdata($data);
		$this->session->unset_userdata($accinfo);
		$this->cart->destroy();
		$this->session->unset_userdata('item');
		
		 
		//$this->db->empty_table('cart'); 
		//$this->session->set_userdata('orderid',$orderid);
		redirect('page');
	}
	
}
