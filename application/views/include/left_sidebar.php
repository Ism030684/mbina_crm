	<div id="left-sidebar" class="left-sidebar ">
			<!-- main-nav -->
			<div class="sidebar-scroll">
				<nav class="main-nav">
					<ul class="main-menu">
						<li class="<?php echo $menu_dashboard['active_dashboard'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-dashboard fa-fw"></i><span class="text">Dashboard</span>
							<i class="<?php echo $menu_dashboard['icon_dashboard'];?>"></i></a>
							<ul class="<?php echo $menu_dashboard['sub_menu_open_dashboard'];?>">
								<li><a href="<?=base_url('main/leads_tot')?>"><span class="text">Leads Total</span></a></li>
								<li><a href="<?=base_url('main/leads_by_dealer')?>"><span class="text">Leads By Dealer</span></a></li>
								<li><a href="<?=base_url('main/cost_per_leads')?>"><span class="text">Cost Per Leads</span></a></li>
								
							</ul>
						</li>
						<li class="<?php echo $menu_master['active_master'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-navicon"></i><span class="text">Master </span>
							<i class="<?php echo $menu_master['icon_master'];?>"></i></a>
							<ul class="<?php echo $menu_master['sub_menu_open_master'];?>">
								<li><a href="<?=base_url('master/users')?>"><span class="text">Users Dealer</span></a></li>
								<li><a href="<?=base_url('master/users_mbina')?>"><span class="text">Users Mbina</span></a></li>
								
								<li><a href="<?=base_url('master/users_role')?>"><span class="text"> Role</span></a></li>
								<li><a href="<?=base_url('master/position')?>"><span class="text">Position</span></a></li>
								
								<!--  <li><a href="<?=base_url('master/department')?>"><span class="text">Department</span></a></li>-->
								<!--  <li><a href="<?=base_url('master/group_dealer')?>"><span class="text">Group Dealer</span></a></li>-->
								<li><a href="<?=base_url('master/outlet')?>"><span class="text">Dealer</span></a></li>
								<li><a href="<?=base_url('master/event_category')?>"><span class="text">Event Category</span></a></li>
							</ul>
						</li>
						<li class="<?php echo $menu_setting['active_setting'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-gears fw"></i><span class="text">Setting</span>
							<i class="<?php echo $menu_setting['icon_setting'];?>"></i></a>
							<ul class="<?php echo $menu_setting['sub_menu_open_setting'];?>">
								<li><a href="<?=base_url('setting/role')?>"><span class="text">Role</span></a></li>
								<!--  <li><a href="<?=base_url('setting/group_dealer')?>"><span class="text">Group Dealer</span></a></li>-->
								<li><a href="<?=base_url('setting/brochure')?>"><span class="text">Brochure</span></a></li>
								<li><a href="<?=base_url('setting/vehicle')?>"><span class="text">Vehicle</span></a></li>
							</ul>
						</li>
						<li class="<?php echo $menu_event['active_event'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i><span class="text">Event</span>
							<i class="<?php echo $menu_event['icon_event'];?>"></i></a>
							<ul class="<?php echo $menu_event['sub_menu_open_event'];?>">
								<!-- <li><a href="<?=base_url('event/proposed')?>"><span class="text">Proposed Form</span></a></li>
								<li><a href="<?=base_url('event/feature')?>"><span class="text">Feature</span></a></li>
								<li><a href="<?=base_url('event/participant')?>"><span class="text"> Participant</span></a></li>
								<li><a href="<?=base_url('event/picture')?>"><span class="text">Picture Event</span></a></li>
							<li><a href="<?=base_url('event/approval')?>"><span class="text"> Mbina Approval </span></a></li>-->
							<li><a href="<?=base_url('event/pre_event')?>"><span class="text">Pre Event</span></a></li>
							<li><a href="<?=base_url('event/post_event')?>"><span class="text">Post Event</span></a></li>
							<li><a href="<?=base_url('event/post_event')?>"><span class="text">Post Event Report</span></a></li>	
							</ul>
						</li>
						<li class="<?php echo $menu_marketing['active_marketing'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-exchange"></i><span class="text">Marketing</span>
							<i class="<?php echo $menu_marketing['icon_marketing'];?>"></i></a>
							<ul class="<?php echo $menu_marketing['sub_menu_open_marketing'];?>">
							<li><a href="<?=base_url('marketing/sales_pc_forecast')?>"><span class="text">Sales PC Forecast</span></a></li>
							<li><a href="<?=base_url('marketing/marketing_plan_q1')?>"><span class="text">Marketing Plan Q1</span></a></li>
							<li><a href="<?=base_url('marketing/marketing_plan_q2')?>"><span class="text">Marketing Plan Q2</span></a></li>
							<li><a href="<?=base_url('marketing/marketing_plan_q3')?>"><span class="text">Marketing Plan Q3</span></a></li>
							<li><a href="<?=base_url('marketing/marketing_plan_q4')?>"><span class="text">Marketing Plan Q4</span></a></li>
							</ul>
						</li>
						<li class="<?php echo $menu_dealer['active_dealer'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-list-alt fw"></i><span class="text">Dealer</span>
							<i class="<?php echo $menu_dealer['icon_dealer'];?>"></i></a>
							<ul class="<?php echo $menu_dealer['sub_menu_open_dealer'];?>">
								<li><a href="<?=base_url('dealer/leads')?>"><span class="text">Leads</span></a></li>
								<li><a href="<?=base_url('dealer/customer')?>"><span class="text">Customer Data</span></a></li>
								<li><a href="<?=base_url('dealer/mail')?>"><span class="text">Send Mail</span></a></li>
								
							</ul>
						</li>
						<li class="<?php echo $menu_newsletter['active_newsletter'];?>"><a href="#" class="js-sub-menu-toggle"><i class="fa fa-envelope-o"></i><span class="text">News Letter and SMS</span>
							<i class="<?php echo $menu_newsletter['icon_newsletter'];?>"></i></a>
							<ul class="<?php echo $menu_newsletter['sub_menu_open_newsletter'];?>">
								<li><a href="<?=base_url('newsletter/mail_broadcast')?>"><span class="text">Mail Broadcast</span></a></li>
								<li><a href="<?=base_url('newsletter/sms_broadcast')?>"><span class="text">SMS Broadcast</span></a></li>
								
							</ul>
						</li>
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