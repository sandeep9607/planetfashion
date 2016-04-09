<?php
class Category_model extends CI_Model
{

	public function getmenu()
	{
		$qry=$this->db->get('menu');
		return $qry->result();
	}
	
	public function getcategory($mid)
	{	
		$this->db->where('menu_id',$mid);
		$this->db->where('parent_id',0);
		return $qry=$this->db->get('category');
	}
	
	public function getsubcategory($pid)
	{
		 $q=$this->db->query("SELECT * FROM category WHERE parent_id IN ( SELECT category_id 
		 FROM category where category_id=$pid)");
		return $q;
		
	}
	
}
?>