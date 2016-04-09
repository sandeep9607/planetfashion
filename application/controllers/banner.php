<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Banner extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('banner_model');		
		}
		
		public function index()
		{
				
				$data['banner'] = $this->banner_model->getBanner();
				echo "<pre>";
				print_r($data); die;
				$data['page']= 'templates/slider';
				$this->load->view('templates/content', $data);
			
		}
		
		
	}
?>