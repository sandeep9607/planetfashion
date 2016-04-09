<title>Planet Garment</title>
<div class="main">
  <div class="content_top">
  	<div class="container">
     
	 <!----------- Left side ---------------->
    <?php include_once('templates/leftside.php');?> 
     <!----------- Left side end---------------->
	   <div class="col-md-9 content_right">
<div style="background-color:#9CC;height: 35px;">
                          		<?php echo form_open('page/searchterm'); ?>
                      <span>&nbsp;<?php echo $this->uri->segment(1); ?></span>
                 <input name="search" value="SEARCH" style="float:right; margin-top:5px; color:#000; width:10%;"  class="btn btn-primary" type="submit"/> 
 	<input name="txtsearch" value="<?php echo (set_value('txtsearch'));?>"  class="form-control" type="text" style="width:17%; margin-left:0px;float:right;" />
                     <?php echo form_close(); ?>
    	                       </div>
	     
	     <div class="top_grid2">
	     <?php 
		 	foreach($products as $item)
			{
			?>
            
          <div class="col-md-4 top_grid1-box1">
          
          <a href="<?php echo site_url()?>/page/single/<?php echo $item->p_id; ?>">
	     	<div class="grid_1">
             <a href="<?php echo site_url(implode('/', $base_url).'/'.$item->slug);?>">
	     	  <div class="b-link-stroke b-animate-go  thickbox" >
		        <center>
               
                <img  alt="<?php echo $item->p_images;?>" height="280px" src="<?php echo base_url().'/images/product/'.$item->p_images;?>" width="100%"  />
               
                </center>
                </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $item->p_name ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p>&#8377;<?php echo $item->p_price;?></p></li>
                    <li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
               <br />
	     </a>
         </div>
         <?php	
			}
		 ?>
         

	     <div class="clearfix"> </div>
	    </div>
	   
       </div>
	  </div>  	    
	</div>
</div>