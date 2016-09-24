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



function modal_pdf(file)
{
	//id_param(id);
	$('#myModal').modal({backdrop: 'static', keyboard: false}) 
	//$('#myModalImg').modal({backdrop: 'static', keyboard: false}) 
	 var sites = ['<?php echo base_url();?>brochure/'+file]
   document.getElementById('myIframe1').src = sites[Math.floor(Math.random() * sites.length)];
	
}

function modal_img(file)
{
	//alert('ss');
	//id_param(id);
	$('#myModalImg').modal({backdrop: 'static', keyboard: false}) 
	 var sites = ['<?php echo base_url();?>vehicle/'+file]
    document.getElementById('myIframe').src = sites[Math.floor(Math.random() * sites.length)];

}

function id_param(id){
	document.getElementById("id").value=id;

  }

function test(id)
{
	id_param(id);
	//alert(id);
	$('#myModal2').modal({backdrop: 'static', keyboard: false}) 
}

</script>

<body class="sidebar-fixed topnav-fixed ">
<!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!-- <h4 class="modal-title">ALERT</h4> -->
        </div>
          <?php echo form_open(base_url('setting/vehicle_delete'), array('id'=>'myform','class'=>'form-horizontal'));?>
        <input type="hidden" name="id" id="id" value="">
        <div class="modal-body">
          <p> Are you sure delete data ?</p>
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Delete </button>
        
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
                <?php echo form_close();?>
        
      </div> 
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Brochure</h4>
      </div>
      <div class="modal-body">
          <iframe id="myIframe1" src="<?php echo base_url(); ?>brochure/cla-class.pdf" width="550" height="500"></iframe>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>


<!-- Modal image-->
<div class="modal fade" id="myModalImg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Image</h4>
      </div>
      <div class="modal-body">
          <iframe id="myIframe" src="<?php echo base_url();?>car_images/2014-S-CLASS-SEDAN-CH02-D.jpg" width="550" height="500" scrolling="yes"></iframe>
      </div>

    </div>
  </div>
</div>

	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
	
		<?php echo $this->load->view('include/top_bar')?>
		
		<!-- LEFT SIDEBAR -->
<?php echo $this->load->view('include/left_sidebar');?>
		<!-- END LEFT SIDEBAR -->
		
		
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
		
			<div class="row">
				<div class="col-lg-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Home</a></li>
						<li><a href="#">Setting</a></li>
						<li class="active">Vehicle</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
			
				<div class="main-content">
					
	
					<!-- SCROLLING DATA TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3>							
								<a href="<? echo base_url()?>setting/add_vehicle"><button type="button" class="btn btn-default btn-xs"><i class="fa  fa-user"></i>	Add Vehicle</button></a>
							</h3> 

						</div>
						<div class="widget-content">
							<div class="table-responsive">
								<table id="datatable-basic-scrolling" class="table table-sorting table-hover datatable">
									<thead>
										<tr>
											<th>No</th>
											<th>Vehicle ID</th>
											<th>Type</th>
											<th>Year</th>
											<th>Colour</th>
											<th>Image</th>
											<th>Brochure</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									
									<?php 
									$i=1;
									if(!empty($vehicle_array))
									foreach ($vehicle_array as $row)
									{
									?>
										<tr>
											<td><?php echo $i;?></td>
											<td><?php echo $row->vehicle_id;?> </td>
											<td><?php echo $row->vehicle_type;?></td>
											<td><?php echo $row->year;?> </td>
											<td>
											<?php 
											
											$query = $this->db->query("select b.colour_name from t_set_vehicle_detil as a left join t_set_vehicle_colour b on b.colour_id=a.vehicle_colour_id  where a.vehicle_id='".$row->vehicle_id."'");
											
											foreach ($query->result() as $row2)
											{
											?>
												<span class="simplecolorpicker icon" title="#c2c2c2" style="background-color: <?php echo $row2->colour_name;?>;" role="button" tabindex="0"></span>
											
											<?php 
											}
											?> 
											
										
											</td>
											<td><a href="#" onclick="modal_img('<?php echo $row->images; ?>')" ><?php echo $row->images; ?></a></td>
											<td><a href="#" onclick="modal_pdf('<?php echo $row->brochure; ?>')"><?php echo $row->brochure; ?></a></td>
											<td><span class="label label-success">EDIT</span> <a href="#" onclick="test(<?=$row->id;?>)"> <span class="label label-default">DELETE</span></a></td>
										</tr>
										<?php 
											$i++;										
											}
											?>
	
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SCROLLING DATA TABLE -->
				
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
</body>

</html>
