<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
				<?php echo $this->load->view('include/meta')?>

	<!-- CSS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url();?>assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed dashboard4">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
	<?php echo $this->load->view('include/top_bar');?>
		<?php echo $this->load->view('include/left_sidebar');?>
	
	
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
	
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li class="active">Dashboard</li>
					</ul>
				</div>
				
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Leads By dealer</h2>
					<em>chart leads by dealer</em>
				</div>
				<div class="main-content">
					
					<div class="row bottom-60px">
						<div class="col-md-8">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Dealer</th>
										<th>Customer</th>
										<th>Product</th>
										<th>Status</th>
										<th>Salesman</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#">1</a></td>
										<td>AdedanMas</td>
										<td>Liberty Saputra</td>
										<td><span class="inv-red">A Class</span></td>
										<td><span class="inv-green">open</span></td>
										<td><span class="inv-green">Yudha S</span></td>
									</tr>
									<tr>
										<td><a href="#">2</a></td>
										<td>Mercindo</td>
										<td>M Ridwan</td>
										<td><span class="inv-red">C Class</span></td>
										<td><span class="inv-green">open</span></td>
										<td><span class="inv-green">Shinta Dwi</span></td>
									</tr>
									<tr>
										<td><a href="#">3</a></td>
										<td>Promotor Serpong</td>
										<td>M Zainal</td>
										<td><span class="inv-red">Ex Class</span></td>
										<td><span class="inv-green">Cancel</span></td>
										<td><span class="inv-green">Keke</span></td>
									</tr>
									
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<div id="investment-donut-chart"></div>
						</div>
					</div>
					
		
				</div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
			<?php echo $this->load->view('include/footer')?>
			<!-- END FOOTER -->
		</div>
		<!-- END CONTENT WRAPPER -->
	</div>
	<!-- END WRAPPER -->
	
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-chart-stat.js"></script>
</body>

</html>
