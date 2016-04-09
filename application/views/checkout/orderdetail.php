        <link rel="stylesheet"  type="text/css" href="http://designhuntr.com/wp-content/themes/DesignHuntR/demoStyle.css" />
        <link rel="stylesheet"  type="text/css" href="<?php echo base_url()?>css/style.css" />
        
	<script src="<?php echo base_url()?>js/jquery-1.9.1.js"></script>

 <div class="main">
	<div class="content_top">
		<section id="main">
		<div class="login-content">
		<div class="container" style="min-height:300px;">
			<div class="login-signup-form" >
			<div class="panel panel-default">
				<div class="row" >
				<?php $form = array('id'=>'checkoutForm','name'=>'orderForm');
					echo form_open('checkout/confirmorder',$form);?>
					<div class="col-md-12" style="width:100%">
					<table class="table" style="text-align:right; border:1px #CCCCCC solid;">
					<thead>
						<tr >
							<th style="text-align:left;padding-left:25px;">Product Name</th>	
							<th style="text-align:right;">Quantity</th>						
							<th style="text-align:right;">Price</th>
							
							<th style="text-align:right;padding-right:25px;">Total</th>
					</tr>
					</thead>
					
				<?php $i = 1;$total=0; 

 foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>


		
<tr>
        
        		<td style="text-align:left;padding-left:25px;"><?php echo $items['name']; ?></td>
                <td style="text-align:right;"><?php echo $items['qty']; ?></td>
                <td style="text-align:right;padding-right:25px;"><?php echo $items['price']; ?></td>
                <td style="text-align:right;padding-right:25px;"><?php echo $items['qty'] * $items['price'];; ?></td>
                
          <?php  $total=$total + ($items['qty'] * $items['price']); ?>
		  
			<input type="hidden" name="total" value="<?php echo $total ?>"  />
<?php $i++; ?>

<?php endforeach; ?>


        <tr>
         <td colspan="3" style="text-align:right;"><strong>Payable Amount</strong></td>
            <td style="text-align:right;padding-right:25px;"><strong><?php echo "Rs.".$total.".00"; ?>	
            </strong></td>
		 </tr>
 </table>
					
					</div>
					<div class="col-md-4" >
						<h4 style="margin-left:25px;">Billing Address</h4>
                        	<hr>				
							<div style="padding-left:25px;">
                            <label>Address<?php echo nbs(3)?>:</label>&nbsp;<?php echo $result['bill_address1'] ?>,<br />
                            <?php echo nbs(22)?><?php echo $result['bill_address2'] ?>,<br />
                            <label>City<?php echo nbs(11)?>:</label>&nbsp;<?php echo $result['bill_city'] ?>,<br />
                            <label>Postcode&nbsp;:</label>&nbsp;<?php echo $result['bill_zip'] ?>,<br />
                            </div>
									
					</div>
					<div class="col-md-4">
						<h4 >Shipping Address</h4>
                        <hr>				
						<div style="padding-left:10px;">
         <label>Address<?php echo nbs(3); ?>:</label>&nbsp;<?php echo $result['ship_address1']; ?>,<br />
                            <?php echo nbs(20) ?><?php echo $result['ship_address2']; ?>,<br />
                            <label>City<?php echo nbs(11)?>:</label>&nbsp;<?php echo $result['ship_city']; ?><br />
                            <label>Postcode&nbsp;:</label>&nbsp;<?php echo $result['ship_zip'] ?>
                            </div>
					</div>
                    <div class="col-md-4" >
                    <a href="<?php echo site_url()?>/checkout" class=" btn btn-default backtocart" style="float:left;margin:90px 0px 0px 80px;" >
          Back to Shopping</a>
             
                      <input type="submit" value="Submit Order" style="color:#FFF;background-color:#F00;float:left;margin:89px 0px 0px 10px;" id="popup_window" data-popup-target="#example-popup" class="btn backtocart" />
       <!-- <button id="popup_window" data-popup-target="#example-popup">Open The Light Weight Popup Modal</button><?php echo form_close();?>
          -->			
				</div>	
			</div>
		</div>
		</div>
		</div>
		</section>	
        
        </div>
        <div>

<div id="example-popup" class="popup">
    <div class="popup-body">	<span class="popup-exit"></span>

        <div class="popup-content">
            	<h2 class="popup-title">Order Submitted Sucessfully !!!</h2>

            <p> Your ordered detail send to your email.  Praesent cursus turpis magna, quis pulvinar est vehicula</p>
        </div>
    </div>
</div>	
        
        <script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
jQuery(document).ready(function ($) {

    $('[data-popup-target]').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');

    });

    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });

    $('.popup-exit').click(function () {
        clearPopup();

    });

    $('.popup-overlay').click(function () {
        clearPopup();
    });

    function clearPopup() {
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }

});
});//]]>  

</script>
