<div class="top-bar navbar-fixed-top">
			<div class="container">
				<div class="clearfix">
					<a href="#" class="pull-left toggle-sidebar-collapse"><i class="fa fa-bars"></i></a>
					<!-- logo -->
					<div class="pull-left left logo">
						<a href="index.html"><img src="<?=base_url()?>assets/img/mercy_main3.png" alt="KingAdmin - Admin Dashboard" /></a>
						<h1 class="sr-only">KingAdmin Admin Dashboard</h1>
					</div>
					<!-- end logo -->
					<div class="pull-right right">
						<!-- search box -->
				
						<!-- end search box -->
						<!-- top-bar-right -->
						<div class="top-bar-right">
							<div class="notifications">
								<ul>
									
									<!-- notification: inbox -->
									<li class="notification-item inbox">
										<div class="btn-group">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-envelope"></i><span class="count">2</span>
												<span class="circle"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li class="notification-header">
													<em>You have 2 unread messages</em>
												</li>
												<li class="inbox-item clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="<?php echo base_url();?>assets/img/user1.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Antonius</h5>
																<p class="text">The problem just happened this morning. I can't see ...</p>
																<span class="timestamp">4 minutes ago</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item unread clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="<?php echo base_url();?>assets/img/user2.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Michael</h5>
																<p class="text">Hey dude, cool theme!</p>
																<span class="timestamp">2 hours ago</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item unread clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="<?php echo base_url();?>assets/img/user3.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Stella</h5>
																<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
																<span class="timestamp">Oct 6</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="<?php echo base_url();?>assets/img/user4.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">Jane Doe</h5>
																<p class="text"><i class="fa fa-reply"></i> Please check the status of your ...</p>
																<span class="timestamp">Oct 2</span>
															</div>
														</div>
													</a>
												</li>
												<li class="inbox-item clearfix">
													<a href="#">
														<div class="media">
															<div class="media-left">
																<img class="media-object" src="<?php echo base_url();?>assets/img/user5.png" alt="Antonio">
															</div>
															<div class="media-body">
																<h5 class="media-heading name">John Simmons</h5>
																<p class="text"><i class="fa fa-reply"></i> I've fixed the problem :)</p>
																<span class="timestamp">Sep 12</span>
															</div>
														</div>
													</a>
												</li>
												<li class="notification-footer">
													<a href="#">View All Messages</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<!-- logged user and the menu -->
							<div class="logged-user">
								<div class="btn-group">
									<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
										<!--  <img src="<?=base_url()?>assets/img/user-avatar.png" alt="User Avatar" />-->
										<span class="name"><?php echo $this->session->userdata('first_name');?> <?php echo $this->session->userdata('last_name');?></span> <span class="caret"></span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">
												<i class="fa fa-user"></i>
												<span class="text">Profile</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-cog"></i>
												<span class="text">Settings</span>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url('welcome/logout')?>">
												<i class="fa fa-power-off"></i>
												<span class="text">Logout</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- end logged user and the menu -->
						</div>
						<!-- end top-bar-right -->
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>