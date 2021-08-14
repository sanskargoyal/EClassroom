<?php
include('database/config.php'); 
include('include/head.php');
?>

<!-- Courses -->

<div class="courses" style="margin-top: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="section_title text-center"><h2>Functionaries of UIET</h2></div>
			</div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-md-10">
				<div class="card"> 	
					<table class="table table-hover">
						<tr>
							<th>Name</th>
							<th>Designation</th>
							<th>Phone</th>
						</tr>
						<tr>
							<td>Prof. (Dr.) Neelima Gupta</td>
							<td>Vice Chancellor</td>
							<td>2570450, 2570863</td>
						</tr>
						<tr>
							<td>Dr. Anil Yadav</td>
							<td>Registrar</td>
							<td>2570301</td>
						</tr>
						<tr>
							<td>Dr. Ravindra Nath</td>
							<td>Director(UIET)</td>
							<td>2570636</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-10 offset-lg-1">
				<div class="section_title text-center"><h2>Faculties of UIET</h2>
					<h5 class="mt-4">Department of Information Technology</h5>
				</div>
				<!-- <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div> -->
			</div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-md-10">
				<div class="card">
					<table class="table table-hover">
						<tr>
							<th>Name</th>
							<th>Phone</th>
						</tr>
						<?php 
						$sql = "SELECT * FROM tbl_users WHERE category = 'Information Technology' AND role='faculty' AND acc_stat = '1'";
						$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)>0){
							while($row=mysqli_fetch_array($result)){
								?>

								<tr>
									<td><?php echo $row['first_name'] .' '. $row['last_name'] ?></td>
									<td><?php echo $row['phone'] ?></td>
								</tr>
								<?php
							}
						}
						?>
					</table>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-10 offset-lg-1">
				<div class="section_title text-center">
					<h5>Department of Computer Science & Engineering</h5>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-md-10">
				<div class="card">
					<table class="table table-hover">
						<tr>
							<th>Name</th>
							<th>Phone</th>
						</tr>
						<?php 
						$sql = "SELECT * FROM tbl_users WHERE category = 'Computer Science' AND role='faculty' AND acc_stat = '1'";
						$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)>0){
							while($row=mysqli_fetch_array($result)){
								?>

								<tr>
									<td><?php echo $row['first_name'] .' '. $row['last_name'] ?></td>
									<td><?php echo $row['phone'] ?></td>
								</tr>
								<?php
							}
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>
<?php 
include('include/footer.php');
?>