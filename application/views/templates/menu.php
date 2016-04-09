<?php
 /*?>$data=$this->menu_model->getmenu();
foreach($data as $row)
{
echo "<span style='color:red;'>".$row->menu_name."</span><br>";
$data=$this->menu_model->getcategory($row->menu_id);
	$res=$data->result();
			
				
					foreach($res as $row)
					{
		echo "<span style='color:green;'>".$row->category_name."</span><br>";
		$da=$this->menu_model->getsubcategory($row->category_id);
		//print_r($da);die;
			$res=$da->result();
					foreach($res as $r)
					{
				echo "<span style='color:brown;'>".$r->category_name."</span><br>";
			}
			echo "<br>";
	}
} 
die;
?><?php */?>
<div class="head-bann">
		<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
					<ul class="megamenu skyblue">
                    <li ><a class="<?php echo ($this->uri->segment(1)=='')? 'active1' : 'color1';?>" href="<?php echo site_url()?>">Home</a>
         <?php
         $data=$this->category_model->getmenu();
		foreach($data as $row)
		{
			?>
			<li ><a <?php if($row->menu_url=='')
							echo '';
							else
							{ ?>
                            href="<?php echo site_url($row->menu_url)?>"
                            <?php } ?> class="color<?php echo $row->menu_id ?>"><?php echo $row->menu_name ?></a>
				<div class="megapanel">
					<div class="row">
				<?php $dat=$this->category_model->getcategory($row->menu_id);
				$res=$dat->result();
				$totalrow=$dat->num_rows();
				
					foreach($res as $row)
					{
						?>
						<div class="col1">
							<div class="h_nav">
                            <ul>
								<h4><?php echo $row->category_name;?></h4>
                                <?php $subcat=$this->category_model->getsubcategory($row->category_id);
									$subres=$subcat->result_object();

									foreach($subres as $res)
									{ 
									
									?>
									<li><a href="<?php echo site_url($res->category_url)?>"><?php echo $res->category_name;?></a></li>
									<?php 
									
									} ?>
								</ul>	
							</div>							
						</div>

				<?php
					}
					echo "</div>";
					
    			echo "</div>";
					echo "</li>";
		} ?>
            			
				<li><a class="<?php echo ($this->uri->segment(1)=='news')? 'active9' : 'color9';?>" href="<?php echo site_url()?>/news">News</a></li>	
                <li><a class="<?php echo ($this->uri->segment(2)=='about')? 'active11' : 'color11';?>" href="<?php echo site_url()?>/page/about">About Us</a></li>
                <li><a class="<?php echo ($this->uri->segment(2)=='contact')? 'active10' : 'color10';?>" href="<?php echo site_url()?>/page/contact">Contact Us</a></li>
				<div class="clearfix"> </div>
		 </ul> 
			</div>
		</div>	
	</div>