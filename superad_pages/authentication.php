<?php
include '../database/config.php';
$myusername = mysqli_real_escape_string($conn, $_POST['user']);
$mypassword = $_POST['login'];

$sql = "SELECT * FROM tbl_super_admins WHERE password = '$mypassword' OR email = '$myusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    session_start();
	$_SESSION['login'] = true;
	$_SESSION['email'] = $row['email'];
	$_SESSION['role'] = $row['role'];
	$accstat = $row['acc_stat'];
	if ($accstat == "0") {
	 header("location:../superad/?rp=5732");	
	}else{
	header("location:../superadmin/");	
	}

    }
} else {
    header("location:../superad/?rp=0912");
}
$conn->close();

?>