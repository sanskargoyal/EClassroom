<?php
// Set timezone 
date_default_timezone_set('Asia/Kolkata'); 
include '../../database/config.php';
include '../../includes/uniques.php';
$student_id = 'S'.get_rand_numbers(3).'-'.get_rand_numbers(3).'-'.get_rand_numbers(3).'';
$fname = ucwords(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = ucwords(mysqli_real_escape_string($conn, $_POST['lname']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$sql = "SELECT * FROM tbl_users WHERE email = '$email' OR phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
	$sph = $row['phone'];
	if ($sem == $email) {
	 header("location:../institute.php?rp=1189");	
	}else{
	
	if ($sph == $phone) {
	 header("location:../institute.php?rp=2074");	
	}else{
		
	}
	
	}
	
    }
} else {

$sql = "INSERT INTO tbl_users (user_id, first_name, last_name, gender, dob, address, email, phone, role)
VALUES ('$student_id', '$fname', '$lname', '$gender', '$dob', '$address', '$email', '$phone', 'admin')";

if ($conn->query($sql) === TRUE) {
  header("location:../institute.php?rp=6310");
} else {
  header("location:../institute.php?rp=9157");
}


}

$conn->close();
?>