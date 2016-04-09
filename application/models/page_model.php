<?php
class Page_model extends CI_Model
{
	public function getpage($id)
	{
		$this->db->where('page_id',$id);
		$qry=$this->db->get('cms');
		return $qry->result();	
	}
}