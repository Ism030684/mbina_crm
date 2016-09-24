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

<body class="sidebar-fixed topnav-fixed form-val">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
	<?php echo $this->load->view('include/top_bar');?>
		<?php echo $this->load->view('include/left_sidebar');?>
	
	

		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
			<!-- top general alert -->
		
			<!-- end top general alert -->
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Newsletter and SMS</a></li>
						<li class="active">SMS</li>
					</ul>
				</div>
		
			</div>
			<!-- main -->
			<div class="content">
			
				<div class="main-content">
					<div class="row">
						<div class="col-md-6">
							<!-- BASIC VALIDATION -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-check"></i> Form SMS</h3></div>
								<div class="widget-content">
									<form  id="basic-form" name="basic-form"  action="<?php echo base_url('newsletter/send_sms');?>" method="post">
										
										<div class="form-group">
											<label>Phone Number</label>
											<input type="text" class="form-control" name="no_hp" required>
										</div>
										<div class="form-group">
											<label>Message</label>
											<textarea class="form-control" rows="5" name="pesan" cols="30" required></textarea>
										</div>
									
										<div class="form-group">
											<label for="multiselect1">Group</label>
											<br/>
											<select id="multiselect1" name="multiselect1[]" class="multiselect-validation" data-parsley-error-container="#multiselect-error" multiple="multiple" required>
												<option value="cheese">Salesman</option>
												<option value="tomatoes">Manager</option>
												<option value="mozarella">Customer</option>
												
											</select>
											<span id="multiselect-error"></span>
										</div>
										<br/>
										<button type="submit" class="btn btn-primary">Send</button>
									</form>
								</div>
							</div>
							<!-- END BASIC VALIDATION -->
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
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/parsley-validation/parsley.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-elements.js"></script>
</body>

</html>
