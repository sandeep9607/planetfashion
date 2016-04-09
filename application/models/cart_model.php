<?php
class Cart_model extends CI_Model
{
	public function getcart()
	{
		$qry=$this->db->get('cart')->result();
		return $qry;
	}
	public function removeitem($id)
	{
		$this->db->where('p_id',$id);
		$qry=$this->db->delete('cart');
		
		return true;
	}
	public function addwishlist($data)
	{
		$this->db->insert('wishlist',$data);
		return true;
	}
	public function removewish($id)
	{
		$this->db->where('u_id',$this->session->userdata('userid'));
		$this->db->where('p_id',$id);
		$this->db->delete('wishlist');
		return true;
	}
}

?>
