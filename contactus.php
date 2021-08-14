<?php
include('database/config.php'); 
include('include/head.php');
include('includes/uniques.php');

if(isset($_POST['submit'])){
	$contact_id = 'CONT-'.get_rand_numbers(6).'';
	$name = ucwords(mysqli_real_escape_string($conn, $_POST['name']));
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = ucwords(mysqli_real_escape_string($conn, $_POST['subject']));
	$message = ucwords(mysqli_real_escape_string($conn, $_POST['message']));

	$sql = "INSERT INTO tbl_contacts(contact_id, name, email, subject, message) VALUES('$contact_id', '$name', '$email', '$subject', '$message')";
	$query = mysqli_query($conn, $sql);
	if($query){
		echo '<script>alert("Your query has been successfully submited.")</script>';
		echo '<script>location.href="contactus.php"</script>';
	}else{
		echo '<script>alert("Unable to submit your query, Please try again later.")</script>';
		echo '<script>location.href="contactus.php"</script>';
	}

}
?>

<!-- Courses -->

<div class="courses" style="margin-top: 100px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="section_title text-center"><h1>Contact Us</h1></div>
				<!-- <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div> -->
			</div>
		</div>

	</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="footer_contact_item">
				<div class="footer_contact_title">Address:</div>
				<div class="footer_contact_line">1481 Creekside Lane Avila Beach, CA 93424</div>
			</div>
			<div class="footer_contact_item">
				<div class="footer_contact_title">Phone:</div>
				<div class="footer_contact_line">+53 345 7953 32453</div>
			</div>
			<div class="footer_contact_item">
				<div class="footer_contact_title">Email:</div>
				<div class="footer_contact_line">yourmail@gmail.com</div>
			</div>
		</div>
		<div class="col-md-8 jumbotron">
			<form action="" method="POST">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control shadow">
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Email" class="form-control shadow-sm">
				</div>
				<div class="form-group">
					<input type="text" name="subject" placeholder="Subject" class="form-control shadow-sm">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
				</div>
				<input value="Submit" name="submit" type="submit" class="btn btn-success text-light" style="color: #FFFFFF; background: #ff8a00; display: block; font-size: 12px; font-weight: 600; line-height: 31px; padding-left: 19px; padding-right: 19px; text-transform: uppercase; transition: all 200ms ease; border:none;">
			</form>	
		</div>
	</div>
</div>
<?php 
include('include/footer.php');
?>