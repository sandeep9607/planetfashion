 <div class="about">
  <div class="container">
         <div class="register">
    <img src="<?php echo base_url();?>images/logo.gif" alt=""/>                       
            </div>
             <?php  		
			 
			 	if($this->session->userdata('msg'))
				{
				?>
                    <span style="color:red;"> <?php echo $this->session->userdata('msg');
                    $this->session->unset_userdata('msg');
				}
				if($this->session->set_userdata('net_error_msg'))
				{
					echo $this->session->userdata('net_error_msg');
					echo $this->session->unset_userdata('net_error_msg');
				}
				?>
                </span>
                      
       <span style="color:red;"><?php 
		echo form_error('email');?></span>
            <!--<form>-->
            <?php
			echo form_open('users/check_email');?>
                <div class="form-group"> 
                    <label><span style="margin-bottom:50px;">Email Address</span></label><br />
                    <!--input type="text" class="form-control span12 form-control"-->
                    <input style="width: 400px;" type="etxt" placeholder="Enter email to Reset Your Password" required  name="email">
                </div>
               <!-- <a href="#" class="btn btn-primary pull-right">Reset Password</a>-->
               <div style="margin-bottom:20px;">
                <button type="submit" style="background:#99C; height:30px;" class="btn btn-primary ">Reset Password</button> 
                <br /><br />
               <div ><span class="btn btn-default" style="padding:3px;color:#000; font-size:16px; background: none repeat scroll 0% 0% #99C;font-family:Verdana;">  
			   <?php echo anchor('users','Back to Login','btn btn-primary pull-right');?></span></div>
          </div>
                <div class="clearfix"></div>
               
            <!--</form>-->
              <?php echo form_close();?>
			  
              
              
		</div>
	</div>
</div>

