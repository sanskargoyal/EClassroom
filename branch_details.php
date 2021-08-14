<?php
include('database/config.php'); 
include('include/head.php');
$branch = $_GET['dept'];


?>

<!-- Courses -->

<div class="courses" style="margin-top: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="section_title text-center"><h2><?php echo "$branch" ?></h2></div>
				<div class="section_subtitle">
					<?php 
					$cat_details = "SELECT * FROM tbl_categories WHERE name = '$branch'";
					$cat_query = mysqli_query($conn, $cat_details);
					if(mysqli_num_rows($cat_query)>0){
						$cat_row = mysqli_fetch_array($cat_query);

						echo $cat_row['description'];
					}else{
						echo $branch;
					}
					?>
				</div>
			</div>
		</div>
		<h2 class="mt-5">Subjects</h2><hr>
		<div class="row">

			<?php 
			$sql = "SELECT * FROM tbl_subjects WHERE category = '$branch' AND status = 'Active'";
			$res = mysqli_query($conn, $sql);
			if(mysqli_num_rows($res)>0){
				while($row=mysqli_fetch_array($res)){
					?>
					<div class="col-md-6 mt-2">
						<p style="font-size: 20px;" class="font-weight-bold"><?php echo $row['name'] ?></p>
					</div>
					<div class="col-md-2 mt-2">
						<a href="" class="btn btn-success text-light" style="color: #FFFFFF; background: #ff8a00; display: block; font-size: 12px; font-weight: 600; line-height: 31px; padding-left: 19px; padding-right: 19px; text-transform: uppercase; transition: all 200ms ease; border:none;">View Details</a>
					</div>
					<?php
				}
			}else{
				echo "No Subjects are found.";
			}

			?>
		</div><hr>
		<h2 class="mt-5">Faculty</h2><hr>
		<div class="row">
			<?php 
			$sql = "SELECT * FROM tbl_users WHERE category = '$branch' AND role='faculty' AND acc_stat = '1'";
			$res = mysqli_query($conn, $sql);
			if(mysqli_num_rows($res)>0){
				while($row=mysqli_fetch_array($res)){
					?>
					<div class="col-md-6 mt-2">
						<p style="font-size: 20px;" class="font-weight-bold"><?php echo $row['first_name'] .' '. $row['last_name'] ?></p>
					</div>
					<div class="col-md-2 mt-2">
						<a href="faculty_details.php?id=<?php echo $row['user_id'] ?>" class="btn btn-success text-light" style="color: #FFFFFF; background: #ff8a00; display: block; font-size: 12px; font-weight: 600; line-height: 31px; padding-left: 19px; padding-right: 19px; text-transform: uppercase; transition: all 200ms ease; border:none;">View Details</a>
					</div>
					<?php 
				}
			}
			?>
		</div>
	</div>
</div>
<?php 
include('include/footer.php');
?>