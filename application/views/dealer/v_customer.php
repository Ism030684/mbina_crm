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

<body class="sidebar-fixed topnav-fixed ">
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
						<li><a href="#">Dealer</a></li>
						<li class="active">Customer Data</li>
					</ul>
				</div>
		
			</div>
			<!-- main -->
			<div class="content">
		
				<div class="main-content">
					<!-- CUSTOM LEFT -->
					<div class="widget">
						<div class="widget-header">
							<h3>Customer Data</h3>
						</div>
						<div class="widget-content">
							<div class="custom-tabs-left">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#step1" data-toggle="tab"><i class="fa fa-plus-square"></i> Microsite</a></li>
									<li><a href="#step2" data-toggle="tab"><i class="fa fa-cloud-upload"></i> Event</a></li>
									<li><a href="#step3" data-toggle="tab"><i class="fa fa-check-circle"></i> Mobile Apps</a></li>
								</ul>
								<div class="tab-content clearfix">
									<div class="tab-pane fade in active" id="step1">
									<!--	<h5>Tab Step 1</h5>-->
										<p>
											<!-- FEATURED DATA TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-table"></i> Tab 1</h3> <em> - <a href="http://datatables.net/" target="_blank">jQuery Data Table</a> with sorting feature, live search and pagination</em></div>
						<div class="widget-content">
							<table id="featured-datatable" class="table table-sorting table-striped table-hover datatable">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Message</th>
										<th>Date</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>John Doe</td>
										<td>johndoe@gmail.com</td>
										<td>081728282</td>
										<td>Need Car A class Please contact me..</td>
										<td>12/08/2016</td>
									</tr>
									<tr>
										<td>Ahmad Hilmy</td>
										<td>Achmad.Hilmy@gmail.com</td>
										<td>081723444</td>
										<td>Brochure Price List..</td>
										<td>01/08/2016</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END FEATURED DATA TABLE -->
										</p>
									</div>
									<div class="tab-pane fade" id="step2">
										<!-- <h5>Tab Step 2</h5>-->
										<p>
					
					<!-- FEATURED DATA TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-table"></i> Tab 2</h3> <em> - <a href="http://datatables.net/" target="_blank">jQuery Data Table</a> with sorting feature, live search and pagination</em></div>
						<div class="widget-content">
							<table id="featured-datatable" class="table table-sorting table-striped table-hover datatable">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Event Name</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Agus F</td>
										<td>Agus@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Yudi Kurniawan</td>
										<td>Yudi@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Ismail</td>
										<td>ismail@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Agung </td>
										<td>agung@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Retno</td>
										<td>retno@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Gadis Purwati</td>
										<td>gadis@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Gadis Purwati</td>
										<td>gadis@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Gadis Purwati</td>
										<td>gadis@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Gadis Purwati</td>
										<td>gadis@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									<tr>
										<td>Gadis Purwati</td>
										<td>gadis@gmail.com</td>
										<td>081728282</td>
										<td>GIIAS 2016</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END FEATURED DATA TABLE -->										
										
										</p>
									</div>
									<div class="tab-pane fade" id="step3">
										<h5>Tab Step 3</h5>
										<p>Competently implement bricks-and-clicks collaboration and idea-sharing rather than visionary internal or "organic" sources. Rapidiously matrix premium core competencies for.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END CUSTOM LEFT -->
				</div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
	<?php echo $this->load->view('include/footer');?>
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
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/datatable/exts/dataTables.colReorder.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/datatable/exts/dataTables.tableTools.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jqgrid/jquery.jqGrid.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jqgrid/i18n/grid.locale-en.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jqgrid/jquery.jqGrid.fluid.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-table.js"></script>
	
</body>

</html>
