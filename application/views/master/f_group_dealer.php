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
 <?php echo $map['js']; ?>
<script type="text/javascript">
	function cancel()
	{
	window.location = "<?echo $this->uri->segment(2)=='department' ? base_url() : base_url('master/group_dealer');?>";
	}
</script>
<script type="text/javascript">
var map;        
            var myCenter=new google.maps.LatLng(53, -1.33);
var marker=new google.maps.Marker({
    position:myCenter
});

function initialize() {
  var mapProp = {
      center:myCenter,
      zoom: 14,
      draggable: false,
      scrollwheel: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
  marker.setMap(map);
    
  google.maps.event.addListener(marker, 'click', function() {
      
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
    
  }); 
};
google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", resizingMap());

$('#myMapModal').on('show.bs.modal', function() {
   //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
   resizeMap();
})

function resizeMap() {
   if(typeof map =="undefined") return;
   setTimeout( function(){resizingMap();} , 400);
}

function resizingMap() {
   if(typeof map =="undefined") return;
   var center = map.getCenter();
   google.maps.event.trigger(map, "resize");
   map.setCenter(center); 
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
						<li class="active">Group Dealer</li>
					</ul>
				</div>
				
			</div>
			<!-- main -->
			<div class="modal fade" id="myMapModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title">Modal title</h4>

            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div id="map-canvas" class=""></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    
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
									<h3><i class="fa  fa-car"></i> <i class="fa  fa-car"></i>Group Dealer Form</h3></div>
								<div class="widget-content">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-md-2 control-label">Group Dealaer ID</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="group_dealer_id" value="<?php echo $dt['group_dealer_id'];?>" placeholder="" autocomplete="off">
											</div>
												
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Group Dealer Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="group_dealer" value="<?php echo $dt['group_dealer'];?>" placeholder="" autocomplete="off">
											</div>
										
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Address</label>
											<div class="col-md-3">
											<textarea class="form-control" name="address" id="address" rows="5" cols="30" placeholder=""><?php echo $dt['address'];?></textarea>
											</div>
										
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Contact</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="contact" value="<?php echo $dt['contact'];?>" placeholder="" autocomplete="off">
											</div>
										
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Website</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="website" value="<?php echo $dt['website'];?>" placeholder="" autocomplete="off">
											</div>
										
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Email</label>
											<div class="col-md-3">
												<input type="text" class="form-control" name="email" value="<?php echo $dt['email'];?>" placeholder="" autocomplete="off">
											</div>
										
										</div>

					
									
											<button type="submit" class="btn btn-info btn-sm">Save</button>
										<button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
									<a href="#myMapModal" class="btn" data-toggle="modal">Launch Map Modal</a>
									
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
