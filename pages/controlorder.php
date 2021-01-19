<?php 

require_once '../connection.php';
require_once '../admin.php'; //Check login 

if(isset($_REQUEST['accept']))
{
	$id = $_REQUEST['accept'];

		$query3="UPDATE getorder SET accept='Accepted' WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=1\";</script>";
}
else if(isset($_REQUEST['acceptshiped']))
{
	$id = $_REQUEST['acceptshiped'];

		$query3="UPDATE getorder SET accept='Accepted', shipped='Shipped'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=1\";</script>";
}
else if(isset($_REQUEST['reject']))
{
	$id = $_REQUEST['reject'];

		$query3="UPDATE getorder SET accept='Reject', shipped='Reject'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=1\";</script>";
}
else if(isset($_REQUEST['rejectshiped']))
{
	$id = $_REQUEST['rejectshiped'];

		$query3="UPDATE getorder SET accept='Reject', shipped='Reject'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=3\";</script>";
}
else if(isset($_REQUEST['rejectaccept']))
{
	$id = $_REQUEST['rejectaccept'];

		$query3="UPDATE getorder SET accept='Reject', shipped='Reject'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=2\";</script>";
}
else if(isset($_REQUEST['paided']))
{
	$id = $_REQUEST['paided'];

		$query3="UPDATE getorder SET paid='Paid', deliver='Diliverd'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=3\";</script>";
}
else if(isset($_REQUEST['shiped']))
{
	$id = $_REQUEST['shiped'];

		$query3="UPDATE getorder SET shipped='Shipped'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=2\";</script>";
}
else if(isset($_REQUEST['diliverd']))
{
	$id = $_REQUEST['diliverd'];

		$query3="UPDATE getorder SET deliver='Diliverd'  WHERE order_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=3\";</script>";
}
else if(isset($_REQUEST['deletecomplete']))
{
	$id = $_REQUEST['deletecomplete'];

		$query3="DELETE FROM getorder WHERE order_id='$id '";
		$sql3=mysqli_query($con,$query3);

		
		
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=4\";</script>";
}
else if(isset($_REQUEST['deletereject']))
{
	$id = $_REQUEST['deletereject'];

		$query3="DELETE FROM getorder WHERE order_id='$id '";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=5\";</script>";
}
else if(isset($_REQUEST['deleterejectwithoutpaid']))
{
	$id = $_REQUEST['deleterejectwithoutpaid'];

		$query3="DELETE FROM getorder WHERE order_id='$id '";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"ordermanager.php?id=6\";</script>";
}

 ?>