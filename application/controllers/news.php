<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class News extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('NewsModel');		
		}
		
		public function index()
		{
			$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
			$data['title']="Planet | News";
			$page='newslist';
			if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}	
			else
			{
				$this->load->library('pagination');
				$config['cur_tag_open'] = '<b>';
				$config['cur_tag_close'] = '</b>';
				$config['prev_link'] = 'Prev';           //&lt;
				$config['next_link'] = 'Next';            // &gt;
				$config['first_link'] = 'First';
				$config['last_link'] = 'Last';
				$config['num_links'] = 2;
				$config['use_page_numbers'] = FALSE;
				$config['base_url'] = site_url('news/index');
				$config['total_rows'] = $this->db->get('news')->num_rows();
				$config['per_page'] = 5;
				$this->pagination->initialize($config);
				$data['news'] = $this->NewsModel->getNews($config['per_page'],$this->uri->segment(3));
				$data['title'] = ucfirst($page);
				$data['page']= 'newslist';
				$this->load->view('templates/content', $data);
			
			}
		}
		public function view($id=0)
		{
			$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
			$rec=$this->NewsModel->findrec($id);	
			if($rec)
			{
				$data['page']='invalidarg';
				$this->load->view('templates/content',$data);
			}
			else
			{
				$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
				$data['title']="Planet | News Detail";
				$data['news']=$this->NewsModel->selectNews($id);
				$currentImg=$data['news'][0]->news_image;
				$this->session->set_userdata('currentImg',$currentImg);
				$this->session->set_userdata('id1',$data['news'][0]->news_id);
			
				$data['page']='viewnews';
				$this->load->view('templates/content',$data);
			
			}
		}	
		
	}
?>