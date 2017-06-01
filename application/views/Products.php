<?php $currentPage = 'products';
include('Header.php');?>

	
<!--content-->
<!---->

		<div class="product">
			<div class="container">
				<h3>Choose Your today's Menu!</h3>
				
				<div class="col-md-9 product1">
				<?php foreach ($barang as $brg) {?>
					
					<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="<?php echo site_url("index.php/Mycontroller/article/" . $brg['kode_barang']);?>"><img class="img-responsive" src="<?php echo base_url().$brg['image']; ?>" alt="">
						</a>	
						</div>
						<p class="tun"><?php echo $brg['nama_barang'];?></p>
						<a href="<?php echo base_url();?>index.php/Shoppingcart/buy/<?php echo $brg['kode_barang'];?>" class="item_add"><p class="number item_price"><i> </i>Rp <?php echo $brg['harga'];?></p></a>						
					</div>
				<?php }?>
				
					
		
					
					
				
				</div>
		<div class="clearfix"> </div>

		</div>
		
		</div>
			
				<!---->

<!--//content-->
</div>
</div></div>
