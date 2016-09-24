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

<body class="sidebar-fixed topnav-fixed dashboard2">
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
					<h2>Cost Per Leads</h2>
					<em>dashboard alternative</em>
				</div>
				<div class="main-content">
					<div class="widget widget-hide-header">
						<div class="widget-header hide">
							<h3>Main Dashboard Info</h3>
						</div>
						<div class="widget-content">
							<!-- NUMBER-CHART STAT -->
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<div class="number-chart">
										<div class="number pull-left"><span>$22,500</span> <span>EARNINGS</span></div>
										<div class="mini-stat">
											<div id="number-chart1" class="inlinesparkline">Loading...</div>
											<p class="text-muted"><i class="fa fa-caret-up green-font"></i> 19% higher than last week</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="number-chart">
										<div class="number pull-left"><span>245</span> <span>SALES</span></div>
										<div class="mini-stat">
											<div id="number-chart2" class="inlinesparkline">Loading...</div>
											<p class="text-muted"><i class="fa fa-caret-up green-font"></i> 24% higher than last week</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="number-chart">
										<div class="number pull-left"><span>561,724</span> <span>VISITS</span></div>
										<div class="mini-stat">
											<div id="number-chart3" class="inlinesparkline">Loading...</div>
											<p class="text-muted"><i class="fa fa-caret-up green-font"></i> 44% higher than last week</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="number-chart">
										<div class="number pull-left"><span>372,500</span> <span>LIKES</span></div>
										<div class="mini-stat">
											<div id="number-chart4" class="inlinesparkline">Loading...</div>
											<p class="text-muted"><i class="fa fa-caret-down red-font"></i> 6% lower than last week</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END NUMBER-CHART STAT -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<!-- WIDGET VISIT AND SALES CHART -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-bar-chart-o"></i> Weekly Sales Stat</h3> <em>- Visits and Sales</em>
									<button type="button" class="btn btn-link btn-help"><i class="fa fa-question-circle"></i></button>
									<div class="btn-group widget-header-toolbar">
										<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
										<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
										<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="widget-content">
									<div class="demo-flot-chart sales-chart"></div>
								</div>
							</div>
							<!-- END WIDGET VISIT AND SALES CHART -->
						</div>
						<div class="col-md-6">
							<!-- SALES INFO SUMMARY -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-bar-chart-o"></i> Sales Stat Summary</h3>
									<div class="btn-group widget-header-toolbar">
										<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
										<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
										<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="widget-content">
									<div class="table-responsive">
										<table class="table table-bordered bottom-30px">
											<thead>
												<tr>
													<th>&nbsp;</th>
													<th>Today</th>
													<th>Current Week</th>
													<th>Current Month</th>
													<th>Lifetime</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Earnings</td>
													<td>$270</td>
													<td>$653</td>
													<td>$2,845</td>
													<td>$30,281</td>
												</tr>
												<tr>
													<td>Sales</td>
													<td>35</td>
													<td>126</td>
													<td>226</td>
													<td>4531</td>
												</tr>
											</tbody>
										</table>
									</div>
									<h4>Recent Purchases</h4>
									<div class="table-responsive">
										<table class="table table-condensed">
											<thead>
												<tr>
													<th>Order No.</th>
													<th>Name</th>
													<th>Amount</th>
													<th>Date &amp; time</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="#">ORD201502004</a></td>
													<td>Steve</td>
													<td>$122</td>
													<td>04/03/2015 17:23</td>
													<td><span class="label label-success">COMPLETED</span></td>
												</tr>
												<tr>
													<td><a href="#">ORD201501098</a></td>
													<td>Mandy</td>
													<td>$73</td>
													<td>04/03/2015 16:14</td>
													<td><span class="label label-success">COMPLETED</span></td>
												</tr>
												<tr>
													<td><a href="#">ORD201501095</a></td>
													<td>Bruce</td>
													<td>$43</td>
													<td>04/03/2015 16:08</td>
													<td><span class="label label-warning">PENDING</span></td>
												</tr>
												<tr>
													<td><a href="#">ORD201502095</a></td>
													<td>Albert</td>
													<td>$100</td>
													<td>04/03/2015 15:58</td>
													<td><span class="label label-danger">FAILED</span></td>
												</tr>
											</tbody>
										</table>
									</div>
									<a href="#" class="btn btn-default btn-sm"><i class="fa fa-shopping-cart"></i> View all purchases</a>
								</div>
							</div>
							<!-- END SALES INFO SUMMARY -->
						</div>
					</div>
			
				</div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
			<footer class="footer">
				&copy; 2016 The Develovers
			</footer>
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
	<script src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-chart-stat.js"></script>
</body>

</html>
