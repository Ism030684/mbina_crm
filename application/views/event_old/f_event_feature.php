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
	
		  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/multiselect/css/multi-select.css">
	
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
		<?php echo $this->load->view('include/top_bar')?>
	<?php echo $this->load->view('include/left_sidebar')?>
	
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">

			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Event</a></li>
						<li class="active">Form Layouts</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2><?php echo $event_name;?></h2>
					<em>setting for event</em>
				</div>
				<div class="main-content">
					<div class="row">
						<div class="col-md-6">
							<!-- SUPPOR TICKET FORM -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i>Test Drive Car</h3></div>
								<div class="widget-content">
									<form class="form-horizontal" role="form">
														<fieldset>
								<!-- content here -->
								 <select id='callbacks_test_drive' multiple='multiple'>
								 <?php 
								 $query = $this->db->query("SELECT * FROM t_set_vehicle");
								 
								 foreach ($query->result() as $row)
								 {
								 ?>
								  <option value='<?php echo $row->vehicle_id;?>'><?php echo $row->vehicle_type;?></option>
								  <?php 
								 }
								  ?>
								  <!--  <option value='elem_1'>A-Class</option>
								  <option value='elem_2'>B-Class</option>
								  <option value='elem_3'>The New Class</option>
								  <option value='elem_4'>E-class</option>-->
								  <!-- <option value='elem_100'>elem 100</option>-->
								</select>
								<!-- end -->
								</fieldset>
										
									</form>
								</div>
							</div>

							<!-- END SUPPORT TICKET FORM -->
							
							<!-- REGISTRATION FORM -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> Display Car</h3></div>
								<div class="widget-content">
								<form class="form-horizontal" role="form">
										<fieldset>
								<!-- content here -->
								 <select id='callbacks_display_car' multiple='multiple'>
								 <?php 
								 $query = $this->db->query("SELECT * FROM t_set_vehicle");
								 
								 foreach ($query->result() as $row)
								 {
								 ?>
								  <option value='<?php echo $row->vehicle_id;?>'><?php echo $row->vehicle_type;?></option>
								  <?php 
								 }
								  ?>
								    <!--<option value='elem_2'>B-Class</option>
								  <option value='elem_3'>The New Class</option>
								  <option value='elem_4'>E-class</option>
								 <option value='elem_100'>elem 100</option>-->
								</select>
								<!-- end -->
								</fieldset>
									</form>
								</div>
							</div>
							<!-- END REGISTRATION FORM -->
						</div>
						<div class="col-md-6">
							<!-- REGISTRATION FORM WITH ICONS -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> E-Brochure Vehicle Info</h3></div>
								<div class="widget-content">
									<form class="form-horizontal" role="form">
										<fieldset>
								<!-- content here -->
								 <select id='callbacks' multiple='multiple'>
								  	 <?php 
								 $query = $this->db->query("SELECT * FROM t_set_vehicle");
								 
								 foreach ($query->result() as $row)
								 {
								 ?>
								  <option value='<?php echo $row->vehicle_id;?>'><?php echo $row->vehicle_type;?></option>
								  <?php 
								 }
								  ?>
								</select>
								<!-- end -->
								</fieldset>
									</form>
								</div>
							</div>
							<!-- END REGISTRATION FORM WITH ICONS -->
							<!-- REGISTRATION FORM -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> E-Brochure After Sales</h3></div>
								<div class="widget-content">
									<form class="form-horizontal" role="form">
										<fieldset>
								<!-- content here -->
								 <select id='callbacks_display' multiple='multiple'>
								 	 <?php 
								 $query = $this->db->query("SELECT * FROM t_set_vehicle");
								 
								 foreach ($query->result() as $row)
								 {
								 ?>
								  <option value='<?php echo $row->vehicle_id;?>'><?php echo $row->vehicle_type;?></option>
								  <?php 
								 }
								  ?>
								</select>
								<!-- end -->
								</fieldset>
									</form>
								</div>
							</div>
							<!-- END REGISTRATION FORM -->
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
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-form-layouts.js"></script>

	
	<!-- Javascript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/multiselect/js/jquery.multi-select.js"></script>
  <script type="text/javascript">
	
  	 // run callbacks
  	 //brochure vehicle info
      $('#callbacks').multiSelect({
      afterSelect: function(values){
          var event_id=<?php echo base64_decode($this->uri->segment(3));?>
          
      	  $.ajax({
      		  url: '<?php echo base_url()?>event/insert_brochure_vehicle_info/' + event_id + '/' + values,
      		  success: function(data) {
      		  }
      		});
    	   //alert("Select value: "+values);
      },
      afterDeselect: function(values){
 			var event_id=<?php echo base64_decode($this->uri->segment(3));?>
          
     	  $.ajax({
     		  url: '<?php echo base_url()?>event/delete_brochure_vehicle_info/' + event_id + '/' + values,
     		  success: function(data) {
     		  }
     		});
        //alert("Deselect value: "+values);
      }
    });

      // run callbacks display
      // ebrochure after sales
      $('#callbacks_display').multiSelect({
      afterSelect: function(values){
        //alert("Select value: "+values);
        var event_id=<?php echo base64_decode($this->uri->segment(3));?>
        
  	  $.ajax({
  		  url: '<?php echo base_url()?>event/insert_brochure_after_sales/' + event_id + '/' + values,
  		  success: function(data) {
  		  }
  		});
      },
      afterDeselect: function(values){
    	  var event_id=<?php echo base64_decode($this->uri->segment(3));?>
          
     	  $.ajax({
     		  url: '<?php echo base_url()?>event/delete_brochure_after_sales/' + event_id + '/' + values,
     		  success: function(data) {
     		  }
     		});
       // alert("Deselect value: "+values);
      }
    });

      // run callbacks display
      $('#callbacks_test_drive').multiSelect({
      afterSelect: function(values){
 		 var event_id=<?php echo base64_decode($this->uri->segment(3));?>
          
    	  $.ajax({
    		  url: '<?php echo base_url()?>event/insert_test_drive/' + event_id + '/' + values,
    		  success: function(data) {
    		  }
    		});
        //alert("Select value: "+values);
      },
      afterDeselect: function(values){
    	  var event_id=<?php echo base64_decode($this->uri->segment(3));?>
           
     	  $.ajax({
     		  url: '<?php echo base_url()?>event/delete_test_drive/' + event_id + '/' + values,
     		  success: function(data) {
     		  }
     		});
        //alert("Deselect value: "+values);
      }
    });

      // run callbacks display
      $('#callbacks_display_car').multiSelect({
      afterSelect: function(values){
          var event_id=<?php echo base64_decode($this->uri->segment(3));?>
          
    	  $.ajax({
    		  url: '<?php echo base_url()?>event/insert_display_car/' + event_id + '/' + values,
    		  success: function(data) {
    		  }
    		});
       // alert("Select value: "+values);
      },
      afterDeselect: function(values){
       // alert("Deselect value: "+values);
       var event_id=<?php echo base64_decode($this->uri->segment(3));?>
          
    	  $.ajax({
    		  url: '<?php echo base_url()?>event/delete_display_car/' + event_id + '/' + values,
    		  success: function(data) {
    		  }
    		});
      }
    });
  </script>

</body>

</html>
