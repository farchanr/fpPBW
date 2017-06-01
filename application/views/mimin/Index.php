<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             
		

<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Statistics</h3>
	<div class="toolbar">
		<div class="pull-left">
			<div class="btn-group">
			
				<a href="#" class="btn btn-default btn-xs">Daily</a>
				<a href="#" class="btn btn-default btn-xs active">Monthly</a>
				<a href="#" class="btn btn-default btn-xs">Yearly</a>
			</div>
		</div>
		
	</div>
</header>
<div class="agileits-box-body clearfix">
<div id="hero-area"></div>
</div>
</div>
</div>
	<!--//agileinfo-grap-->
<!--photoday-section-->	
			
                        
                    	<div class="col-sm-4 wthree-crd">
                            <div class="card">
                                <div class="card-body">
                                    <div class="widget widget-report-table">
                                        
                                        
                                        <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                            <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                                                <h3>August 2016</h3>
                                                <p>REPORT</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                <h2 class="text-right c-teal f-300 m-t-20">$21,235</h2>
                                            </div>
                                        </div>
                                        
                                        <div class="widget-body p-15">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2356</td>
                                                        <td>dummy text </td>
                                                        <td>6,200.00</td>
                                                    </tr>
                                                 
                                                </tbody>
                                            </table>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      
                    	
						<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	<div class="w3-agileits-pane">
		
		
			<div class="stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>PRODUCT</th>
									<th>JUMLAH</th>
									<th>PROGRESS</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($data as $brg) {?>
								<tr>
									
									<td><?= $brg['kode_barang'] ?></td>
									<td><?= $brg['nama_barang'] ?></td>
									<td><?= $brg['jumlah'] ?></td>
									<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
								</tr>
							<?php }?>
							</tbody>
						</table>
					</div>
			
		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->	
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
	 <p>© 2016 Pooled. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				
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
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>