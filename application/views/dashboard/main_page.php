<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | KingAdmin - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=base_url()?>assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="<?=base_url()?>assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed dashboard">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<!-- TOP BAR -->
		<?=$this->load->view('include/top_bar')?>
		<!-- END TOP BAR -->
		<!-- LEFT SIDEBAR -->
		<?=$this->load->view('include/left_sidebar')?>

		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
			<!-- top general alert -->
			<div class="alert alert-danger top-general-alert">
				<span>If you <strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
				<button type="button" class="close">&times;</button>
			</div>
			<!-- end top general alert -->
			<div class="row">
				<div class="col-md-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li class="active">Dashboard</li>
					</ul>
				</div>
		
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>DASHBOARD</h2>
					<em>the first priority information</em>
				</div>
				<div class="main-content">
					<div class="row">
						<div class="col-md-9">
				
						</div>
						<div class="col-md-3">
					
						</div>
					</div>
					<!-- WIDGET MAIN CHART WITH TABBED CONTENT -->
					<div class="widget">
						<div class="widget-header">
							<h3><i class="fa fa-bar-chart-o"></i> Sales Stat</h3> <em>- Visits, Sales and Traffic Source</em>
							<button type="button" class="btn btn-link btn-help"><i class="fa fa-question-circle"></i></button>
							<div class="btn-group widget-header-toolbar">
								<a href="#" id="tour-focus" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
								<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
								<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="widget-content">
							<!-- chart tab nav -->
							<div class="chart-nav">
								<strong>Select period: </strong>
								<ul id="sales-stat-tab">
									<li class="active"><a href="#week">Weekly</a></li>
									<li><a href="#month">Monthly</a></li>
									<li><a href="#year">Annually</a></li>
								</ul>
							</div>
							<!-- end chart tab nav -->
							<!-- chart placeholder-->
							<div class="chart-content">
								<div class="demo-flot-chart sales-chart"></div>
							</div>
							<!-- end chart placeholder-->
							<hr class="separator">
					
						</div>
					</div>
					<!-- END WIDGET MAIN CHART WITH TABBED CONTENT -->
			
			
					<!-- END WIDGET TICKET TABLE -->
				</div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
		<?=$this->load->view('include/footer')?>
			<!-- END FOOTER -->
		</div>
		<!-- END CONTENT WRAPPER -->
	</div>
	<!-- END WRAPPER -->
	
	<!-- Javascript -->
	<script src="<?=base_url()?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/stat/jquery.easypiechart.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/raphael/raphael-2.1.0.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/stat/flot/jquery.flot.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/stat/flot/jquery.flot.resize.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/stat/flot/jquery.flot.time.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/stat/flot/jquery.flot.pie.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-mapael/jquery.mapael.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/raphael/maps/usa_states.js"></script>
	<script src="<?=base_url()?>assets/js/king-chart-stat.js"></script>
	<script src="<?=base_url()?>assets/js/king-table.js"></script>
	<script src="<?=base_url()?>assets/js/king-components.js"></script>
</body>

</html>
