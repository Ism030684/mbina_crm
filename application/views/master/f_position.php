<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<?=$this->load->view('include/meta')?>
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
	function cancel()
	{
	window.location = "<?echo $this->uri->segment(2)=='position' ? base_url() : base_url('master/position');?>";
	}
</script>

<body class="sidebar-fixed topnav-fixed bootstrap-elements">
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
	
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Master</a></li>
						<li class="active">Position</li>
					</ul>
				</div>
			</div>
			<!-- main -->
			<div class="content">
		
				<div class="main-content">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC INPUT -->
							
				<?php 
						if(validation_errors()){
						?>
							<div class="alert alert-danger alert-dismissable">
										<a href="" class="close">&times;</a>
								<?php echo validation_errors(); ?>
							</div>
						<?php }?>
						<?php echo form_open($faction, array('id'=>'myform','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>
							<?php echo form_hidden('id', $dt['id']);?>
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa  fa-flag"></i> Position Form</h3></div>
								<div class="widget-content">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-md-2 control-label">Position ID</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="id_position" value="<?php echo $dt['id_position'];?>" placeholder="" autocomplete="off">
											</div>
												
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Position Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="position_name" value="<?php echo $dt['position_name'];?>" placeholder="" autocomplete="off">
											</div>
										
										</div>

					
									
											<button type="submit" class="btn btn-info btn-sm">Save</button>
										<button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
									</div>
								</div>
							</div>
							<?php echo form_close();?>
							<!-- END BASIC INPUT -->
				
						</div>
					
					</div>
					
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
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="<?php echo base_url();?>demo-style-switcher/assets/js/deliswitch.js"></script>
</body>

</html>
