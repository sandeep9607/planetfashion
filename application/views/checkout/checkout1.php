 <div class="main">
	<div class="content_top">
    
		<div class="container">
      <section class="envor-section envor-section-cart">
        <div class="container">
          <div class="row">
        
            <div class="col-lg-6">
                <h3 style="color:#F00;font-size:26px;">Shipping address</h3>
                <?php echo form_open('checkout/shippingdetail'); ?>   
                
				<?php echo form_label('First Name*','shipping_firstname');
                 $data=array(
				 'name'			=> 'shipping_firstname',
				 'value'		=> set_value('shipping_firstname'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'First Name',
				 );
                 echo form_input($data);
				  echo "<span style='color:#F00;'>".form_error('shipping_firstname')."</span>";?>
                 <?php echo form_label('Last Name*','shipping_lastname');
                 $data=array(
				 'name'			=> 'shipping_lastname',
				 'value'		=> set_value('shipping_lastname'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Last Name',
				 );
                 echo form_input($data);
                  echo "<span style='color:#F00;'>".form_error('shipping_lastname')."</span>";?>
                 <?php echo form_label('Address*','shipping_address');
                 $data=array(
				 'name'			=> 'shipping_address',
				 'value'		=> set_value('shipping_address'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Street Address',
				 );
                 echo form_input($data);
				  echo "<span style='color:#F00;'>".form_error('shipping_address')."</span>";?>  
               <?php  $data=array(
				 'name'			=> 'shipping_landmark',
				 'value'		=> set_value('shipping_landmark'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Landmark',
				 );
                 echo form_input($data);  
                  echo "<span style='color:#F00;'>".form_error('shipping_landmark')."</span>";?>
                 <?php echo form_label('Town / City*','shipping_towncity');
                 $data=array(
				 'name'			=> 'shipping_towncity',
				 'value'		=> set_value('shipping_towncity'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Town / City',
				 );
                 echo form_input($data);   
                  echo "<span style='color:#F00;'>".form_error('shipping_towncity')."</span>";?>
                 <?php echo form_label('Postcode*','shipping_postcode');
                 $data=array(
				 'name'			=> 'shipping_postcode',
				 'value'		=> set_value('shipping_postcode'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'postcode/ZIP',
				 );
                 echo form_input($data);
                  echo "<span style='color:#F00;'>".form_error('shipping_postcode')."</span>";?>   
                 <?php echo form_label('Email*','shipping_email');
                 $data=array(
				 'name'			=> 'shipping_email',
				 'value'		=> set_value('shipping_email'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Email',
				 );
                 echo form_input($data);
                  echo "<span style='color:#F00;'>".form_error('shipping_email')."</span>";?>   
                 <?php echo form_label('Mobile*','shipping_phone');
                 $data=array(
				 'name'			=> 'shipping_phone',
				 'value'		=> set_value('shipping_phone'),
				 'class'		=> 'form-control',
				 'placeholder'	=> 'mobile',
				 'maxlength'	=> '10' 
				 );
                echo form_input($data);
                  echo "<span style='color:#F00;'>".form_error('shipping_phone')."</span>";?>   
                   <br />
                   <br />	
                   <hr />
                 <a  href="<?php echo site_url()?>/cart" class="btn btn-default" style="color:#FFF;background-color:#00F;padding:6px 7px;" >Back <<</a>
                   <input type="submit" style="color:#FFF;background-color:#F90;" class="btn btn-primary" value="Next" />
            </div>
                
             	<?php echo form_close(); ?>
            <!--

            Checkout Tabs end

            //-->
            </div>
          </div>
        </div>
      <!--

      Main Content start

      //-->
      </section>
      </div>
     </div>
    </div>