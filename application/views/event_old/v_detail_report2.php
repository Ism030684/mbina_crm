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

<!-- <body class="sidebar-fixed topnav-fixed general-ui-elements">-->
<body class="sidebar-fixed topnav-fixed text-editor">

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
						<!-- 	<h3>Report Event</h3>-->
						</div>
						<div class="widget-content">
							<div class="row">
								<div class="col-md-10">
									<div class="panel-group" id="accordion">
									
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Frontal view vehicle<i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">
												<!-- TOP ACTION BUTTONS -->
					<div class="gallery-buttons bottom-30px">
						<button type="button" class="btn btn-custom-primary btn-md"><i class="fa fa-upload"></i> Upload New Image</button>
						<button type="button" class="btn btn-primary btn-md"><i class="fa fa-picture-o"></i> New Album</button>
					</div>
					<!-- END TOP ACTION BUTTONS -->
														<!-- WYSIWYG EDITOR -->
															<div class="row list-group king-gallery">
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="list-group-image" src="<?php echo base_url();?>assets/img/gallery/bird.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/bird.jpg</em></li>
										<li><strong>File Size:</strong> <em>139 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/jet-sky.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/jet-sky.jpg</em></li>
										<li><strong>File Size:</strong> <em>108 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/lighthouse.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/lighthouse.jpg</em></li>
										<li><strong>File Size:</strong> <em>132 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/desk.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/desk.jpg</em></li>
										<li><strong>File Size:</strong> <em>132 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						
						
				
					</div>	
																<!-- END WYSIWYG EDITOR -->
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Detail location  <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">
												
													<div class="main-content">
					<!-- TOP ACTION BUTTONS -->
					<div class="gallery-buttons bottom-30px">
						<button type="button" class="btn btn-custom-primary btn-md"><i class="fa fa-upload"></i> Upload New Image</button>
						<button type="button" class="btn btn-primary btn-md"><i class="fa fa-picture-o"></i> New Album</button>
					</div>
					<!-- END TOP ACTION BUTTONS -->
					<!-- KING GALLERY -->
					<div class="row list-group king-gallery">
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="list-group-image" src="<?php echo base_url();?>assets/img/gallery/bird.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/bird.jpg</em></li>
										<li><strong>File Size:</strong> <em>139 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/jet-sky.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/jet-sky.jpg</em></li>
										<li><strong>File Size:</strong> <em>108 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/lighthouse.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/lighthouse.jpg</em></li>
										<li><strong>File Size:</strong> <em>132 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/desk.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/desk.jpg</em></li>
										<li><strong>File Size:</strong> <em>132 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						
						
				
					</div>
					<!-- END KING GALLERY -->
				</div>

												</div>
											</div>
										</div>

								

								<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#ambience" href="#collapseThree2" class="collapsed">Ambience  <i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapseThree2" class="panel-collapse collapse">
												<div class="panel-body">
												
													<div class="main-content">
					<!-- TOP ACTION BUTTONS -->
					<div class="gallery-buttons bottom-30px">
						<button type="button" class="btn btn-custom-primary btn-md"><i class="fa fa-upload"></i> Upload New Image</button>
						<button type="button" class="btn btn-primary btn-md"><i class="fa fa-picture-o"></i> New Album</button>
					</div>
					<!-- END TOP ACTION BUTTONS -->
					<!-- KING GALLERY -->
					<div class="row list-group king-gallery">
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="list-group-image" src="<?php echo base_url();?>assets/img/gallery/bird.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/bird.jpg</em></li>
										<li><strong>File Size:</strong> <em>139 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/jet-sky.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/jet-sky.jpg</em></li>
										<li><strong>File Size:</strong> <em>108 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/lighthouse.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/lighthouse.jpg</em></li>
										<li><strong>File Size:</strong> <em>132 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item col-md-3 col-sm-6">
							<div class="thumbnail">
								<img class="group list-group-image" src="<?php echo base_url();?>assets/img/gallery/desk.jpg" alt="" />
								<div class="caption">
									<h3 class="inner list-group-item-heading">Image Title</h3>
									<ul class="list-unstyled">
										<li><strong>Path:</strong> <em>assets/img/gallery/desk.jpg</em></li>
										<li><strong>File Size:</strong> <em>132 KB</em></li>
									</ul>
									<div class="action-buttons">
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Remove</a>
									</div>
								</div>
							</div>
						</div>
						
						
				
					</div>
					<!-- END KING GALLERY -->
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
	
	
<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/plugins/summernote/summernote.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/markdown/markdown.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/markdown/to-markdown.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/markdown/bootstrap-markdown.js"></script>
	
</body>

</html>
