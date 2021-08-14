<?php
include '../../database/config.php';
$fac_id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "UPDATE tbl_users SET acc_stat='0' WHERE user_id='$fac_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../faculty.php?rp=7823");
} else {
    header("location:../faculty.php?rp=1298");
}

$conn->close();
?>
