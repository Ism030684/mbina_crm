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

<body class="sidebar-fixed topnav-fixed form-layouts">
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
						<li class="active">Brochure</li>
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
									<h3><i class="fa fa-edit"></i> Brochure </h3></div>
								<div class="widget-content">
									<form class="form-horizontal" role="form" action="<?php echo base_url('setting/add_proses_brochure')?>" method="post" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?php echo $this->uri->segment(3);?>">
										<fieldset>
											<!-- <legend>Information</legend>-->
											<div class="form-group">
											<label for="ticket-type" class="col-sm-3 control-label">Type</label>
												<div class="col-sm-9">
													<select id="ticket-type" name="type" class="select-ticket-type">
														<?php 
														$query = $this->db->query("SELECT * FROM t_set_brochure_type");
														foreach ($query->result() as $row)
														{
														?>
														<option value="<?php echo $row->type_id;?>"><?php echo $row->type;?></option>
														<?php 
														}
														?>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label for="ticket-subject" class="col-sm-3 control-label">Brochure ID</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="brochure_id" id="brochure_id" value="<?php echo random_string('numeric', 10)?>" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label for="ticket-message" class="col-sm-3 control-label">Note</label>
												<div class="col-sm-9">
													<textarea class="form-control" name="note" id="note" rows="5" cols="30" placeholder=""></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="ticket-attachment" class="col-sm-3 control-label">Attach </label>
												<div class="col-md-9">
													<input type="file" id="file" name="file">
													<p class="help-block"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-offset-3 col-sm-9">
													<button type="submit" class="btn btn-primary btn-block">Submit Brochure</button>
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
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-form-layouts.js"></script>
</body>

</html>
