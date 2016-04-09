 <div class="main">
	<div class="content_top">
    
		<div class="container">
      <section class="envor-section envor-section-cart">
        <div class="container">
          <div class="row">
        
            <div class="col-lg-6">
                <h3 style="color:#F00;font-size:26px;">Billing address</h3>
         		<?php echo form_open('checkout/billingdetail'); ?>   
                 
                 <?php echo form_label('First Name*','billing_firstname');
				 echo "<span style='color:#F00;'>".form_error('billing_firstname')."</span>";
                 $data=array(
				 'name'			=> 'billing_firstname',
				 'class'		=> 'form-control',
				 'value'		=> set_value('billing_firstname',$result->u_firstname),
				 'placeholder'	=>'First Name',
				 );
				 
                 echo form_input($data,'','required');?>
                 <?php echo form_label('Last Name*','billing_lastname');
				  echo "<span style='color:#F00;'>".form_error('billing_lastname')."</span>";
                 $data=array(
				 'name'			=> 'billing_lastname',
				 'class'		=> 'form-control',
				 'value'		=> set_value('billing_lastname',$result->u_lastname),
				 'placeholder'	=>'Last Name',
				 );
                 echo form_input($data,'','required');?>
                <?php echo form_label('Address*','billing_address');
				 echo "<span style='color:#F00;'>".form_error('billing_address')."</span>";
                 $data=array(
				 'name'			=> 'billing_address',
				 'value'		=> set_value('billing_address'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Street Address',
				 );
                 echo form_input($data,'','required');
                 echo form_label('Landmark','LandMark');
				  echo "<span style='color:#F00;'>".form_error('landmark')."</span>";
                 $data=array(
				 'name'			=> 'landmark',
				 'value'		=> set_value('landmark'),
				
				 'class'		=> 'form-control',
				 'placeholder'	=>'Landmark',
				 );
                 echo form_input($data);?>  
                 <?php echo form_label('Town / City*','billing_towncity');
				 echo "<span style='color:#F00;'>".form_error('billing_towncity')."</span>";
                 $data=array(
				 'name'			=> 'billing_towncity',
				 'value'		=> set_value('billing_towncity'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Town / City',
				 );
                 echo form_input($data,'','required');?>    
                 <?php echo form_label('Postcode*','billing_postcode');
				  echo "<span style='color:#F00;'>".form_error('billing_postcode')."</span>";
                 $data=array(
				 'name'			=> 'billing_postcode',
				 'value'		=> set_value('billing_postcode'),
				 'class'		=> 'form-control',
				 'placeholder'	=>'postcode/ZIP',
				 );
                 echo form_input($data,'','required');?>    
                 <?php echo form_label('Email*','billing_email');
				  echo "<span style='color:#F00;'>".form_error('billing_email')."</span>";
                 $data=array(
				 'name'			=> 'billing_email',
				 'value'		=> set_value('billing_email',$result->u_email),
				 'class'		=> 'form-control',
				 'placeholder'	=>'Email',
				 );
                 echo form_input($data,'','required');?>    
                 <?php echo form_label('Mobile*','billing_phone');
				 echo "<span style='color:#F00;'>".form_error('billing_phone')."</span>";
                 $data=array(
				 'name'			=> 'billing_phone',
				 'value'		=> set_value('billing_phone',$result->u_mobile),
				 'class'		=> 'form-control',
				 'placeholder'	=>'mobile',
				 'maxlength'	    => '10' 
				 );
                 echo form_input($data,'','required');?>  
                  <br />
                  <input name="shipadd" type="checkbox" id="ship-to-billing-address"  
                  checked="checked"> Ship to billing address?</label>
                 
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