 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              
		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Masukkan Menu</h2>
 		<form method="POST" action="<?php echo base_url()."index.php/Crud/create"; ?> " enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input type="text" class="form-control" name="kode_barang" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Komposisi</label>
    <input type="text" class="form-control" name="komposisi" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="harga" >
  </div>
     <input type="hidden" name="size" value="100000">
			<div>
				<label>Upload Gambar</label>
				<input type="file" name="image">
			</div>
  
  <input type = "submit" class = "btn btn-default" name = "btnSubmit" value="submit" />
</form>
</div>



 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		
		
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>