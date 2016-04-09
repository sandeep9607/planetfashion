
<div class="main">
  <div class="content_top">
  	<div class="container">
	   <?php
	   include_once('templates/leftside.php');
	   ?> 
	   <div class="col-md-9 content_right">
	      <div class="top_grid2">
	     <?php 
		 	foreach($product as $item)
			{
			?>
            
          <div class="col-md-4 top_grid1-box1">
          
          <a href="<?php echo site_url()?>/page/single/<?php echo $item->slug; ?>">
	     	<div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox" >
		        <center>
                <img  alt="<?php echo $item->p_images;?>" height="280" src="<?php echo base_url().'/images/product/'.$item->p_images;?>" width="100%"  />
                </center>
                </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $item->p_name; ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p><?php echo '&#8377;'; ?><?php echo $item->p_saleprice;?></p></li>
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