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
<script type="text/javascript">
function modal_particant()
{
	//alert('sss');
	$('#myModal').modal({backdrop: 'static', keyboard: false}) 
}

</script>

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
						<li><a href="#">Event</a></li>
						<li class="active">Post Event</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Report GIIAS</h2>
					<em>Setup your event Report</em>
				</div>
				<div class="main-content">
				
		
					<!-- FEATURED DATA TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-print"></i> Report Setup</h3> <em> - <a href="http://datatables.net/" target="_blank">jQuery Data Table</a> with sorting feature, live search and pagination</em></div>
						<div class="widget-content">
							<table id="featured-datatable" class="table table-sorting table-striped table-hover datatable">
								<thead>
									<tr>
										<th>Event ID</th>
										<th>Event Category</th>
										<th>Event Name </th>
										<th>Start</th>
										<th>Finish</th>
										<th>Create  Report</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Event012016</td>
										<td>General Event</td>
										<td>GIIAS</td>
										<td>08/12/2016</td>
										<td>08/20/2016</td>
										<td><a href="<?php echo base_url('event/detail_report/')?><?php echo base64_encode('12')?>">
										<i class="fa fa-edit"></i> Report</a></td>
									</tr>
									<tr>
										<td>Event022016</td>
										<td>General Event</td>
										<td>IIMS</td>
										<td>08/03/2016</td>
										<td>08/04/2016</td>
										<td><a href="<?php echo base_url('event/detail_report/')?><?php echo base64_encode('12')?>">
										<i class="fa fa-edit"></i> Report</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END FEATURED DATA TABLE -->
			
		
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
	<!--<script src="demo-style-switcher/assets/js/deliswitch.js"></script>-->
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
	<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>


	

</body>

</html>
