<?php

class Banner_model extends CI_Model
{
	public function __construct()
	{		
		$this->load->database();
	}
	public function getBanner()
	{	
		//$this->db->where('banner_status',1);
		
		$query = $this->db->get('banner');
		return $query->result();			
	}
	
	
	
}

?>
