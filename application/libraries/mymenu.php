<?php
	class MyMenu extends CI_controller{
	   function show_menu(){
		   $this->load->model('menu_model');
	          $data['result']=$this->menu_model->getmenu();
	          return $data;
   }
}
?>