<?php

class NewsModel extends CI_Model
{
	public function __construct()
	{		
		$this->load->database();
	}
	public function getNews($per_page,$offset)
	{	
		//$this->db->where();
		$this->db->order_by('news_id','desc');
		$query = $this->db->get('news',$per_page,$offset);
		return $query->result();			
	}
	public function getNewss()
	{	
		//$this->db->where();
		$this->db->limit(4);
		$this->db->order_by('news_id','desc');
		$query = $this->db->get('news');
		return $query->result();			
	}
	public function selectNews($id)
	{
		$this->db->where('news_id',$id);
		$query = $this->db->get('news');
		return $query->result();
	}	
	public function findrec($id)
	{
		$this->db->where('news_id',$id);
		$qry=$this->db->get('news');
		if($qry->num_rows()==0)
		{
			$this->session->set_userdata('norec','No Record found');
			return true;
		}
	}
	public function searchnews()
	{
		$news  = $this->input->post('txtsearch');
		$this->db->like('news_title',$news);
		$query=$this->db->get('news');
		return $query->result();

	}
	
	
}

?>
