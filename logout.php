<?php
include 'connection.php';

session_start();
	session_destroy();
	session_unset();

	header('location:login/adminlogin/admin_login.php');
?>