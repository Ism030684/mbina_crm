<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<?php echo $this->load->view('include/meta');?>
	<!-- CSS -->
	<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url()?>assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="<?php echo base_url()?>assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed forms-elements">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<!-- TOP BAR -->
		<?php echo $this->load->view('include/top_bar')?>
		<!-- END TOP BAR -->
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
						<li class="active">Group Dealer</li>
					</ul>
				</div>
		
			</div>
			<!-- main -->
			<div class="content">
				<!-- <div class="main-header">
					<h2>Form Elements</h2>
					<em>a collection of form elements</em>
				</div>-->
				
				<div class="main-content">
					<div class="row">
						<div class="col-md-6">
					<?php echo ($dealer_name);?>
							<!-- SELECT2 -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> Manager  </h3> 
								</div>
								<div class="widget-content">
								
									
									<select multiple name="select2-multiple1" id="select2-multiple1" class="select2 select2-multiple">
										<!-- <optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="WA" selected="selected">Washington</option>
											
										</optgroup>-->
										<?php 
										foreach ($users_manager as $row)
										{
										?>
											<option value="<?php echo $row->id_users;?>"><?php echo $row->name;?></option>
										<?php 
										}
										?>	
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
							
							
							<!-- Supervisor -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> SUPERVISOR  </h3> 
								</div>
								<div class="widget-content">
								
									
									<select multiple name="select2-multiple1" id="select2-multiple1" class="select2 select2-multiple">
										<!-- <optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="WA" selected="selected">Washington</option>
											
										</optgroup>-->
										<?php 
										foreach ($users_supervisor as $row)
										{
										?>
											<option value="<?php echo $row->id_users;?>"><?php echo $row->name;?></option>
										<?php 
										}
										?>	
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
							
									<!-- salesman -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i>SALESMAN</h3> 
								</div>
								<div class="widget-content">
								
									
									<select multiple name="select2-multiple1" id="select2-multiple1" class="select2 select2-multiple">
										<!-- <optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="WA" selected="selected">Washington</option>
											
										</optgroup>-->
										<?php 
										foreach ($users_salesman as $row)
										{
										?>
											<option value="<?php echo $row->id_users;?>"><?php echo $row->name;?></option>
										<?php 
										}
										?>	
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
							<button type="submit" class="btn btn-info btn-sm">Save</button>
									 <button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
						</div>
					
						</div>
					</div>
					<!-- /row -->
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
	<!-- <script src="demo-style-switcher/assets/js/deliswitch.js"></script>-->
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
</body>

</html>
