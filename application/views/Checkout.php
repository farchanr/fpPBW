<?php $currentPage = 'pesan';
include('Header.php');?>

	
<div class="container">
	<div class="check">	 
			 <h1>Belanjaan</h1>
		 <div class="col-md-9 cart-items">
			
		


<?php $i = 1; ?>

<?php if($this->cart->contents()==FALSE){
	?><div class="cart-header2">
				 
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/pic2.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Anda Tidak Memiliki Makanan</a></h3>
					
					   </div>
					   <div class="clearfix"></div>
											
				
			  </div><?php
	}else{

		 ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
        			 <div class="cart-header2">
				 <div class="close<?php echo $i?>" onclick=window.location.href="<?php echo base_url().'index.php/ShoppingCart/delete/'.$items['rowid']?>";> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/pic2.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo $items['name']; ?></a></h3>
						<ul class="qty">
							
							<li><p>Qty : <?php echo $items['qty'];?></p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : Rp <?php echo $items['price'];?></p>
							 
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>
        

<?php $i++; ?>

<?php endforeach; ?>


<?php form_close();}?>

			   </div>
			
	

			

		 </div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="<?php echo base_url();?>index.php/MyController/products">Continue Shopping</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1"><?php echo "Rp " . $this->cart->total(); ?></span>
				 <span>Items</span>
				 <span class="total1"></span>
				 
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span><?php echo "Rp " . $this->cart->total(); ?></span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="<?php echo base_url();?>index.php/MyController/formBeli">Place Order</a>
			 
			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


