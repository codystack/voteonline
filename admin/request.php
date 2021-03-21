<?php
$page = 'Request';
require_once "../config/controller.php";
include "./components/header.php"; 
?>

	<div class="wrapper">
		<?php include "./components/sidenav.php"; ?>
		
		<div class="main">
			<?php include "./components/topnav.php"; ?>

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Application Request
						</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"></h5>
									<h6 class="card-subtitle text-muted"></h6>
								</div>
								<div class="card-body">
									<table id="datatables-basic" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>S/N</th>
												<th>Full Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Date</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$request_query = "SELECT * FROM getstarted order by date ASC";
											$result = mysqli_query($conn, $request_query);
											if (mysqli_num_rows($result) > 0) {
												// output data of each row
												while($row = mysqli_fetch_assoc($result)) {
													$id = $row['id'];
													$firstName= $row['firstName'];
													$lastName = $row['lastName'];
													$phoneNum = $row['phoneNum'];
													$company = $row['company'];
													$email = $row['email'];
													$date = $row['date'];

											echo "<tr>";
												echo "<td>" .$id. "</td>";
												echo "<td>" .$firstName. "  " .$lastName. "</td>";
												echo "<td>" .$phoneNum. "</td>";
												echo "<td>" .$email. "</td>";
												echo "<td>" .date("d(D) M Y", strtotime($date)). "</td>";
												echo "<td class=\"text-right\">"
												."<button class=\"btn btn-primary userinfo btn-sm\" data-id='".$id."'><i class='far fa-eye'></i> View</button>
												<button class=\"btn btn-danger btn-sm\"><i class=\"far fa-trash-alt\"></i> Delete</button>".
												"</td>";
											"</tr>";
												}
											}else {
												echo "<td><p>No Request Yet!</p></td>";
											}
											if (isset($_GET['deleteid'])){
												$del_selected = mysqli_query($con, "DELETE FROM userss WHERE id = '".$_GET['deleteid']."'");
												mysqli_query($con,"ALTER TABLE users AUTO_INCREMENT = 1");
												echo "<meta http-equiv=\"refresh\" content=\"0;URL=contestants\">";
												exit();
											}
											?>
										</tbody>
										<tfoot>
											<tr>
												<th>S/N</th>
												<th>Full Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Date</th>
												<th>Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>

					</div>
				</div>
			</main>

			<!-- Request Modal -->
			<div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="requestModal">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Get Started Request</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body m-3">

						</div>
						<!--
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Close</button>
						</div>
						-->
					</div>
				</div>
			</div>

<?php include "./components/footer.php"; ?>	