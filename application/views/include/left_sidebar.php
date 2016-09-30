	<div id="left-sidebar" class="left-sidebar ">
			<!-- main-nav -->
			<div class="sidebar-scroll">
				<nav class="main-nav">
					<ul class="main-menu">
						<li class="<?php echo $menu_dashboard['active_dashboard'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span>
							<i class="<?php echo $menu_dashboard['icon_dashboard'];?>"></i></a>
							<ul class="<?php echo $menu_dashboard['sub_menu_open_dashboard'];?>">
								<?php 	if($this->menu_model->get_menu("dsb_lt")=="dsb_lt"){?>
								<li><a href="<?=base_url('main/leads_tot')?>"><span class="text">Leads Total</span></a></li>
								<?php } if($this->menu_model->get_menu("dsb_ld")=="dsb_ld"){?>
								<li><a href="<?=base_url('main/leads_by_dealer')?>"><span class="text">Leads By Dealer</span></a></li>
								<?php } if ($this->menu_model->get_menu("dsb_cpl")=="dsb_cpl"){?>
								<li><a href="<?=base_url('main/cost_per_leads')?>"><span class="text">Cost Per Leads</span></a></li>
								<?php }?>
							</ul>
						</li>
					<?php if($this->menu_model->get_parent("mst")=="mst"){?>
						<li class="<?php echo $menu_master['active_master'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-navicon"></i><span class="text">Master </span>
							<i class="<?php echo $menu_master['icon_master'];?>"></i></a>
							<ul class="<?php echo $menu_master['sub_menu_open_master'];?>">
							<?php if($this->menu_model->get_menu("mst_usr")=="mst_usr"){?>
								<li><a href="<?=base_url('master/users')?>"><span class="text">Users Dealer</span></a></li>
								<?php } if ($this->menu_model->get_menu("mst_usr_mb")=="mst_usr_mb"){?>
								<li><a href="<?=base_url('master/users_mbina')?>"><span class="text">Users Mbina</span></a></li>
								<?php } if ($this->menu_model->get_menu("mst_rol")=="mst_rol"){?>
								<li><a href="<?=base_url('master/users_role')?>"><span class="text"> Users Role</span></a></li>
								<?php } if ($this->menu_model->get_menu("mst_p")=="mst_p"){?>
								<li><a href="<?=base_url('master/position')?>"><span class="text">Position</span></a></li>
								<?php } if ($this->menu_model->get_menu("mst_out")=="mst_out"){?>
								<li><a href="<?=base_url('master/outlet')?>"><span class="text">Dealer</span></a></li>
								<?php } if ($this->menu_model->get_menu("mst_ec")=="mst_ec"){?>
								<li><a href="<?=base_url('master/event_category')?>"><span class="text">Event Category</span></a></li>
								<?php }?>
							</ul>
						</li>
						<?php }?>
						<?php if($this->menu_model->get_parent("sett")=="sett"){?>
						<li class="<?php echo $menu_setting['active_setting'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-gears fw"></i><span class="text">Setting</span>
							<i class="<?php echo $menu_setting['icon_setting'];?>"></i></a>
							<ul class="<?php echo $menu_setting['sub_menu_open_setting'];?>">
							<?php if($this->menu_model->get_menu("sett_rol")=="sett_rol"){?>
								<li><a href="<?=base_url('setting/role')?>"><span class="text">Role</span></a></li>
							<?php } if ($this->menu_model->get_menu("sett_bro")=="sett_bro"){?>
								<li><a href="<?=base_url('setting/brochure')?>"><span class="text">Brochure</span></a></li>
							<?php } if($this->menu_model->get_menu("sett_veh")=="sett_veh"){?>
								<li><a href="<?=base_url('setting/vehicle')?>"><span class="text">Vehicle</span></a></li>
							<?php }?>
							</ul>
						</li>
						<?php }?>
						<?php if($this->menu_model->get_parent("eve")=="eve"){?>
						<li class="<?php echo $menu_event['active_event'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i><span class="text">Event</span>
							<i class="<?php echo $menu_event['icon_event'];?>"></i></a>
							<ul class="<?php echo $menu_event['sub_menu_open_event'];?>">
							<?php if($this->menu_model->get_menu("eve_pre")=="eve_pre"){?>
							<li><a href="<?=base_url('event/pre_event')?>"><span class="text">Pre Event</span></a></li>
							<?php } if($this->menu_model->get_menu("eve_pos")=="eve_pos"){?>
							<li><a href="<?=base_url('event/post_event')?>"><span class="text">Post Event</span></a></li>	
							<?php }?>
							</ul>
						</li>
						<?php }?>
						<?php if($this->menu_model->get_parent("mar")=="mar"){?>
						<li class="<?php echo $menu_marketing['active_marketing'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-exchange"></i><span class="text">Marketing</span>
							<i class="<?php echo $menu_marketing['icon_marketing'];?>"></i></a>
							<ul class="<?php echo $menu_marketing['sub_menu_open_marketing'];?>">
							<?php if ($this->menu_model->get_menu("mar_sal")=="mar_sal"){?>
							<li><a href="<?=base_url('marketing/sales_pc_forecast')?>"><span class="text">Sales PC Forecast</span></a></li>
							<?php } if ($this->menu_model->get_menu("mar_q1")=="mar_q1"){?>
							<li><a href="<?=base_url('marketing/marketing_plan_q1')?>"><span class="text">Marketing Plan Q1</span></a></li>
							<?php } if($this->menu_model->get_menu("mar_q2")=="mar_q2"){?>
							<li><a href="<?=base_url('marketing/marketing_plan_q2')?>"><span class="text">Marketing Plan Q2</span></a></li>
							<?php } if($this->menu_model->get_menu("mar_q3")=="mar_q3"){?>
							<li><a href="<?=base_url('marketing/marketing_plan_q3')?>"><span class="text">Marketing Plan Q3</span></a></li>
							<?php } if($this->menu_model->get_menu("mar_q4")=="mar_q4"){?>
							<li><a href="<?=base_url('marketing/marketing_plan_q4')?>"><span class="text">Marketing Plan Q4</span></a></li>
							<?php }?>
							</ul>
						</li>
						<?php }?>
						<?php if($this->menu_model->get_parent("dea")=="dea"){?>
						<li class="<?php echo $menu_dealer['active_dealer'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-list-alt fw"></i><span class="text">Dealer</span>
							<i class="<?php echo $menu_dealer['icon_dealer'];?>"></i></a>
							<ul class="<?php echo $menu_dealer['sub_menu_open_dealer'];?>">
							<?php if($this->menu_model->get_menu("dea_lea")=="dea_lea"){?>
								<li><a href="<?=base_url('dealer/leads')?>"><span class="text">Leads</span></a></li>
							<?php } if($this->menu_model->get_menu("dea_cust")=="dea_cust"){?>	
								<li><a href="<?=base_url('dealer/customer')?>"><span class="text">Customer Data</span></a></li>
							<?php } if($this->menu_model->get_menu("dea_send")=="dea_send"){?>
								<li><a href="<?=base_url('dealer/mail')?>"><span class="text">Send Mail</span></a></li>
								<?php }?>
							</ul>
						</li>
						<?php }?>
						<?php if($this->menu_model->get_parent("new")=="new"){?>
						<li class="<?php echo $menu_newsletter['active_newsletter'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-envelope-o"></i><span class="text">News Letter and SMS</span>
							<i class="<?php echo $menu_newsletter['icon_newsletter'];?>"></i></a>
							<ul class="<?php echo $menu_newsletter['sub_menu_open_newsletter'];?>">
								<?php if ($this->menu_model->get_menu("new_mail")=="new_mail"){?>
								<li><a href="<?=base_url('newsletter/mail_broadcast')?>"><span class="text">Mail Broadcast</span></a></li>
								<?php } if($this->menu_model->get_menu("new_sms")=="new_sms"){?>
								<li><a href="<?=base_url('newsletter/sms_broadcast')?>"><span class="text">SMS Broadcast</span></a></li>
								<?php }?>
							</ul>
						</li>
						<?php }?>
						<!--  <li><a href="widgets.html"><i class="fa fa-puzzle-piece fa-fw"></i><span class="text">Widgets</span></a></li>-->

						<!-- <li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-table fw"></i><span class="text">Event</span>
							<i class="toggle-icon fa fa-angle-left"></i></a>
							<ul class="sub-menu ">
								<li><a href="tables-static-table.html"><span class="text">Dealer</span></a></li>
								<li><a href="tables-dynamic-table.html"><span class="text">Dynamic Table</span></a></li>
							</ul>
						</li>
						<!--<li><a href="typography.html"><i class="fa fa-font fa-fw"></i><span class="text">Typography</span></a></li>
						<li>
							<a href="#" class="js-sub-menu-toggle"><i class="fa fa-bars"></i>
								<span class="text">Menu Lvl 1</span>
								<i class="toggle-icon fa fa-angle-left"></i>
							</a>
							<ul class="sub-menu">
								<li class="">
									<a href="#" class="js-sub-menu-toggle">
										<span class="text">Menu Lvl 2</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li><a href="#">Menu Lvl 3</a></li>
										<li><a href="#">Menu Lvl 3</a></li>
										<li><a href="#">Menu Lvl 3</a></li>
									</ul>
								</li>
								<li>
									<a href="#">
										<span class="text">Menu Lvl 2</span>
									</a>
								</li>
							</ul>
						</li>-->
					</ul>
				</nav>
				<!-- /main-nav -->
			</div>
		</div>