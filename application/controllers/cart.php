<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cart extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		
		$this->load->model('cart_model');
		$this->load->model('product_model');
		$this->load->library('cart');
	}
	public function index()
	{
		
		$data['title']	= 'Planet | Cart';
		$data['page'] = 'cart';
		$this->load->view('templates/content',$data);
		
	}
	function add($product_id=false)
	{
			$product_id		= $this->input->post('id');
			$quantity 		= $this->input->post('qty');
	
			// Get a cart-ready product array
			$data['product'] = $this->product_model->get_cart_ready_product($product_id, $quantity);
		
			$data=array(
			'id'	 => $data['product']->p_id,
			'name' => $data['product']->p_name,
			'image'		=>$data['product']->p_images,
			'qty'	 => $quantity,
			'price'	 => $data['product']->p_price,
			
			);	
			$this->cart->insert($data);
			$this->session->set_userdata('item',count($this->cart->contents())); 
			redirect('cart');
		
	}
	public function remove($id)
	{
		$data = array(
				 	'rowid'      => $id,
				   	'qty'     => 0				  
				);
		$qry = $this->cart->update($data);
		$this->session->set_userdata('item',count($this->cart->contents())); 
		redirect('cart');
	}
	
	public function update_cart()
	{
		$data = $this->input->post();
		$qry = $this->cart->update($data);	
		$this->session->set_userdata('item',count($this->cart->contents())); 		//update data to cart
		redirect('cart');
	}
	
	public function wishlist($id)
	{
		if($this->session->userdata('userid'))
		{
			$this->db->where('u_id',$this->session->userdata('userid'));
			$this->db->where('p_id',$id);
			$qry=$this->db->get('wishlist');
			if($qry->num_rows()==1)
			{
				$this->session->set_flashdata('exist','Product allready exist in wishlist');
				redirect($this->session->userdata('lasturl'));
			}
			else
			{
				date_default_timezone_set('Asia/Kolkata');
				$data=array(
					'id'	=> 0,
					'u_id'	=> $this->session->userdata('userid'),
					'p_id'	=> $id,
					'created' => date('Y-m-d H:i:s')
				);
				$this->cart_model->addwishlist($data);
				redirect($this->session->userdata('lasturl'));
			}
		}
		else
		{
			redirect('users');	
		}
	}
	public function removewish($id)
	{
		
		$this->db->where('u_id',$this->session->userdata('userid'));
		$this->db->where('p_id',$id);
		$this->db->delete('wishlist');
		$this->session->set_userdata('succ_account','Item removed from wishlist');
		redirect('account');
	}
	public function wish_to_cart($product_id)
	{	
			$quantity 		= 1;
			$data['product'] = $this->product_model->get_cart_ready_product($product_id, $quantity);
		
			$data=array(
			'id'	 => $data['product']->p_id,
			'name' => $data['product']->p_name,
			'image'		=>$data['product']->p_images,
			'qty'	 => $quantity,
			'price'	 => $data['product']->p_price,
			
			);	
			$this->cart->insert($data);
			$this->session->set_userdata('item',count($this->cart->contents())); 
		$this->session->set_userdata('succ_account','Item removed from wishlist');
			$this->removewish($product_id);
	}
	
	
}