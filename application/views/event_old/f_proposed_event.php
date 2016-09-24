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

<script type="text/javascript">
function load_peta() 
{
    var semarang = new google.maps.LatLng(-7.201470266411334, 110.08918792956547);
    var petaoption = {
    zoom: 9,
    center: semarang,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    peta = new google.maps.Map(document.getElementById("peta"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
    kasihtanda(event.latLng);
    });

    load_list_terminal('awal');

}
google.maps.event.addDomListener(window, 'load', load_peta);
</script>
<!-- <body class="sidebar-fixed topnav-fixed form-layouts">-->
<body class="sidebar-fixed topnav-fixed forms-elements">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Brochure</h4>
      </div>
      <div class="modal-body">
          <iframe id="myIframe" src="<?php echo base_url();?>brochure/cla-class.pdf" width="550" height="500"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
						<li><a href="#">Event</a></li>
						<li class="active">Proposed Event</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
			
				<div class="main-content">
					<div class="row">
						<div class="col-md-12">
							<!-- SUPPOR TICKET FORM -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> Event </h3></div>
								<div class="widget-content">
									<form action="<?php echo base_url('event/proposed_event_process');?>" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
										
										<fieldset>
											<!-- <legend>Information</legend>-->
											<div class="form-group">
												<label for="ticket-subject" class="col-sm-2 control-label">Event Category</label>
												<div class="col-sm-3">
													<select id="multiselect2" name="category" class="select-ticket-type">
													<?php 
													$query = $this->db->query("select * from t_event_category");
													foreach ($query->result() as $row)
														{
													?>
													<option value="<?php echo $row->event_category_id;?>"><?php echo $row->event_category_name;?></option>
													<?php 
														}
													?>
														
													</select>	
												</div>
												<label for="ticket-subject" class="col-sm-2 control-label">Event ID</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" name="event_id" id="ticket-subject" value="<?php echo random_string('numeric',8);?>" placeholder="">
												</div>
											</div>
											
											<div class="form-group">
												
												<label for="ticket-subject" class="col-sm-2 control-label">Start - Finish Date</label>
												<div class="col-sm-5">
													<input type="text" name="start_finish_date" id="daterange-default" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="ticket-subject" class="col-sm-2 control-label">Event Name</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" name="event_name" id="ticket-subject" placeholder="">
												</div>
											
											</div>
											
												<div class="form-group">
												<label for="ticket-attachment" class="col-sm-2 control-label">Logo</label>
												<div class="col-md-3">
													<input type="file" name="logo" id="ticket-attachment">
													<p class="help-block"><em>Valid file type: .jpg, .png, .txt, .pdf. File size max: 1 MB</em></p>
												</div>
												<label for="ticket-subject" class="col-sm-2 control-label">Location</label>
												<div class="col-sm-2">
													<input type="text" class="form-control" name="latitude" id="ticket-subject" placeholder=""> 
												</div>
												<div class="col-sm-2">
													<input type="text" class="form-control" name="longitude" id="ticket-subject" placeholder=""> 
												
												</div>
												<!-- <div class="col-sm-2">
												 <div id="peta" style="height:300px; margin-bottom:10px; border:solid #999 2px;"></div>
												</div>-->
											</div>
								
											<div class="form-group">
												<label for="ticket-message" class="col-sm-2 control-label">Description</label>
												<div class="col-sm-3">
													<textarea class="form-control" name="description" id="ticket-message" rows="5" cols="30" placeholder=""></textarea>
												</div>
												<label for="ticket-subject" class="col-sm-2 control-label">Addres</label>
												<div class="col-sm-3">
													<textarea class="form-control" name="address" id="ticket-message" rows="5" cols="30" placeholder=""></textarea>
												</div>
											</div>
											
											<div class="form-group">
												
												<label for="ticket-subject" class="col-sm-2 control-label">Budget</label>
												<div class="col-sm-3">
													<input type="text" class="form-control" name="budget" id="ticket-subject" placeholder="">
												</div>
											</div>
											
						

									
									
											<div class="form-group">
												<div class="col-sm-offset-3 col-sm-2">
													<button type="submit" class="btn btn-primary btn-block">Submit</button>
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
<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-maskedinput/jquery.masked-input.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jqallrangesliders/jQAllRangeSliders-min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-slider/bootstrap-slider.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/king-elements.js"></script>
	
	
		
	<!-- Javascript -->

	
</body>

</html>
