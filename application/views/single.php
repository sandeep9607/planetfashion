<div class="main">
	<div class="content_top">
    	<div class="container">
	    	   
	 <!----------- Left side ---------------->
    <?php include_once('templates/leftside.php');?> 
     <!----------- Left side end---------------->
   <!--    ---------------- content side -------------->
	   		<div class="col-md-9 single_right">
	   			<div class="single_top">
	       			<div class="single_grid">
						<div class="grid images_3_of_2">
							<ul id="etalage">
								
                                <li>
			<a href="optionallink.html">                                
			<img class="etalage_thumb_image" src="<?php echo base_url()?>/images/product/<?php echo $product->p_images;?>" class="img-responsive" />
			<img class="etalage_source_image" src="<?php echo base_url()?>/images/product/<?php echo $product->p_images;?>" class="img-responsive" title="" /></a>
                                    
								</li>
          <?php foreach($prod_img as $row): ?>
          	 <li>
			<img class="etalage_thumb_image" src="<?php echo base_url()?>/images/product/full/<?php echo $row->p_images;?>" class="img-responsive" />
			<img class="etalage_source_image" src="<?php echo base_url()?>/images/product/full/<?php echo $row->p_images;?>" class="img-responsive" title="" />
								</li>
          <?php endforeach; ?>
							</ul>
                            
						 	<div class="clearfix"></div>		
				  	</div> 
				  	<div class="desc1 span_3_of_2">
				  		<h2><?php echo $product->p_name;?></h2>
						<p class="availability">Availability: <span class="color">In stock</span></p>
                            <div class="price_single">
                                <span class="reducedfrom">&#8377;<?php echo $product->p_price;?></span>
                                <span style="color:#C30;font-size:16px;">&#8377;&nbsp;</span><span class="actual"><?php echo $product->p_saleprice;?></span>
                            </div>
                        
						<h2 class="quick">Quick Overview:</h2>
						<p class="quick_desc"><?php echo (strlen($product->short_desc) > 200)? substr($product->short_desc,0,200).'..': $product->short_desc;?></p>
                        
			    		<div class="wish-list">
				 			
				 				<li><a  href="<?php echo site_url()?>/cart/wishlist/<?php echo $product->p_id; ?>" >Add to Wishlist</a></li>
				 	    		<li class="compare"><?php echo $this->session->flashdata('exist'); ?></li>
				 </div>
				<div class="quantity_box">
                
                <?php 
				$data=array(
				'name'=>'formcheck',
				'onsubmit'=>'return checkqty()'
				);
				
				echo form_open('cart/add',$data);
				echo form_hidden('id',$product->p_id);
				?>
                <input name="qty" type="hidden" value="1" size="3" style="height:35px;text-align:center;float:left;margin:5px 5px; 10px 0px;"/>
                <input type="submit" class="btn resp-tab-item" style="color:#FFF;background-color:#F84545;width:40%;float:left;" value="Add to Cart"/>
              <?php echo form_close(); ?>
		   		    <div class="clearfix"></div>
                      
	   		    </div>          
                 
                	</div>
		    <div class="clearfix"> </div>
				</div>
          	    <div class="clearfix"></div>
          </div>
          <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <!--<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>-->
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									 <?php echo $product->long_desc; ?>     
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									    <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>      
							     </div>	
							 </div>
					      </div>
			  </div>
              <?php $this->load->model('product_model');
			  	$this->db->limit(3);
			  	$this->db->where('category_id',$product->category_id);
				$res=$this->db->get('products')->result();
			  ?>
		<h3 class="single_head">Related Products</h3>	
	    <div class="related_products">
	     <?php foreach($res as $item): ?>
	     <div class="col-md-4 top_grid1-box1"> <a href="<?php echo site_url()?>/page/single/<?php echo $item->slug; ?>">
	     
            <div class="grid_1">
	     	  <div class="b-link-stroke b-animate-go  thickbox" >
		        <center>
                <img  alt="<?php echo $item->p_images;?>" height="280" src="<?php echo base_url().'/images/product/'.$item->p_images;?>" width="100%"  />
                </center>
                </div>
	     	  <div class="grid_2">
	     	  	<p><?php echo $item->p_name; ?></p>
	     	  	<ul class="grid_2-bottom">
	     	  		<li class="grid_2-left"><p><?php echo '&#8377;'; ?><?php echo $item->p_price;?></p></li>
                    <li class="grid_2-right"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It</div></li>
	     	  		<div class="clearfix"> </div>
	     	  	</ul>
	     	  </div>
	     	</div>
	     </a></div>
         <?php endforeach; ?>
	     <div class="clearfix"> </div>
	    </div> 
	    
        </div>
      </div> 
	</div>
</div>
