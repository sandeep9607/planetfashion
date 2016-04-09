<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
function hideURLbar()
{ 
	window.scrollTo(0,1); 
} 
</script>
<link rel="icon" href="<?php echo base_url()?>images/fevicon.png" type="image/x-icon">
<link href="<?php echo base_url()?>css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="<?php echo base_url()?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo base_url()?>css/style.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="<?php echo base_url()?>js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<link rel="stylesheet" href="<?php echo base_url()?>css/etalage.css">
<script src="<?php echo base_url()?>js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script type="text/javascript" src="<?php echo base_url()?>js/hover_pack.js"></script>
<script src="<?php echo base_url()?>js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	
</head>
<body>
<div class="header">
	<div class="header_top">
   
		<div class="container">
			<div class="logo">
				<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>images/logo.png" height="75px" alt=""/></a>
			</div>           
			<ul class="shopping_grid">
				    <?php if($this->session->userdata('is_logged_in'))
					{
					 echo "<li>".anchor('account/',$this->session->userdata('username'))."</li>";
					 echo anchor('users/logout','<li>Logout</li>');
					 }
					else{?>	
        		   <?php
				   echo anchor('users/register','<li>Join</li>');
				   echo anchor('users','<li>Sign In</li>');
					}?>
			        <a href="<?php echo site_url()?>/cart"><li><span class="m_1">Shopping Bag</span>&nbsp;&nbsp;(<?php 
					echo ($this->session->userdata('item')) ? $this->session->userdata('item') : '0';?>) &nbsp;<img src="<?php echo base_url()?>images/bag.png" alt=""/></li></a>
			      <div class="clearfix"> </div>
			</ul>
		    <div class="clearfix"> </div>
		</div>
	</div>
     