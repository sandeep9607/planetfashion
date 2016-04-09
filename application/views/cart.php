<style>
.h31{
	background-color:#ccc;
	color:#333;
	width:100%;
	padding:5px 5px;
}
.h41{
	background-color:#ccc;
	color:#333;
	width:100%;
	text-align:right;
	padding:5px 9px;
	
}
</style>
<div class="main">
	<div class="content_top">
		<div class="container"> 
			<div class="row">
       <?php
			//Check cart have value or not
			if(!empty($this->cart->contents())){ ?>
				<form action="<?php echo site_url('cart/update_cart'); ?>" method="post" accept-charset="utf-8"
				 onsubmit="return (validate());">	
<div class="table-responsive" style="padding:0px 16px;">
                      
                <br />	
               <table class="table table-striped table-bordered">
		<thead>
			<tr>
            
				<th >Item</th>
				<th style="text-align:right;">Quantity</th>
                <th style="text-align:right;" >Price</th>
                <th style="text-align:right;">Total</th>
			</tr>
		</thead>
<?php $i = 1;$total=0; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

<tr>
        
        	<td><img src="<?php echo base_url()?>images/product/<?php echo $items['image']; ?>" width="60" />
				
				<?php echo $items['name']; ?></td>
                <td style="text-align:right;"><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'],'maxlength' => '3', 'size' => '3')); ?>
                <a  href="<?php echo site_url()?>/cart/remove/<?php echo $items['rowid']; ?>" >Remove</a></td>
                <td style="text-align:right;"><?php echo $items['price']; ?></td>
                <td style="text-align:right;"><?php echo $items['qty'] * $items['price'];; ?></td>
                
          <?php  $total=$total + ($items['qty'] * $items['price']);

$i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="3" style="text-align:right;">Payable Amount</td>
            <td style="text-align:right;"><?php echo "Rs.".$total.".00"; ?></td>
		
 
</tr>

</table>

 <a href="<?php echo site_url()?>/checkout" style="color:#FFF;background-color:#F90;float:right;" class="btn backtocart" >Proceed to Checkout >></a>
         <?php /*?><a href="<?php echo site_url()?>/checkout" style="background-color:#000;color:#fff;" class=" btn btn-default backtocart" >Update</a><?php */?>
         <input type="submit" value="Update Cart" style="background-color:#000;color:#fff;" class=" btn btn-default backtocart"  />
         <!-- Aj Developer--------------- 	-->
          <a href="<?php echo site_url()?>/page" class=" btn btn-default backtocart" >Continue Shopping</a><br /><br />
          
<?php		echo form_close();
}
 else {
				  echo "<center>Your Cart is empty !!!<br><br>"; ?>
				 <a href="<?php echo site_url()?>/page" class=" btn btn-default" >Continue Shopping >></a>
<?php
}?>
<script>
				function validate()
				{
					
					for(j=1;j<=<?php echo $i;?>;j++)
					{	
						data=document.getElementById('qty'+j).value;
						data = parseInt(data) ;
						if(data < 1 )
						{
							alert("Qunatity must be greater than 0");
							return false;
							
						}
					}
					return true;
				}
				</script>
</p>

          </div>
      </div> 
	</div>
</div>
