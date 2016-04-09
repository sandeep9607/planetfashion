<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model
{	
	public function	get_product($id)
	{
		$this->db->where('p_id',$id);
		$query=$this->db->get('products');
		$product = $query->row();		
		$data = array(
				 	'id'      => $product->p_id,
					'name'    => $product->p_name,
					'image'	  => $product->p_images,
				   	'qty'     => 1,
				  	'price'   => $product->p_saleprice
				  	 
				);
		$qry = $this->cart->insert($data);//insert data into cart
		if($qry)
		{
			return TRUE;
		}
	}
	
	public function update_cart()
	{
		$data = $this->input->post();
		$qry = $this->cart->update($data);			//update data to cart
		if($qry)
		{
			return TRUE;
		}
	}
	
	public function delete_product($id)
	{	
		$data = array(
				 	'rowid'      => $id,
				   	'qty'     => 0				  
				);
		$qry = $this->cart->update($data);//insert data into cart
		if($qry)
		{
			return TRUE;
		}
	}
}
?>