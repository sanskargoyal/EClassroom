<?php
include '../../database/config.php';
$faculty_id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "DELETE FROM tbl_users WHERE user_id='$faculty_id'";

if ($conn->query($sql) === TRUE) {
    header("location:../faculty.php?rp=7823");
} else {
    header("location:../faculty.php?rp=1298");
}

$conn->close();
?>
