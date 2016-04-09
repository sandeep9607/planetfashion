<?php
if($page=='index')
{
	$this->load->view('templates/header');
	$this->load->view('templates/menu');
	$this->load->view('templates/slider');
	$this->load->view($page);
	$this->load->view('templates/footer');
}
else if($result=0)
{
	$this->load->view('templates/header');
	$this->load->view('templates/menu');
	$this->load->view($page,$result);
	$this->load->view('templates/footer');
}
else
{
	$this->load->view('templates/header');
	$this->load->view('templates/menu');
	$this->load->view($page);
	$this->load->view('templates/footer');
}

?>