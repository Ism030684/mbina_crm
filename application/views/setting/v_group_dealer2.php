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
function setting_dealer()
{
	//alert('sss');
	$('#myModal').modal({backdrop: 'static', keyboard: false}) 
}
</script>

<body class="sidebar-fixed topnav-fixed general-ui-elements">
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Setting Dealer</h4> 
        </div>
          <?php echo form_open(base_url('setting/save_setting_dealer'), array('id'=>'myform','class'=>'form-horizontal'));?>
        <input type="hidden" name="id" id="id" value="">
        <div class="modal-body">
          
          
				<div class="main-content">
					<div class="row">
						<div class="col-md-12">
					<?php echo ($dealer_name);?>
							<!-- SELECT2 -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> Manager  </h3> 
								</div>
								<div class="widget-content">
								
									
									<select multiple name="id_users_manager" id="id_users_manager" class="select2 select2-multiple">
									 	<!-- <optgroup label="Alaskan/Hawaiian Time Zone">-->
										
											
										<!-- </optgroup>-->
										<?php 
										$query = $this->db->query("select * from t_users where 	id_users_role=3");
										
										foreach ($query->result() as $row)
										{
											?>
											<option value="<?php echo  $row->id_users;?>"><?php echo  $row->first_name;?></option>
									
											
										<?php
										}
										?>	
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
							
							
							<!-- Supervisor -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i> SUPERVISOR  </h3> 
								</div>
								<div class="widget-content">
								
									
									<select multiple name="id_users_supervisor" id="id_users_supervisor" class="select2 select2-multiple">
										<?php 
										$query = $this->db->query("select * from t_users where 	id_users_role=5");
										
										foreach ($query->result() as $row)
										{
											?>
											<option value="<?php echo  $row->id_users;?>"><?php echo  $row->first_name;?></option>
											<?php
										}
										?>	
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
							
									<!-- salesman -->
							<div class="widget">
								<div class="widget-header">
									<h3><i class="fa fa-edit"></i>SALESMAN</h3> 
								</div>
								<div class="widget-content">
								
									
											
									<select multiple name="id_users_salesman" id="id_users_salesman" class="select2 select2-multiple">
										<?php 
										$query = $this->db->query("select * from t_users where 	id_users_role=4");
										
										foreach ($query->result() as $row)
										{
											?>
											<option value="<?php echo  $row->id_users;?>"><?php echo  $row->first_name;?></option>
											<?php
										}
										?>	
										
									</select>
								</div>
							</div>
							<!-- END SELECT2 -->
							<button type="submit" class="btn btn-info btn-sm">Save</button>
									 <button type="button" class="btn btn-warning btn-sm" onclick="cancel()">Cancel</button>
						</div>
					
						</div>
					</div>
					<!-- /row -->
          
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
						<li><a href="#">Setting</a></li>
						<li class="active">Group Dealer</li>
					</ul>
				</div>
	
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-header">
					<h2>Group Dealer</h2>
					<em>setup your dealer</em>
				</div>
				<div class="main-content">

					<!-- ACCORDION -->
					<div class="widget">
						<div class="widget-header">
							<h3>Setting Dealer</h3>
						</div>
						<div class="widget-content">
							<div class="row">
								<div class="col-md-10">
									<div class="panel-group" id="accordion">
									
<?
	$i=1;
if(!empty($array_data))
foreach ($array_data as $row)
   {
   ?>	
							<!-- END BASIC TABLE -->
							
								<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row->group_dealer_id;?>" class="collapsed"><?=$row->group_dealer;?><i class="fa fa-angle-down pull-right"></i><i class="fa fa-angle-up pull-right"></i></a>
								</h4>
											</div>
											<div id="collapse<?php echo $row->group_dealer_id;?>" class="panel-collapse collapse">
												<div class="panel-body">
												<table class="table">
											<thead>
											<tr>
												<th>Group ID</th>
												<th>Group Dealer</th>
												<th>Addres</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $row->group_dealer_id;?></td>
												<td><?php echo $row->group_dealer;?></td>
												<td>ccc</td>
												<td>
												<a href="#" onclick="setting_dealer()"><div class="label label-info">Setting </div></a> 
												</td>
											</tr>
										
										</tbody>
									</table>	
												
													<!-- sub dealer -->
										<table class="table">
											<thead>
											<tr>
												<th>Dealer ID</th>
												<th>Dealer</th>
												<th>Addres</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										$a=1;
										if(!empty($this->setting_model->get_outlet_by_group($row->group_dealer_id)))
										foreach ($this->setting_model->get_outlet_by_group($row->group_dealer_id) as $row2)
												{
				
										?>
											<tr>
												<td><?php echo $row2->outlet_id;?></td>
												<td><?php echo $row2->outlet;?></td>
												<td><?php echo $row2->address;?></td>
												<td>
												<a href="#" onclick="setting_dealer()"><div class="label label-info">Setting </div></a> 
												</td>
											</tr>
											<?php 
											$a++;
												}
											?>
										</tbody>
									</table>
													<!-- end sub -->
												</div>
											</div>
										</div>
							<!-- end  -->
							
<?php 
   }
?>
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
	
		<script src="<?php echo base_url();?>assets/js/plugins/select2/select2.min.js"></script>
	
</body>

</html>
