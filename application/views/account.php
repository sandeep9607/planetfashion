<script>
function checkqty()
{
	if( document.formcheck.qty.value < 1 )
   {
     alert( "Minimum Quantity must be 1 ." );
     document.formcheck.qty.focus() ;
     return false;
   }
}
</script>
<script>

$(document).ready(function () {
$("#pack_category_right1").show();	
$("#pack_category_right2").hide();
$("#pack_category_right3").hide();
$("#pack_category_right4").hide();
$("#pack_category_right5").hide();
$("#pack_category_right6").hide();



$(".p").click(function () {
$("#pack_category_right1").show();
$("#pack_category_right2").hide();
$("#pack_category_right3").hide();
$("#pack_category_right4").hide();
$("#pack_category_right5").hide();
$("#pack_category_right6").hide();

return false;
});

});

$(document).ready(function () {
$(".c").click(function () {
$("#pack_category_right1").hide();
$("#pack_category_right2").show();
$("#pack_category_right3").hide();
$("#pack_category_right4").hide();
$("#pack_category_right5").hide();
$("#pack_category_right6").hide();

return false;
});

});

$(document).ready(function () {
$(".a").click(function () {

$("#pack_category_right1").hide();
$("#pack_category_right2").hide();
$("#pack_category_right3").show();
$("#pack_category_right4").hide();
$("#pack_category_right5").hide();
$("#pack_category_right6").hide();


return false;
});

});

$(document).ready(function () {
$(".e").click(function () {

$("#pack_category_right1").hide();
$("#pack_category_right2").hide();
$("#pack_category_right3").hide();
$("#pack_category_right4").show();
$("#pack_category_right5").hide();
$("#pack_category_right6").hide();


return false;
});

});

$(document).ready(function () {
$(".o").click(function () {

$("#pack_category_right1").hide();
$("#pack_category_right2").hide();
$("#pack_category_right3").hide();
$("#pack_category_right4").hide();
$("#pack_category_right5").show();
$("#pack_category_right6").hide();


return false;
});

});

$(document).ready(function () {
$(".w").click(function () {

$("#pack_category_right1").hide();
$("#pack_category_right2").hide();
$("#pack_category_right3").hide();
$("#pack_category_right4").hide();
$("#pack_category_right5").hide();
$("#pack_category_right6").show();


return false;
});

});


</script>

<div class="main">
	<div class="content_top">
    
		<div class="container">
 <?php if($this->session->flashdata('msg'))
          { ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <?php echo $this->session->flashdata('msg');?>
                    </div>
        <?php   }?>
	   		<div class="col-md-3 sidebar_box">
	   	 <div class="sidebar">
         <nav class="envor-side-navi" id="checkoutTabs">
             <h3 style="color:#D2322D;font-size:26px;">My Account </h3>
            <?php /*?> <a > <li class="checkout-tab-item" style="width:90%;" ><span class="o">Orders</span></li></a><?php */?>
             <a > <li class="checkout-tab-item" style="width:90%;" ><span class="w">WishList</span></li></a>
             <br /><br /><br /><br />
         <br style="border-bottom: solid 1px #000000;" />   
         <h3 style="color:#D2322D;font-size:26px;">Setting </h3>
         <li class="checkout-tab-item" style="width:90%;" ><span class="p">Profile</span></li><br />
         <li class="checkout-tab-item" style="width:90%;" ><span class="c">Change Password</span></li><br />
         <li class="checkout-tab-item" style="width:90%;" ><span class="a">Address</span></li><br />
         <li class="checkout-tab-item" style="width:90%;" ><span class="e">Update Email</span></li><br />
       </div>
       
		    
           
	   </div>
	   		<div class="col-lg-7 single_right">
	   			<div class="col-md-12 margin-bottom-15" id="pack_category_right1">
                   <?php if($this->session->userdata('succ_account'))
				  	{
					?> 
                    <div class="alert alert-success alert-dismissible" role="alert">
                                   
                    <?php echo $this->session->userdata('succ_account');
						$this->session->unset_userdata('succ_account');
					  ?>
                                      </div>
                      <?php
					 } ?>
					<?php
						echo form_open('account/updateprofile');
					?>
                        <h3>My Profile</h3>
                             <br />       
                  
						
                                   	First Name

                                        <?php
										$data=array(
												'name'=>'u_firstname',
												'value'=> set_value('u_firstname',$result->u_firstname),
												'class'=>'form-control',
												'required'=>'required',
											);
										 echo form_input($data); 
										 echo form_error('u_firstname');
										 ?>
                            			
                                    Last Name
                                        <?php
										$data=array(
												'name'=>'u_lastname',
										  		'value'=> set_value('u_lastname',$result->u_lastname),
												'class'=>'form-control',
												'required'=>'required',
																						
											);
										 echo form_input($data); ?>
                                   		
                                       
                                        Mobile No
                                        <?php
										$data=array(
												'name'=>'u_mobile',
												'value' => set_value('u_mobile',$result->u_mobile),
												'class'=>'form-control',
												'required'=>'required',
																						
											);
										 echo form_input($data); ?>
                                   		
                                     
                            	
                                   
                                        <span style="float:right; margin-bottom:20px;"><br>
                                        	<button class="btn btn-info btn-sm" type="submit">UPDATE PROFILE</button>

											<button class="btn btn-danger btn-sm" type="reset">RESET</button>
                                            </span>
							           
                                    <?php echo form_close(); ?>
                     </div>        
                                  <div id="pack_category_right2">
                                    <h3>Change Password</h3>
                                   
                                   <?php
								   echo br();
									echo form_open('account/changepassword');
									  ?>
                            		Current Password
                                        <?php
										$data=array(
												'name'=>'currentpassword',
												'class'=>'form-control',
												'required'=>'required',
												'placeholder'=>'Enter Current Password',										
											);
										 echo form_password($data); ?>
                                   	
                                      New Password

                                        <?php
										$data=array(
												'name'=>'newpassword',
												'class'=>'form-control',
												'required'=>'required',
												'placeholder'=>'Enter Password',										
											);
										 echo form_password($data); ?>

							
		                           Confirm Password

                                        <?php
										$data=array(
												'name'=>'confirmpassword',
												'class'=>'form-control',
												'required'=>'required',
												'placeholder'=>'Enter Confirm Password',										
											);
										 echo form_password($data); ?>
 
                                    
                                        <span style="float:right"><br>
                                        	<button class="btn btn-info btn-sm" type="submit">UPDATE PASSWORD</button>

											<button class="btn btn-danger btn-sm" type="reset">RESET</button>
                                            </span>
							           
                                   
                             <?php echo form_close(); ?>
                             </div>
                             
                			
                                     <div id="pack_category_right3">
                                  
                                    <h3>Change Address</h3>
                                   
                                   <?php
								   echo br();
									echo form_open('account/changeaddress');
									  ?>
                            		 Address
                                        <?php
										$data=array(
												'name'=>'u_address',
												'value' => set_value('u_address',$result->u_address),
												'class'=>'form-control',
												'required'=>'required',
												'rows'=>'2',
											);
										 echo form_textarea($data); ?>
                                           <span style="float:right"><br>
                                        	<button class="btn btn-info btn-sm" type="submit">UPDATE ADDRESS</button>

											<button class="btn btn-danger btn-sm" type="reset">RESET</button>
                                            </span>
                            		   
                             <?php echo form_close(); ?>
                             </div>
              				
                                    
                                   <div id="pack_category_right4">
                                    <h3>Change E-mail</h3>
                                   
                                   <?php
								   echo br();
									echo form_open('account/changeemail');
									  ?>
                            		 E-mail 
                                        <?php
										$data=array(
												'name'=>'u_email',
												'value'=> set_value('u_email',$result->u_email),
												'class'=>'form-control',
												'required'=>'required',
											);
										echo form_input($data); ?>
                                           <span style="float:right"><br>
                                        	<button class="btn btn-info btn-sm" type="submit">UPDATE E-MAIL</button>

											<button class="btn btn-danger btn-sm" type="reset">RESET</button>
                                            </span>
                            		   
                             <?php echo form_close(); ?>
                             </div>
                             
                             <div id="pack_category_right5">
                                   <h4>Orders</h4>
                             </div>
                             
                              <div id="pack_category_right6">
                                    <h4>Wishlist</h4>
                                    <?php if(!empty($product)){ ?>
                                    <table style="border:#666 solid 1px;">
                                    <tr>
                                        <th style="padding:5px; border:#999 solid 2px;">Product Name</th>
                                        <th style="padding:5px; border:#999 solid 2px;">Price</th>
                                        <th style="padding:5px; border:#999 solid 2px; text-align:center;">Image</th>
                                        <th style="padding:5px; border:#999 solid 2px;">Stock</th>
                                        <th style="padding:5px; border:#999 solid 2px; width:auto;">Action</th>
                                    </tr>
                                   <?php 
								 
								   foreach($product as $row): ?>
                                   
                                   		<tr style="border:#999 solid 2px;">
                                        
                                           <td style="padding:15px;border:#999 solid 2px; ">
                                               <?php
                                                     echo $row->p_name;			 
                                                ?>
                                            </td>
                                            <td style="padding:15px;">
												<?php
                                                 echo "&#8377;".$row->p_price;			 
                                                ?>
                                            </td>
                                             <td style="padding:15px;border:#999 solid 2px; text-align:center; ">
                                              <img alt="<?php echo $row->p_images;?>" height="20%" src="<?php echo base_url().'/images/product/'.$row->p_images;?>" width="30%"  /><a href="<?php echo site_url()?>/cart/removewish/<?php echo $row->p_id ?>" >Remove</a>
                                            </td>
                                            <td style="padding:15px;border:#999 solid 2px; text-align:center; ">
												<?php
												if($row->p_quantity > 0)
												{
													echo "<p style='color:#0C3'>In stock</p>";	
												}
												else
												{
													echo "out of stock";	
												}
                                                 
                                                ?>
                                            </td>
           <td style="padding:15px;border:#999 solid 2px;width:120px; ">
                
      <a style="color:#FFF;background-color:#F84545;"  href="<?php echo site_url()?>/cart/wish_to_cart/<?php echo $row->p_id ?>" >Add to Cart</a>
                                                   
                                            </td>
                                        <?php 
                                       								
                                  		endforeach; ?>		
                                  		
                                  		</tr>
                                  </table>			
                                  <?php }
								  else{
									echo "<center>Your wishlist is empty</center>"; } ?>			   
                             </div>
                             
                             
                            
        </div>
      </div> 
	</div>
</div>
