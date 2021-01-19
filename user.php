<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:login/userlogin/login.php');
	}
?>