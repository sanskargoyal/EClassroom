<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
	$email = $_SESSION['email'];
	$myrole = $_SESSION['role'];
	if ($myrole == "super_admin") {
		
	}else{
	header("location:../?rp=9135");	
	}
}else{
	header("location:../?rp=9422");
}

?>