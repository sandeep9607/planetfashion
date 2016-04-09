<br /><br />
  <div class="container">
         <div class="register">
          <?php if($this->session->flashdata('success'))
          { ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <?php echo $this->session->flashdata('success');?>
                    </div>
        <?php   }?>
         <?php if($this->session->flashdata('error'))
          { ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <?php echo $this->session->flashdata('error');?>
                    </div>
        <?php   }?>
        
			   <div class="col-md-6 login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout<br />
                  process faster, store multiple shipping addresses, view and track your orders in your<br />
                  account and more.</p>
				 <a class="acount-btn" href="<?php echo site_url()?>/users/register">Create an Account</a>
                 <br />
                 <br />
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>               			
			<!--echo anchor($this->config->base_url().'index.php/login/signup','Registration');-->	
              
                <?php
					 $this->load->helper('html'); 

					 echo form_open("users/validlogin");
				if($this->session->flashdata('error'))
         		 { ?>
         			 <div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <?php echo $this->session->flashdata('error');?>
                    </div>
       			 <?php   }
				 if(validation_errors())
					{
						?>
					   
					<div class="alert alert-warning alert-dismissible"  role="alert">
					 <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				  <?php echo validation_errors(); ?>
				  </div>
				  <?php }
					
					 echo "Email";
					 echo form_input("email","",set_value('email'), 'placeholder="Email"');
					 echo br(2);
					 echo "Password";
					 echo br(1);
					 echo form_password("password", "", 'placeholder="password" ');
					 echo br(3);
					 echo form_submit('submit','Login')."&nbsp;&nbsp;&nbsp;";
					 echo anchor($this->config->base_url().'index.php/users/forgotpassword','Forgot password');
    			 	 
					 echo form_close();
				?>
				
			   </div>	
			   <div class="clearfix"> </div>
		</div>
	</div>


