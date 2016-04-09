<div class="col-md-3 sidebar_box">
	   	 <div class="sidebar">
			
				<!--initiate accordion-->
		
       </div>
        <?php
				foreach($news as $rec)
				{
					if($rec->news_status == 1)
					{?>
                   
						 </strong> <a href="<?php echo site_url()?>/news/view/<?php echo $rec->news_id ?>" ><img  alt="<?php echo $rec->news_image;?>" height="120px" width="200px;"   src="<?php echo base_url().'/images/news/'.$rec->news_image;?>" /></a>
                      
			 <?php
					}
					echo br(2);
				}
				?>

			<div class="clients">
				<h3>Our Happy Clients</h3>
				<h4>But in order to explain to you how all this mistaken idea of denouncing pleasure and praising pain was a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of.</h4>
			   <ul class="user">
			   	<i class="user_icon"></i>
			   	<li class="user_desc"><a href=""><p>John Doe, Company Info</p></a></li>
			   	<div class="clearfix"> </div>
			   </ul>
			</div>
	   </div>