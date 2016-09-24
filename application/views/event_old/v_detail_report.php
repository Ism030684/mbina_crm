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

<body class="sidebar-fixed topnav-fixed general-ui-elements">
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
						<li><a href="#">Event</a></li>
						<li class="active">Report</li>
					</ul>
				</div>
	
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Report</h2>
					<em>Report progress your event</em>
				</div>
				<div class="main-content">

					<!-- ACCORDION -->
					<div class="widget">
						<div class="widget-header">
							<h3>Report Detail</h3>
						</div>
						<div class="widget-content">
							<div class="row">
								<div class="col-md-10">
									<div class="panel-group" id="accordion">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Ordering Vehicle<i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in">
												<div class="panel-body">
											<!-- content -->
														<!-- BASIC TABLE -->
							<div class="widget widget-table">
							
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Model</th>
												<th>CBU/CKD</th>
												<th>Price</th>
												<th>Qty</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="5">A Class</td>
												
											</tr>
											<tr>
												<td>1</td>
												<td>A 200 AMG FL</td>
												<td>CBU</td>
												<td>Rp.589.000.000</td>
												<td><input type="text" name="qty"></td>
											</tr>
											<tr>
												<td>2</td>
												<td>A 250 AMG FL</td>
												<td>CBU</td>
												<td>Rp.699.000.000</td>
												<td><input type="text" name="qty"></td>
											</tr>
											<tr>
												<td>3</td>
												<td>MERCEDES AMG A 45 FL</td>
												<td>CBU</td>
												<td>Rp.1.169.000.000</td>
												<td><input type="text" name="qty"></td>
											</tr>
											<tr>
												<td colspan="5">B Class</td>
											</tr>
											<tr>
												<td>4</td>
												<td>B 200 Urban FL</td>
												<td>CBU</td>
												<td>Rp.569.000.000</td>
												<td><input type="text" name="qty"></td>
											</tr>
											<tr>
												<td colspan="5">Cla</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Cla 200 FL</td>
												<td>CBU</td>
												<td>Rp.669.000.000</td>
												<td><input type="text" name="qty"></td>
											</tr>
										</tbody>
									</table>
							
							<!-- END BASIC TABLE -->
												
											<!-- end  -->	
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Sales <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
														<!-- BASIC TABLE -->
							<div class="widget widget-table">
							
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Sales Name</th>
												<th>Dealer Name</th>
												<th>SPK Number</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td><input type="text" name="qty"></td>
												<td>Adedanmas</td>
												<td><input type="text" name="qty"></td>
											</tr>
											<tr>
												<td>2</td>
												<td><input type="text" name="qty"></td>
												<td>Adedanmas</td>
												<td><input type="text" name="qty"></td>
											</tr>
											<tr>
												<td>3</td>
												<td><input type="text" name="qty"></td>
												<td>Adedanmas</td>
												<td><input type="text" name="qty"></td>
											</tr>
										</tbody>
									</table>
							
							<!-- END BASIC TABLE -->
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Document <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">

											<div class="form-group">
												<label for="ticket-attachment" class="col-sm-3 control-label">Attach File</label>
												<div class="col-md-9">
													<input type="file" id="ticket-attachment">
													<p class="help-block"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
												</div>
											</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- END ACCORDION -->
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
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-elements.js"></script>
</body>

</html>
