<div class="about">
 <div class="container">
 
  <div class="singel_right">
  
			     <div class="col-md-8">
                 	
		<?php if($this->session->flashdata('success'))
          { ?>
          <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                       <?php echo $this->session->flashdata('success');?><strong>Successfully !!!</strong>
                    </div>
        <?php   }?>
        			
				      <div class="contact-form">
                      
                      
				  	     <?php echo form_open('users/usercontact')?>
					     <label for="txtname">Your Name:</label>                                
                         <?php echo form_input('txtname',set_value('txtname'),'class="textbox" ' );
						 	   echo "<span style='color:#F00;'>".form_error('txtname')."</span>";
						 ?>
                                
                         <label for="mob">Mobile No.:</label>
						 <?php echo form_input('mob',set_value('mob'),'class="textbox" ' );
						 	   echo "<span style='color:#F00;'>".form_error('mob')."</span>";
						 ?>
					    	    	
						 <label for="email">Email:</label>
                         <?php echo form_input('email',set_value('email'),'class="textbox" ');
						 	   echo "<span style='color:#F00;'>".form_error('email')."</span>";
						 ?>
                         
                         <label for="msg">Message:</label>
                         <?php echo form_textarea('msg',set_value('msg'),'class="textbox" ');
						 	   echo "<span style='color:#F00;'>".form_error('msg')."</span>";
						 ?>
                         
                         <?php echo form_submit('submit', 'Submit');?>
						 <?php echo form_close();?>
				       </div>
			     </div>
			     <div class="col-md-4 contact_right">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
						 Shop No. 318, Second Floor, Isckon Mall, Dumas Road, Opposite Raj Hans Theater, Surat, Gujarat 394550

					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="mailto:planetfashion.co@gmail.com">planetfashion.co@gmail.com</a>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
		        <div class="clearfix"></div>
		</div>
		<div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238133.04878600204!2d72.8223832!3d21.1592069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d8fe16de20b%3A0x2c740dfb080a64d7!2sPlanet+Fashion!5e0!3m2!1sen!2s!4v1430100832081" width="600" height="450" frameborder="0" style="border:0"></iframe>
          </div>
     </div>
</div>