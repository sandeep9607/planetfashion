<?php

class Product_model extends CI_Model
{
	public function __construct()
	{		
		$this->load->database();
	}
	
	public function getproduct()
	{	
		//$this->db->where();
		//$this->db->order_by('p_id','desc');
		$this->db->limit(6);
		$query = $this->db->get('products');
		return $query->result();			
	}		
	public function getproductdetail($id)
	{
		$this->db->where('p_id',$id);
		$query =$this->db->get('products');
		return $query->result();
	}
	function get_product($id)
	{
		$query	= $this->db->get_where('products', array('p_id'=>$id))->row();
		if(!$query)
		{
			return false;
		}
		return $query;
	}
	function get_products($category_id = false, $limit = false, $offset = false)
	{
		//if we are provided a category_id, then get products according to category
		if ($category_id)
		{
		/*	$this->db->select('category.*, products.*, LEAST(IFNULL(NULLIF(p_saleprice, 0), p_price), p_price) as sort_price', false)
			->from('category')->join('products', 'category.category_id=category.id')
			->where(array('category_id'=>$category_id, 'status'=>1));*/
			$this->db->where('status',1);
			$this->db->where('category_id',$category_id);
			
		/*$this->db->query('SELECT p.p_id, p.category_id,p.p_name, p.p_images,p.status,p.p_price,p.p_saleprice, p.p_quantity
    							from products p,category c
 								WHERE p.category_id = c.category_id;');*/
			
			$result	= $this->db->limit($limit)->offset($offset)->get('products')->result();
			
			return $result;
		}
		else
		{
			//sort by alphabetically by default
			$this->db->order_by('p_name', 'ASC');
			$result	= $this->db->get('products');

			return $result->result();
		}
	}
	function get_cart_ready_product($id, $quantity=false)
	{
		$product	= $this->db->get_where('products', array('p_id'=>$id))->row();
		
		//unset some of the additional fields we don't need to keep
		if(!$product)
		{
			return false;
		}
		
		//$product->base_price	= $product->price;
		
		if ($product->p_saleprice != 0.00)
		{ 
			$product->p_price	= $product->p_saleprice;
		}
		
		
		// Some products have n/a quantity, such as downloadables
		//overwrite quantity of the product with quantity requested
		
		return $product;
	}
	function get_slug($id)
	{
		return $this->db->get_where('products', array('id'=>$id))->row()->slug;
	}
	
	public function searchproduct()
	{
		$product  = $this->input->post('txtsearch');
		$this->db->like('p_name',$product);
		$query=$this->db->get('products');
		return $query->result();

	}
}

?>
