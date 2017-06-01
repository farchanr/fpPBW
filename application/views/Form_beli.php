<?php $currentPage = 'pesan';
include('Header.php');?>

	
<!--content-->
<div class="contact">
			
			<div class="container">
				<h1>Form Pemesanan</h1>
			<div class="contact-form">

			 <div class="col-md-3 cart-total">
			 
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
			 
			 
			</div>
				
				<div class="col-md-8 contact-grid">
					<form method="POST" action="<?php echo base_url().'index.php/Shoppingcart/insert_cart'?>">	
						<input type="text" name="nama" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="text" name="email" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" name="address" value="Address" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						<h5> Pesanan Anda</h5>
						<?php $i = 1; ?>
						<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
        			 <div class="cart-header2">
				
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/pic2.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo $items['name']; ?></a></h3>
						<ul class="qty">
							
							<li><p>Qty : <?php echo $items['qty'];?></p></li>
						</ul>
							 
							 
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			  </div>
        

<?php $i++; ?>

<?php endforeach; ?>
						
						<div class="send">
							<input type="submit" value="Submit">
						</div>
					</form>
			
				<div class="clearfix"> </div>
			</div>
			
		</div>
		
	</div>
