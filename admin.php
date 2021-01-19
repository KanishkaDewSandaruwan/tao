<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login/adminlogin/admin_login.php');
	}
?>