<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Single extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('productModel');		
	}
	
	
	
	public function View($id)
	{
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());		 			
		$data['product']=$this->ProductModel->getproduct($id);
		$data['page']='single';
		$this->load->view('templates/content',$data);
	}
}
?>