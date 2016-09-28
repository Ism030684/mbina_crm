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
	<link rel="stylesheet" href="<?php echo base_url();?>assets/datepicker/jquery-ui.css">
	
	<script src="<?php echo base_url();?>assets/datepicker/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>assets/datepicker/jquery-ui.js"></script>
</head>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });

    var availableTags = [
    <?php
    $query = $this->db->query("select * from t_set_vehicle");

		foreach ($query->result() as $row)
		{
	?>
		 "<?php  echo $row->vehicle_type;?>",   
	<?
		}
    ?> 
    ];

    var cityTags = [
                         <?php
                         $query = $this->db->query("select * from t_m_city");

                     		foreach ($query->result() as $row)
                     		{
                     	?>
                     		 "<?php  echo $row->city;?>",   
                     	<?
                     		}
                         ?> 
                         ];


    var monthTags = [
                    <?php
                    $query = $this->db->query("select * from t_m_month");

                		foreach ($query->result() as $row)
                		{
                	?>
                		 "<?php  echo $row->month;?>",   
                	<?
                		}
                    ?> 
                    ];

    var yearTags = [
                     <?php
                     $query = $this->db->query("select * from t_m_year");

                 		foreach ($query->result() as $row)
                 		{
                 	?>
                 		 "<?php  echo $row->year;?>",   
                 	<?
                 		}
                     ?> 
                     ];
     
    
    $( "#display1" ).autocomplete({
      source: availableTags
    });
     $( "#display2" ).autocomplete({
      source: availableTags
    });
     $( "#display3" ).autocomplete({
         source: availableTags
     });
     $( "#display4" ).autocomplete({
         source: availableTags
     });
     $( "#city" ).autocomplete({
         source: cityTags
     });
     $( "#month" ).autocomplete({
         source: monthTags
     });
     $( "#year" ).autocomplete({
         source: yearTags
     });
     
    
  } );
  </script>
<body class="sidebar-fixed topnav-fixed bootstrap-elements">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<!-- TOP BAR -->
			<?php echo $this->load->view('include/top_bar');?>
		
		<!-- END TOP BAR -->
		<!-- LEFT SIDEBAR -->
			<?php echo $this->load->view('include/left_sidebar');?>
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
	
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Event</a></li>
						<li class="active">Pre Event</li>
					</ul>
				</div>
				
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Pre Event</h2>
															
				</div>
				<div class="main-content">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC INPUT -->
							<div class="widget">
								<!-- <div class="widget-header">
									<h3><i class="fa fa-edit"></i> Basic Input</h3></div>-->
						<?php echo form_open(base_url('event/add_pre_event'), array('id'=>'myform','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<div class="widget-content">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-md-2 control-label">Dealer Area</label>
											<div class="col-md-2">
												<input type="text" class="form-control" name="dealer_area" placeholder="" value="<?php echo $this->session->userdata('dealer_area');?>">
											</div>
											<label class="col-md-1 control-label">Item</label>
											<div class="col-md-2">
												<select  class="form-control" name="item">
											<option value="PRE EVENT">PRE EVENT</option>
										<!--  	<option value="POST EVENT">POST EVENT</option>-->
											</select>

										
											</div>
											
										</div>
										
										<div class="form-group">
										<label class="col-md-2 control-label">Dealer</label>
											<div class="col-md-5">
												<input type="text" class="form-control" name="dealer" value="<?php echo $this->session->userdata('dealer_name');?>" placeholder="">
											</div>
										</div>
											<div class="form-group">
											<label class="col-md-2 control-label">Activity</label>
											<div class="col-md-2">
													
											<select  class="form-control" name="activity">

											
											<?php 
												$query = $this->db->query("select * from t_m_activity");
												
												foreach ($query->result() as $row)
												{
													if($row->activity==$activity){
														$selectedActivity="selected";
													}else{
														$selectedActivity="";
													}
												?>
												<option value="<?php echo $row->activity;?>" <?php echo $selectedActivity;?>><?php echo $row->activity;?></option>
												<?php 
												}
												?>
												
											</select>

											</div>
									<label class="col-md-1 control-label">Location</label>
											<div class="col-md-5">
												<input type="text" class="form-control" placeholder="" name="location" value="<?php echo $location;?>">
											</div>
										</div>
										<div class="form-group">
										
											<label class="col-md-2 control-label">Detail Location</label>
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="detail_location" value="<?php echo $detail_location;?>">
											</div>
											
										</div>
										<div class="form-group">
												<label class="col-md-2 control-label">Description</label>
											<div class="col-md-6">
												<input type="text" class="form-control" placeholder="" name="description" value="<?php echo $description;?>">
											</div>
										</div>
										
										<div class="form-group">
											
											<label class="col-md-2 control-label">City</label>
											
											<div class="col-md-2">
											<select  class="form-control" name="city">
												<?php 
												$query = $this->db->query("select * from t_m_city");
												
												foreach ($query->result() as $row)
												{
													if($row->city==$city){
														$selected="selected";
													}else{
														$selected="";
													}
												?>
												<option value="<?php echo $row->city;?>" <?php echo $selected;?>><?php echo $row->city;?></option>
												<?php 
												}
												?>
											</select>

										
											</div>
											
											<label class="col-md-1 control-label">Year</label>
											<div class="col-md-2">
												<select  class="form-control" name="year">
												<?php 
												$query = $this->db->query("select * from t_m_year");
												
												foreach ($query->result() as $row)
												{
													if($row->year==$year){
														$selectyear="selected";
													}else{
														$selectyear="";
													}
												?>
												<option value="<?php echo $row->year;?>" <?php echo $selectyear;?>><?php echo $row->year;?></option>
												<?php 
												}
												?>
											</select>
											</div>
											
											<label class="col-md-1 control-label">Month</label>
											<div class="col-md-2">
												
												<select  class="form-control" name="month">
												<?php 
												$query = $this->db->query("select * from t_m_month");
												
												foreach ($query->result() as $row)
												{
													if($row->month==$month){
														$selectmonth="selected";
													}else{
														$selectmonth="";
													}
												?>
												<option value="<?php echo $row->month;?>" <?php echo $selectmonth;?>><?php echo $row->month;?></option>
												<?php 
												}
												?>
											</select>
											
											</div>
										</div>
										
										<div class="form-group">
											
											<label class="col-md-2 control-label">Date</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="" id="datepicker" name="date" value="<?php echo $date;?>">
											</div>
											
											<label class="col-md-2 control-label">Submission Date</label>
											<div class="col-md-2">
												<input type="text" class="form-control" placeholder="" name="submission_date" id="datepicker2" value="<?php echo $submission_date;?>">
											</div>
											
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Budget</label>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name="budget" value="<?php echo $budget;?>">
											</div>
											
										</div>
										<div class="form-group">
										<label class="col-md-2 control-label">Display 1</label>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" id="display1" name="display_1" value="<?php echo $display_1;?>">
											</div>
											<label class="col-md-1 control-label">Display 2</label>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" id="display2" name="display_2" value="<?php echo $display_2;?>">
											</div>
										</div>
											<div class="form-group">
											
											<label class="col-md-2 control-label">Display 3</label>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name="display_3" id="display3" value="<?php echo $display_3;?>">
											</div>
											<label class="col-md-1 control-label">Display 4</label>
											<div class="col-md-3">
												<input type="text" class="form-control" placeholder="" name="display_4" id="display4" value="<?php echo $display_4;?>">
											</div>
										</div>
										
									
										
										<button type="submit" class="btn btn-info btn-sm">Save</button>
									 		<button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
									
									</div>
								</div>
							</div>
							<!-- END BASIC INPUT -->
							<?php echo form_close();?>

						</div>
				
					</div>
				
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
	<!--  <script src="<?php// echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>-->
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
</body>

</html>
