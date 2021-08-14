<?php
include('database/config.php'); 
include('include/head.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_users WHERE user_id = '$id' AND acc_stat='1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!-- Courses -->

<div class="courses" style="margin-top: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="section_title text-center"><h1><?php echo $row['first_name'].' '. $row['last_name'] ?></h1></div>
			</div>

		</div>

	</div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-3">
				<img src="elearnasset/images/teacher_avatar.png" class="rounded-circle">
			</div>
			<div class="col-md-9">
				<div class="card shadow">
					<div class="card-body">
						<table class="table table-hover">
							<tr>
								<th>First Name :</th><td><?php echo $row['first_name'] ?></td>
							</tr>	
							<tr>
								<th>Last Name :</th><td><?php echo $row['last_name'] ?></td>
							</tr>	

							<tr>
								<th>Gender :</th><td><?php echo $row['gender'] ?></td>
							</tr>	
							<tr>
								<th>Email :</th><td><?php echo $row['email'] ?></td>
							</tr>	
							<tr>
								<th>Mobile :</th><td><?php echo $row['phone'] ?></td>
							</tr>	
							<tr>
								<th>Department :</th><td><?php echo $row['department'] ?></td>
							</tr>
							<tr>
								<th>Branch :</th><td><?php echo $row['category'] ?></td>
							</tr>	
						</table>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php 
	include('include/footer.php');
?>