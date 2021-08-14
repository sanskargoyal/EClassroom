<?php
$faculty_id = $_POST['faculty_id'];
include '../../database/config.php';
$fname = ucwords(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = ucwords(mysqli_real_escape_string($conn, $_POST['lname']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$department = mysqli_real_escape_string($conn, $_POST['department']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$sql = "SELECT * FROM tbl_users WHERE email = '$email' AND user_id !='$faculty_id' OR phone = '$phone' AND user_id !='$faculty_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
	$sph = $row['phone'];
	if ($sem == $email) {
	 header("location:../edit-faculty.php?rp=1189&fid=$faculty_id");	
	}else{
	
	if ($sph == $phone) {
	 header("location:../edit-faculty.php?rp=2074&fid=$faculty_id");	
	}else{
		
	}
	
	}
	
    }
} else {

$sql = "UPDATE tbl_users SET first_name = '$fname', last_name = '$lname', gender = '$gender', dob = '$dob', address = '$address', email = '$email', phone = '$phone', department = '$department', category = '$category', role = 'faculty' WHERE user_id='$faculty_id'";

if ($conn->query($sql) === TRUE) {
  header("location:../edit-faculty.php?rp=7823&fid=$faculty_id");
} else {
  header("location:../edit-faculty.php?rp=1298&fid=$faculty_id");
}


}

$conn->close();
?>