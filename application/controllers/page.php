<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('banner_model');
		$this->load->model('NewsModel');
	}
	public function index()
	{
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['news'] = $this->NewsModel->getNewss();
		$data['page']='templates/leftside';
		$data['title'] = 'Planet | Fashion';
		$data['banner'] = $this->banner_model->getBanner();
		$data['product']=$this->product_model->getproduct();	
		$data['page'] = 'index';
		$this->load->view('templates/content',$data);

	}
	public function about()
	{
		$data['title'] = 'Planet | About Us';
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['page'] = 'about';
		$this->load->view('templates/content',$data);
	}
	public function contact()
	{
		$data['title'] = 'Planet | Contact Us';
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['page'] = 'contact';
		$this->load->view('templates/content',$data);
	}
	
	public function wishlist()
	{
		$data['title'] = 'Planet | wishlist';
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['page'] = 'wishlist';
		$this->load->view('templates/content',$data);
	}
	
	public function single($id=0)
	{
		$data['news'] = $this->NewsModel->getNewss();
		$data['page']='templates/leftside';
		$data['title'] = 'Planet | Product Detail';
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['product']=$this->product_model->getproductdetail($id);
		$data['page'] = 'single';
		$this->load->view('templates/content',$data);
	}
	public function pages($id)
	{
		$this->load->model('page_model');
		$data['result']=$this->page_model->getpage($id);
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['title'] = "Planet | ".$data['result'][0]->page_title;
		$this->load->view('templates/header',$data);
		$this->load->view('templates/menu',$data);
		$this->load->view('cmspage',$data);
		$this->load->view('templates/footer',$data);
	}
	
	
	

	function category($id)
	{

		//get the category
	/*	$data['category'] = $this->menu_model->get_category($id);
				
		if (!$data['category'] || $data['category']->enabled==0)
		{
			show_404();
		}*/
				
		//$product_count = $this->Product_model->count_products($data['category']->id);
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		//set up pagination
		$segments	= $this->uri->total_segments();
		$base_url	= $this->uri->segment_array();
		
		/*if($data['category']->slug == $base_url[count($base_url)])
		{
			$page	= 0;
			$segments++;
		}
		else
		{
			$page	= array_splice($base_url, -1, 1);
			$page	= $page[0];
		}*/
		$page=0;
		$data['base_url']	= $base_url;
		
		$data['title']	= 'Products';
		
	
		//set up pagination
		$this->load->library('pagination');
		$config['base_url']		= site_url($base_url);
		
		$config['uri_segment']	= $segments;
		$config['per_page']		= 24;
		//$config['total_rows']	= $product_count;
		
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
				
		$this->pagination->initialize($config);

		$data['products']	= $this->product_model->get_products($id, $config['per_page'], $page);
		
		foreach ($data['products'] as &$p)
		{
			//$p->images	= (array)json_decode($p->images);
			//$p->options	= $this->Option_model->get_product_options($p->id);
		}
		$data['news'] = $this->NewsModel->getNewss();
		$data['page'] = 'productlist';
		$this->load->view('templates/content',$data);

	}
	
	function product($id)
	{
		
		//get the product
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['product']	= $this->product_model->get_product($id);
		$this->db->where('p_id',$data['product']->p_id);
		$data['prod_img']	= $this->db->get('product_images')->result();
		
		if(!$data['product'] || $data['product']->status==0)
		{
			show_404();
		}
		
		$data['base_url']			= $this->uri->segment_array();
		
		// load the digital language stuff
		$data['posted_options']	= $this->session->flashdata('option_values');
		$this->session->set_userdata('url',$this->uri->uri_string());
		$data['title']			= $data['product']->p_name;
		//$data['meta']				= $data['product']->meta;
		//$data['seo_title']			= (!empty($data['product']->seo_title))?$data['product']->seo_title:$data['product']->name;
		//$data['gift_cards_enabled'] = $this->gift_cards_enabled;
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['news'] = $this->NewsModel->getNewss();
		$data['page'] = 'single';
		
		$this->load->view('templates/content',$data);	
	}
	function add_to_cart()
	{
		// Get our inputs
		$product_id		= $this->input->post('id');
		$quantity 		= $this->input->post('qty');
		// Get a cart-ready product array
		$data['product'] = $this->product_model->get_cart_ready_product($product_id, $quantity);
		//echo $data['product']->p_id;die;
		date_default_timezone_set('Asia/Kolkata');
		//loop through the products in the cart and make sure we don't have this in there already. If we do get those quantities as well
			
		
		$data=array(
		'cart_id'=> 0,
		'u_id'   => 7,
		'p_id'	 => $data['product']->p_id,
		'p_name' => $data['product']->p_name,
		'p_image' => $data['product']->p_images,
		'qty'	 => $quantity,
		'price'	 => $data['product']->p_price,
		'cart_datetime' => date('Y-m-d H:i:s')
		);
		$this->db->insert('cart',$data);
		redirect('page/cart');
		
	}
	
	function cart()
	{
		$this->load->model('cart_model');
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['result']=$this->cart_model->getcart();
		$data['totalitem']=$this->db->count_all('cart');
		$this->session->set_userdata('totalitem',$data['totalitem']);
		$data['title']	= 'Planet | Cart';
		$data['page'] = 'cart';
		$this->load->view('templates/content',$data);
		
	}
	public function checkout()
	{
		$data['title']	= 'Planet | Checkout';
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['page'] = 'checkout';
		$this->load->view('templates/content',$data);
	}
	public function searchterm()
	{
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['products'] = $this->product_model->searchproduct();
		$this->db->where('p_name',$this->input->post('txtsearch'));
		$data['no_of_records'] = $this->db->select('*')->get('products')->num_rows();
		$data['title'] = ucfirst('productlist');
		$data['page']= 'productlist';
		$this->load->view('templates/content',$data);
	
	}
	public function termsandcondition()
	{
		$data['title'] = 'Planet | Terms & condition';
		$this->session->set_userdata('lasturl',site_url().'/'.$this->uri->uri_string());
		$data['page'] = 'terms_condition';
		$this->load->view('templates/content',$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */