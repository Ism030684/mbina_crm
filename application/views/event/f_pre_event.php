<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<?php echo $this->load->view('include/meta');?>
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

<body class="sidebar-fixed topnav-fixed bootstrap-elements">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<!-- TOP BAR -->
			<?php echo $this->load->view('include/top_bar');?>
		
		<!-- END TOP BAR -->
		<!-- LEFT SIDEBAR -->
			<?php echo $this->load->view('include/left_sidebar');?>
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
	
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Event</a></li>
						<li class="active">Pre Event</li>
					</ul>
				</div>
				
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Pre Event</h2>
					
				</div>
				<div class="main-content">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC INPUT -->
							<div class="widget">
								<!-- <div class="widget-header">
									<h3><i class="fa fa-edit"></i> Basic Input</h3></div>-->
								<div class="widget-content">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-md-2 control-label">Dealer Area</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Item</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Dealer</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										
											<div class="form-group">
											<label class="col-md-2 control-label">Activity</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Description</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Location</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Detail Location</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">City</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Year</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Month</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Date</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Display1</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										
											<div class="form-group">
											<label class="col-md-2 control-label">Display 2</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Display 3</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Display 4</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Budget</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
											<label class="col-md-1 control-label">Submission Date</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="">
											</div>
										
										</div>
										
										<button type="submit" class="btn btn-info btn-sm">Save</button>
									 		<button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
									
									</div>
								</div>
							</div>
							<!-- END BASIC INPUT -->
					
						</div>
				
					</div>
				
				</div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
		<?php echo $this->load->view('include/footer');?>
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
</body>

</html>
