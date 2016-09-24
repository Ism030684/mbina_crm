<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<?=$this->load->view('include/meta')?>
	<!-- CSS -->
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=base_url()?>assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="<?=base_url()?>assets/ico/favicon.png">
</head>

<script type="text/javascript">
 function check(id_users_role,id_menu)
 {
	// alert(id_menu);
     
 	  $.ajax({
 		  url: '<?php echo base_url()?>setting/role_add/' + id_users_role + '/' + id_menu,
 		  success: function(data) {
 		  }
 		});
}


</script>
<script>
function dashboard_select(checkboxElem) {

	if (checkboxElem.checked) {
				 document.getElementById("menu1").checked = true;
				 document.getElementById("menu1_1_1").checked = true;
				 document.getElementById("menu1_2_1").checked = true;
				 document.getElementById("menu1_3_1").checked = true;
		  } else {
			  	 document.getElementById("menu1").checked = false;
				 document.getElementById("menu1_1_1").checked = false;
				 document.getElementById("menu1_2_1").checked = false;
				 document.getElementById("menu1_3_1").checked = false;
		  }
	
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
        </div>
          <?php echo form_open(base_url('setting/salesman_delete'), array('id'=>'myform','class'=>'form-horizontal'));?>
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
</div>
  <!--  end modal -->
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
						<li><i class="fa fa-home"></i><a href="">Home</a></li>
						<li><a href="#">Setting</a></li>
						<li class="active">Role</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
				<!--<div class="main-header">

				</div>-->

				<div class="main-content">
					<?=msg_block();?>

			<!-- DARK TABLE HEADER -->
	<div class="widget widget-table">
								<div class="widget-header">
									<h3><i class="fa fa-table"></i>Role</h3></div>
								<div class="widget-content">
			<?php echo form_open($faction, array('id'=>'myform','class'=>'form-horizontal','enctype'=>'multipart/form-data'));?>
								
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Permission</th>
												<?php 
												foreach ($role_position as $row)
												{
												?>
											
												<th ><?php echo $row->users_role;?></th>
												<?php 
												}
												?>
											</tr>
										</thead>
										<tbody>
										<?php 
										$query = $this->db->query("select * from t_menu where enabled='1' and parent='' ");
										$i=1;
										foreach ($query->result() as $row)
										{
											?>
												<tr>
												<td><?php echo $i;?></td>
												<td><?php echo $row->menu;?></td>
												<?php 
												foreach ($role_position as $rowuser)
												{
												?>
												<th align="center"><!--  <input type="checkbox" id="menu1"  name="select-all" id="select-all" />--></th>
												<?php 
												}
												?>
											</tr>
											<?php 

													$query2 = $this->db->query("select a.* from t_menu a where a.enabled='1' and a.parent='".$row->kode."'");
													$a=1;
													
													foreach ($query2->result() as $row2)
													{
											?>
											<tr>
												<td>&nbsp;</td>
												<td>&nbsp;<?php echo $row2->menu;?></td>
												<?php 
												foreach ($role_position as $rowuser)
												{
													//cek apakah checked atau tidak
												//echo $this->master_model->get_checked($rowuser->id_users_role,$row2->kode);

												?>
												<th align="center"><input type="checkbox" id="menu1"  name="<?php echo $row2->kode;?>_<?php echo $rowuser->id_users_role;?>" value="1"  onchange="check('<?php echo $rowuser->id_users_role;?>','<?php echo $row2->kode;?>')" <?php echo $this->setting_model->get_checked( $rowuser->id_users_role, $row2->kode);?> /></th>
												<?php 
												}
												?>
											</tr>
												<?php 
													$a++;
													}
												?>
											
										<?php 
										$i++;
										}
										?>
											
											
											
										</tbody>
									</table>
											<!--  <button type="submit" class="btn btn-info btn-sm">Save</button>
									 		<button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
												-->
								</div>
							</div>
								<?php echo form_close();?>
							<!-- END DARK TABLE HEADER -->

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
	<script src="<?=base_url()?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap/bootstrap.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/js/king-common.js"></script>
	<!-- <script src="demo-style-switcher/assets/js/deliswitch.js"></script> -->
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/exts/dataTables.colReorder.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/exts/dataTables.tableTools.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jqgrid/jquery.jqGrid.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jqgrid/i18n/grid.locale-en.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jqgrid/jquery.jqGrid.fluid.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>assets/js/king-table.js"></script>
</body>

</html>
