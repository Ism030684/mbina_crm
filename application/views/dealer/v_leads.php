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
function id_param(id){
	document.getElementById("id").value=id;

  }


function test(id)
{
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
						<li><a href="#">Dealer</a></li>
						<li class="active">Leads</li>
					</ul>
				</div>
			
			</div>
			<!-- main -->
			<div class="content">
				<!--<div class="main-header">

				</div>-->

				<div class="main-content">
					<?=msg_block();?>

					<!-- FEATURED DATA TABLE -->
					<div class="widget widget-table">
						<div class="widget-header">
							

						</div>
						<div class="widget-content">
							<table id="featured-datatable" class="table table-sorting table-striped table-hover datatable">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Address</th>
										<th>City</th>
										<th>Salesman</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>

									<tr>
										<td>1</td>
										<td>Ronda Mitha</td>
										<td>Jl. Mampang Prapatan Jakarta </td>
										<td>Jakarta Selatan</td>
										<td>Rahmat Syah</td>
										<td>
											<a href="<?php echo base_url()?>master/department_add/<?=base64_encode('w')?>"><span class="label label-success">EDIT</span></a>
											<a href="#" onclick="test('11')"><span class="label label-default">DELETE</span></a></td>
								
								</tr>
									</tr>
  
									
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- END FEATURED DATA TABLE -->
			
		

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
