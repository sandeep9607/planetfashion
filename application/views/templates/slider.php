<div class="slider">
	  <div class="callbacks_container">
          <ul class="rslides" id="slider">
      <?php foreach($banner as $rec)
	  { ?>
	  
	        <li><img src="<?php echo base_url().'images/banner/full/'.$rec->banner_image;?>" class="img-responsive" alt="<?php $rec->banner_image;?>"/>
	       
	        </li>
	       <?php /*?> <li><img src="<?php echo base_url()?>images/banner2.jpg" class="img-responsive" alt=""/>
	         <div class="banner_desc">
				<h1>Duis autem vel eum iriure dolor in hendrerit.</h1>
				<h2>Claritas est etiam processus dynamicus, qui sequitur .</h2>
			 </div>
	        </li>
	        <li><img src="<?php echo base_url()?>images/banner3.jpg" class="img-responsive" alt=""/>
	          <div class="banner_desc">
				<h1>Ut wisi enim ad minim veniam, quis nostrud.</h1>
				<h2>Mirum est notare quam littera gothica, quam nunc putamus.</h2>
			  </div>
	        </li>
	   <?php */?>
          <?php } ?>
             </ul>
	  </div>
</div>