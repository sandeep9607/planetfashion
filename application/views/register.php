<br />
  <div class="container">
      <div class="register">
	<div class="col-md-12">
    <?php
	$this->load->helper('html');

?>
                <h3 style="color:#F00;font-size:26px;">Register </h3>
             <?php echo form_open('users/validregister')?>

				
                <div class="row">
					<div class="col-md-8 margin-bottom-15">
                  
                    <?php echo form_label('First Name','firstname');
						  echo form_input('firstname',set_value('firstname'),'class="form-control"');
						  echo "<span style='color:#F00;'>".form_error('firstname')."</span>";	  
					?>                
                    <?php echo form_label('Last Name','lastname') ;
						  echo form_input('lastname',set_value('lastname'),'class="form-control"');
						  echo "<span style='color:#F00;'>".form_error('lastname')."</span>";	  
				    ?>                
                    
                    <?php echo form_label('Email','email');
						  echo form_input('email',set_value('email'),'class="form-control"');
						  echo "<span style='color:#F00;'>".form_error('email')."</span>";	  
				    ?> 
                    
                    
                    <?php echo form_label('Password','password'); 
						  echo form_password('password','','class="form-control"');
						  echo "<span style='color:#F00;'>".form_error('password')."</span>";	  
					?>
                     
                    <?php echo form_label('Confirm Password','password'); 
				  	    echo form_password('cnfpassword','','class="form-control"');
						echo "<span style='color:#F00;'>".form_error('cnfpassword')."</span>";
				    ?> 
                 
                    <?php echo form_label('Mobile No.','mobile'); 
						  echo form_input('mobile',set_value('mobile'),'class="form-control"');
						  echo "<span style='color:#F00;'>".form_error('mobile')."</span>";	  
				    ?>   
					<br />
                			
                 <button type="submit" name="btnadd" class="btn btn-primary">Add</button>
                  <button type="reset" class="btn btn-default">Reset</button>  
                  
                  </div>
                </div>
                <br />
  
            </form>
          </div>
	  </div>
  </div>
