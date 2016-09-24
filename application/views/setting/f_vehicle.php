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

<!-- <body class="sidebar-fixed topnav-fixed form-layouts">-->
<body class="sidebar-fixed topnav-fixed forms-elements">

	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<?php echo $this->load->view('include/top_bar');?>
		<!-- LEFT SIDEBAR -->
<?php echo $this->load->view('include/left_sidebar')?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">

			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Setting</a></li>
						<li class="active">Vehicle</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
			
				<div class="main-content">
					<div class="row">
						<div class="col-md-6">
							<!-- SUPPOR TICKET FORM -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> Vehicle </h3></div>
								<div class="widget-content">
									<form method="post" action="<?php echo base_url('setting/add_process_vehicle');?>" enctype="multipart/form-data" class="form-horizontal" role="form">
										
										<fieldset>
											<!-- <legend>Information</legend>-->
												<div class="form-group">
												<label for="ticket-subject" class="col-sm-3 control-label">Vehicle ID</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="vehicle_id" id="ticket-subject" value="<?php echo random_string('numeric',8);?>" >
												</div>
											</div>
											
											<div class="form-group">
												<label for="ticket-subject" class="col-sm-3 control-label">Vehicle Type</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="vehicle_type" id="ticket-subject" placeholder="">
												</div>
											</div>
												<div class="form-group">
												<label for="ticket-subject" class="col-sm-3 control-label">Price</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="price" id="ticket-subject" placeholder="">
												</div>
											</div>
									
										
											<div class="form-group">
												<label for="ticket-subject" class="col-sm-3 control-label">Year</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" name="year" id="year" placeholder="">
												</div>
											</div>
											<div class="form-group">
														<label for="ticket-type" class="col-sm-3 control-label">Available Colour</label>
												<div class="col-sm-9">
													<select id="multiselect2" name="vehicle_colour[]" class="multiselect" multiple="multiple">
										
														<?php 
														$query = $this->db->get('t_set_vehicle_colour');
														foreach ($query->result() as $row)
														{
														?>
														<option value="<?php echo $row->colour_id;?>"><?php echo $row->colour_name;?></option>
														<?php 
														}
														?>
													</select>
												</div>
											</div>
											
										
									
											<div class="form-group">
												<label for="ticket-attachment" class="col-sm-3 control-label">Image </label>
												<div class="col-md-9">
													<input type="file" id="ticket-attachment" name="file2">
													<p class="help-block"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
												</div>
											</div>
													<div class="form-group">
														<label for="ticket-type" class="col-sm-3 control-label">Brochure</label>
												<div class="col-sm-9">
													<select id="multiselect2" name="brochure" class="select-ticket-type">
													
												<?php 
												$query = $this->db->get('t_set_brochure');
											
												foreach ($query->result() as $row)
												{
												?>
													<option value="<?php echo $row->file;?>"><?php echo $row->file;?></option>
												<?php 
												}
												?>
										
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-offset-3 col-sm-9">
													<button type="submit" class="btn btn-primary btn-block">Submit Vehicle</button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<!-- END SUPPORT TICKET FORM -->
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
<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-maskedinput/jquery.masked-input.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jqallrangesliders/jQAllRangeSliders-min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-slider/bootstrap-slider.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-elements.js"></script>
	
	
		
	<!-- Javascript -->

	
</body>

</html>
