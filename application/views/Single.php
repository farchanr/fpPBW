<?php $currentPage = 'products';
include('Header.php');?>
		<div class="product">
			<div class="container">
				
					  
				
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	
				

				
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
			<div class="flexslider">
  <img src="<?php echo base_url() . $image; ?>" />
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">

						<form>
						<h4><?php echo $nama_barang; ?></h4>
							
							
						
							<p><?php echo $komposisi; ?></p>
							
							<ul class="tag-men">
								<li><span>Harga</span>
								<span class="women1">: Rp <?php echo $harga;?></span></li>
							
							</ul>
								<a href="<?php echo base_url();?>index.php/Shoppingcart/buy/<?php echo $barang['nama_barang'];?>" class="add-cart item_add">ADD TO CART</a>
						</form>
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
			
		
</div>

		<div class="clearfix"> </div>
		</div>
		</div>
<!--//content-->
