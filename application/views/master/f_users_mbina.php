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
	window.location = "<?echo $this->uri->segment(2)=='users2' ? base_url() : base_url('master/users');?>";
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
						<li class="active">Users</li>
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
									<h3><i class="fa fa-group"></i> User Form</h3></div>
								<div class="widget-content">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-md-2 control-label">First Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="first_name" value="<?php echo $dt['first_name'];?>" placeholder="">
											</div>
												<label class="col-md-2 control-label">Mobile Phone 1</label>
												<div class="col-md-4">
												<input type="text" class="form-control" name="mobile_phone_1" value="<?php echo $dt['mobile_phone_1'];?>" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Last Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="last_name" value="<?php echo $dt['last_name'];?>" placeholder="">
											</div>
											<label class="col-md-2 control-label">Mobile Phone 2</label>
												<div class="col-md-4">
												<input type="text" class="form-control" name="mobile_phone_2" value="<?php echo $dt['mobile_phone_2'];?>" placeholder="">
											</div>
										</div>
										
									
										<div class="form-group">
							
											<label class="col-md-2 control-label">Username</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="username"  value="<?php echo $dt['username'];?>">
											</div>
												<label class="col-md-2 control-label"> Password</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="password" value="<?php echo $dt['password'];?>" placeholder="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Email</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="email" value="<?php echo $dt['email'];?>" placeholder="">
											</div>
												 <label class="col-md-2 control-label">Position</label>
											<div class="col-md-4">
												<select class="form-control" name="id_position">
												<?php 
												foreach ($cmb_position as $row)
												{
												?>
													<option value="<?php echo $row->id_position;?>" <?php if($dt['id_position']==$row->id_position) echo 'selected';?>><?php echo  $row->position_name;?></option>
												<?php 
												}
												?>
												</select>

											</div>
										
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Role</label>
											<div class="col-md-3">
												<select class="form-control" name="id_users_role">
												<?php 
												foreach ($cmb_role as $row)
												{
												?>
													<option value="<?php echo $row->id_users_role;?>" <?php if($dt['id_users_role']==$row->id_users_role) echo 'selected';?>><?php echo  $row->users_role;?></option>
												<?php 
												}
												?>
												</select>
											</div>
										
											<label class="col-md-2 control-label">Photo</label>
											<div class="col-md-4">
												<input type="file" name="file1" id="ticket-attachment">
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

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
 
  <script type="text/javascript" charset="utf-8">
  $(function() {

    /* For jquery.chained.js */
    //$("#series").chained("#mark");
    //$("#model").chained("#series");
    //$("#engine").chained("#series, #model");
    $("#outlet_dealer_id").chained("#group_dealer_id");




  });
  </script>
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="<?php echo base_url();?>demo-style-switcher/assets/js/deliswitch.js"></script>
</body>

</html>
