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
						<li><a href="#">Newsletter</a></li>
						<li class="active">New Message</li>
					</ul>
				</div>
		
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>New Message</h2>
					<em>compose new message</em>
				</div>
				<div class="main-content">
					<!-- INBOX -->
					<div class="inbox new-message">
						<!-- top menu -->
						<div class="top">
							<div class="top-menu">
								<div class="row">
									<div class="col-xs-2">
										<span class="navigation">
							<button type="button" class="btn btn-link hidden-sm hidden-md hidden-lg inbox-nav-toggle"><i class="fa fa-bars"></i></button>
						</span>
									</div>
									<div class="col-xs-10">
										<ul class="list-inline top-menu-group1 pull-right">
											<li>
												<button type="button" class="btn"><i class="fa fa-close"></i> CANCEL</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- end top menu -->
						<div class="bottom">
							<div class="row">
								<!-- inbox left menu -->
								<div class="col-xs-12 col-sm-3 col-lg-2 inbox-left-menu">
									<h3 class="sr-only">Inbox Menu</h3>
									<ul class="list-unstyled left-menu">
										<li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge pull-right">32</span></a></li>
										<li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
										<li><a href="#"><i class="fa fa-edit"></i> Drafts</a></li>
										<li><a href="#"><i class="fa fa-external-link"></i> Sent</a></li>
										<li><a href="#"><i class="fa fa-warning"></i> Spam <span class="badge pull-right">1</span></a></li>
										<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
									</ul>
									<div class="labels">
										<h3>LABELS</h3>
										<ul class="list-unstyled">
											<li><a href="#">Blog Comments</a> <i class="fa fa-stop pull-right label1"></i></li>
											<li><a href="#">New User</a> <i class="fa fa-stop pull-right label2"></i></li>
											<li><a href="#">Password</a> <i class="fa fa-stop pull-right label3"></i></li>
										</ul>
									</div>
								</div>
								<!-- end inbox left menu -->
								<!-- right main content, new message form -->
								<div class="col-xs-12 col-sm-9 col-lg-10">
									<div class="new-message-form">
										<form class="form-horizontal" role="form">
											<div class="form-group">
												<label class="col-sm-2 control-label">To</label>
												<div class="col-sm-10">
													<select multiple name="message-from-select" id="message-from-select" class="select2">
														<option value="janedoen@example.com">janedoen@example.com</option>
														<option value="antonius@example.com" selected="selected">antonius@example.com</option>
														<option value="michael@example.com" selected="selected">michael@example.com</option>
														<option value="bayjack@example.com">bayjack@example.com</option>
														<option value="stacy@example.com">stacy@example.com</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label for="message-from" class="col-sm-2 control-label">From</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="message-from" value="myemailaddr@mydomain.com" disabled>
												</div>
											</div>
											<div class="form-group">
												<label for="message-subject" class="col-sm-2 control-label">Subject</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="message-subject">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Message</label>
												<div class="col-sm-10">
													<div class="new-message-editor"></div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-10 col-sm-offset-2">
													<button type="submit" class="btn btn-primary">Send Message</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- end right main content, new message form -->
							</div>
						</div>
					</div>
					<!-- END INBOX -->
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
	<script src="<?php echo base_url();?>assets/js/plugins/summernote/summernote.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-page.js"></script>
</body>

</html>
