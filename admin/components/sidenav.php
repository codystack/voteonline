<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="\">
				<img src="https://i.imgur.com/eOj70Vz.png" style="width: 220px;">
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="https://i.imgur.com/WKOInUn.png" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="font-weight-bold"><?php echo $_SESSION['firstname']?> <?php echo $_SESSION['lastname']?></div>
					<small><?php echo $_SESSION['username']?></small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Navigation
					</li>
					<li class="sidebar-item <?php if($page=='Dashboard'){echo 'active';}?>">
						<a href="dashboard" class="sidebar-link">
                            <i class="align-middle mr-2 fas fa-fw fa-align-left"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>
                    <li class="sidebar-item <?php if($page=='Request'){echo 'active';}?>">
						<a href="request" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-paper-plane"></i> <span class="align-middle">Signup Request</span>
						</a>
					</li>
                    <li class="sidebar-item <?php if($page=='Clients'){echo 'active';}?>">
						<a href="clients" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-users"></i> <span class="align-middle">Clients</span>
						</a>
					</li>
                    <li class="sidebar-item <?php if($page=='Support'){echo 'active';}?>">
						<a href="support" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-comments"></i> <span class="align-middle">Support</span>
						</a>
					</li>
                    <li class="sidebar-item <?php if($page=='Profile'){echo 'active';}?>">
						<a href="profile" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-user"></i> <span class="align-middle">Profile</span>
						</a>
					</li>
					<li class="">
						<a href="logout" class="sidebar-link">
							<i class="align-middle mr-2 fas fa-fw fa-sign-out-alt"></i> <span class="align-middle">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>