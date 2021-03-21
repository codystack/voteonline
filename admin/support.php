<?php
$page = 'Support';
require_once "../config/controller.php";
include "./components/header.php"; 
?>

	<div class="wrapper">
		<?php include "./components/sidenav.php"; ?>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex mr-2">
            <i class="hamburger align-self-center"></i>
          </a>

				<form class="form-inline d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-toggle="dropdown">
                <i class="align-middle fas fa-envelope-open"></i>
              </a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Michelle Bilodeau</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">5m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Kathie Burton</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Alexander Groves</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
											</div>
											<div class="col-10 pl-2">
												<div class="text-dark">Daisy Seger</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ml-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-toggle="dropdown">
                <i class="align-middle fas fa-bell"></i>
                <span class="indicator"></span>
              </a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row no-gutters align-items-center">
											<div class="col-2">
												<i class="ml-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ml-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
                <i class="align-middle fas fa-cog"></i>
              </a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>

			</nav>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Chat
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard-default.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chat</li>
							</ol>
						</nav>
					</div>
					<div class="card">
						<div class="row no-gutters">
							<div class="col-12 col-lg-5 col-xl-3 border-right">

								<div class="px-4 d-none d-md-block">
									<div class="media align-items-center">
										<div class="media-body">
											<input type="text" class="form-control my-3" placeholder="Search...">
										</div>
									</div>
								</div>

								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="badge badge-success float-right">5</div>
									<div class="media">
										<img src="img/avatars/avatar-5.jpg" class="rounded-circle mr-1" alt="Michelle Bilodeau" width="40" height="40">
										<div class="media-body ml-3">
											Michelle Bilodeau
											<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="badge badge-success float-right">2</div>
									<div class="media">
										<img src="img/avatars/avatar-2.jpg" class="rounded-circle mr-1" alt="Alexander Groves" width="40" height="40">
										<div class="media-body ml-3">
											Alexander Groves
											<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="media">
										<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
										<div class="media-body ml-3">
											Kathie Burton
											<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="media">
										<img src="img/avatars/avatar-4.jpg" class="rounded-circle mr-1" alt="Daisy Seger" width="40" height="40">
										<div class="media-body ml-3">
											Daisy Seger
											<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="media">
										<img src="img/avatars/avatar-5.jpg" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
										<div class="media-body ml-3">
											Fiona Green
											<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="media">
										<img src="img/avatars/avatar-2.jpg" class="rounded-circle mr-1" alt="Doris Wilder" width="40" height="40">
										<div class="media-body ml-3">
											Doris Wilder
											<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="media">
										<img src="img/avatars/avatar-4.jpg" class="rounded-circle mr-1" alt="Haley Kennedy" width="40" height="40">
										<div class="media-body ml-3">
											Haley Kennedy
											<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item list-group-item-action border-0">
									<div class="media">
										<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
										<div class="media-body ml-3">
											Jennifer Chang
											<div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
										</div>
									</div>
								</a>

								<hr class="d-block d-lg-none mt-1 mb-0" />
							</div>
							<div class="col-12 col-lg-7 col-xl-9">
								<div class="py-2 px-4 border-bottom d-none d-lg-block">
									<div class="media align-items-center py-1">
										<div class="position-relative">
											<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
										</div>
										<div class="media-body pl-3">
											<strong>Kathie Burton</strong>
											<div class="text-muted small"><em>Typing...</em></div>
										</div>
										<div>
											<button class="btn btn-primary btn-lg mr-1 px-3"><i class="feather-lg" data-feather="phone"></i></button>
											<button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><i class="feather-lg" data-feather="video"></i></button>
											<button class="btn btn-light border btn-lg px-3"><i class="feather-lg" data-feather="more-horizontal"></i></button>
										</div>
									</div>
								</div>

								<div class="position-relative">
									<div class="chat-messages p-4">

										<div class="chat-message-right pb-4">
											<div>
												<img src="img/avatars/avatar.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:33 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
												<div class="font-weight-bold mb-1">You</div>
												Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
											</div>
										</div>

										<div class="chat-message-left pb-4">
											<div>
												<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:34 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
												<div class="font-weight-bold mb-1">Kathie Burton</div>
												Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
											</div>
										</div>

										<div class="chat-message-right mb-4">
											<div>
												<img src="img/avatars/avatar.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:35 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
												<div class="font-weight-bold mb-1">You</div>
												Cum ea graeci tractatos.
											</div>
										</div>

										<div class="chat-message-left pb-4">
											<div>
												<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:36 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
												<div class="font-weight-bold mb-1">Kathie Burton</div>
												Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius
												quam ac venenatis tempus.
											</div>
										</div>

										<div class="chat-message-left pb-4">
											<div>
												<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:37 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
												<div class="font-weight-bold mb-1">Kathie Burton</div>
												Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
											</div>
										</div>

										<div class="chat-message-right mb-4">
											<div>
												<img src="img/avatars/avatar.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:38 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
												<div class="font-weight-bold mb-1">You</div>
												Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
											</div>
										</div>

										<div class="chat-message-left pb-4">
											<div>
												<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:39 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
												<div class="font-weight-bold mb-1">Kathie Burton</div>
												Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
											</div>
										</div>

										<div class="chat-message-right mb-4">
											<div>
												<img src="img/avatars/avatar.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:40 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
												<div class="font-weight-bold mb-1">You</div>
												Cum ea graeci tractatos.
											</div>
										</div>

										<div class="chat-message-right mb-4">
											<div>
												<img src="img/avatars/avatar.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:41 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
												<div class="font-weight-bold mb-1">You</div>
												Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim metus urna eget purus.
											</div>
										</div>

										<div class="chat-message-left pb-4">
											<div>
												<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:42 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
												<div class="font-weight-bold mb-1">Kathie Burton</div>
												Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit. Proin ultricies placerat imperdiet. Morbi varius
												quam ac venenatis tempus.
											</div>
										</div>

										<div class="chat-message-right mb-4">
											<div>
												<img src="img/avatars/avatar.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:43 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
												<div class="font-weight-bold mb-1">You</div>
												Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
											</div>
										</div>

										<div class="chat-message-left pb-4">
											<div>
												<img src="img/avatars/avatar-3.jpg" class="rounded-circle mr-1" alt="Kathie Burton" width="40" height="40">
												<div class="text-muted small text-nowrap mt-2">2:44 am</div>
											</div>
											<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
												<div class="font-weight-bold mb-1">Kathie Burton</div>
												Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
											</div>
										</div>

									</div>
								</div>

								<div class="flex-grow-0 py-3 px-4 border-top">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type your message">
										<div class="input-group-append">
											<button class="btn btn-primary">Send</button>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</main>
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-8 text-left">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms of Service</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Contact</a>
								</li>
							</ul>
						</div>
						<div class="col-4 text-right">
							<p class="mb-0">
								&copy; 2020 - <a href="dashboard-default.html" class="text-muted">Spark</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>

	<svg width="0" height="0" style="position:absolute">
    <defs>
      <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
        <path
          d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
        </path>
      </symbol>
    </defs>
  </svg>
	<script src="js/app.js"></script>

	<script>
		// Chat
		$(function() {
			$('.chat-messages').scrollTop($('.chat-messages')[0].scrollHeight);
		});
	</script>
</body>


<!-- Mirrored from spark.bootlab.io/pages-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 00:19:12 GMT -->
</html>