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


<script type="text/javascript">
function id_param(id){
	document.getElementById("idx").value=id;

  }


function modal_particant(id)
{
	//alert(id);
	id_param(id);
	$('#myModal').modal({backdrop: 'static', keyboard: false}) 
}

</script>

<body class="sidebar-fixed topnav-fixed ">
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!-- <h4 class="modal-title">ALERT</h4> -->
                 <input type="hidden" name="id" id="id" value="">
         
        </div>
          <?php echo form_open(base_url('event/add_participant_process'), array('class'=>'form-horizontal'));?>

        <div class="modal-body">
          	<!-- SELECT2 -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> Event Dealer Participant</h3> <em> - another replacement for select boxes</em>
								</div>
								<div class="widget-content">
								        <input type="hidden" name="id" id="idx" value="">
									
									<select multiple name="participant[]" id="select2-multiple1" class="select2 select2-multiple">
										
										<?php 
										
										$query = $this->db->query("select * from t_group_dealer");
										
										foreach ($query->result() as $row)
										{
											?>
										<optgroup label="<?php echo $row->group_dealer;?>">
											<?php 
										
												$query = $this->db->query("select * from t_outlet_dealer where 	group_dealer_id	=".$row->	group_dealer_id."");
										
													foreach ($query->result() as $row2)
													{
													?>
										
													<option value="<?php echo $row2->outlet_id;?>"><?php echo $row2->outlet;?></option>
													<?php 
													}
													?>
										</optgroup>
										<?php 	
										}
										?>
										
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Save </button>
        
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
                <?php echo form_close();?>
        
      </div> 
    </div>
  </div>
</div>
  <!--  end modal -->
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
						<li class="active">Participant</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Participant</h2>
					<em>Setup your event participant</em>
				</div>
				<div class="main-content">
				
		
					<!-- FEATURED DATA TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							<h3><i class="fa fa-group"></i> Participant Setup</h3> <em> - <a href="http://datatables.net/" target="_blank">jQuery Data Table</a> with sorting feature, live search and pagination</em></div>
						<div class="widget-content">
							<table id="featured-datatable" class="table table-sorting table-striped table-hover datatable">
								<thead>
									<tr>
										<th>Event ID</th>
										<th>Event Category</th>
										<th>Event Name</th>
										<th>Event Date</th>
										<th>Feature Setting</th>
									</tr>
								</thead>
								<tbody>
								
									
									<?php 
									if(!empty($array_event))
									foreach ($array_event as $row)
									{
									?>
									
									<tr>
										<td><?php echo $row->event_id;?></td>
										<td><?php echo $row->event_category_name;?></td>
										<td><?php echo $row->event_name;?>&nbsp;<?php echo $row->event_year;?></td>
										<td><?php echo $row->start_finish_date;?></td>
										<?php 
										if($row->participant_stat<>1){
										?>
										<td><a href="#" onclick="modal_particant('<?=$row->event_id;?>')">
										<i class="fa fa-edit"></i> Add dealer Participant</a></td>
										<?php 
										}else{
										?>
										<td>Already Setting</td>
										<?php 
										}
										?>
									</tr>
									<?php }?>
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END FEATURED DATA TABLE -->
			
		
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
	<!--<script src="demo-style-switcher/assets/js/deliswitch.js"></script>-->
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
	<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>


	

</body>

</html>
