<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cart_model');
		$this->load->library(array('input','cart'));
	}
	function add()
	{
		
			$product_id		= $this->input->post('id');

			// Get a cart-ready product array
			$res= $this->cart_model->get_product($product_id);
			if($res)
			{
				$data['title']="Cart";
				$data['page']="cart";
				$this->load->view('templates/content',$data);
				
			}
			else
			{
				$this->session->set_userdata('err','Try again to add in cart !!!');
			}
		
	}
	public function index()
	{
		if ($this->input->get('id') != '')//it will run when user click on add to cart button (1st case)
		{
			$pro_id=$this->input->get('id');
			//$data['p_id'] = $pro_id;	
			$res = $this->cart_model->get_product($pro_id);
			if($res)
			{
				$data['title']="Cart";
				$this->load->view('header',$data);
				$this->load->view('templates/cart_view',$data);
				$this->load->view('footer');
			}
			else
			{
				$this->session->set_userdata('err','Try again to add in cart !!!');
			}
		}
	
		else if($this->input->post('update') != "")//it will run when user click on update button
		{
			$res  = $this->cart_model->update_cart();
			if($res)
			{			
				$data['title']="Cart";
				$this->load->view('header',$data);			
				$this->load->view("templates/cart_view",$data);
				$this->load->view('footer');
			}
			else
			{
				$this->session->set_userdata('err','Unable to update !!!');
				$this->index();
			}	
		}
		else // By default case (3)
		{
			$query=$this->db->query("select * from product");
			$data['products']=$query->result_array();	
			$data['title']="Cart";
			$this->load->view('header',$data);			
			$this->load->view("templates/cart_view",$data);
			$this->load->view('footer');	
		}					
	}
	
	public function delete($id)
	{
		$res = $this->cart_model->delete_product($id);
		if($res)
		{
			$this->session->set_userdata('succ',"Cart product deleted successfully !!");
		}
		else
		{
			$this->session->set_userdata('err',"Unable to deleted . ");
		}
		redirect('cart/index');
	}

	/*public function chksession()
	{
		//$isloggedin = $this->session->userdata('is_logged_in');
		if(! $this->session->userdata('username'))
		{
			$pro_id=$this->input->get('id');
			$this->session->set_userdata('login','Please Login ,To use the facility !!');
			redirect('product');
		}
	}*/
}
?>