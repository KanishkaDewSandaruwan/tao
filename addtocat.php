<?php 
	require_once 'connection.php'; //insert connection to page
	require_once 'user.php'; //insert connection to page
	
	$id = $_REQUEST['food_id'];
	$getEmail = $_SESSION['email'];
	$cdate = date("Y/m/d m:H:s");

	$getDetail_Query = "SELECT * FROM food_items where food_id= '".$id."'";
	$getResult = mysqli_query($con,$getDetail_Query);

	$getCustomerDetail_Query = "SELECT * FROM customer where email='".$getEmail."'";
	$getResult_Customer = mysqli_query($con,$getCustomerDetail_Query);

	$getCartDetail_Query = "SELECT * FROM cart where food_id= '".$id."'AND email='".$getEmail."'";
	$getResult_Cart = mysqli_query($con,$getCartDetail_Query);

	if(mysqli_num_rows($getResult_Cart)>0){
	      echo "<script type=\"text/javascript\"> alert(\"Your Food Alrady in Cart\"); window.location= \"index.php\";</script>";
	}else{
		if ($row = mysqli_fetch_assoc($getResult)) { 
			$price = $row['price'];
			$fid = $row['fid'];
			if ($row1 = mysqli_fetch_assoc($getResult_Customer)) {

				$cuid = $row1['customer_id'];
				if (isset($_SESSION['email'])) {
						
						$qnty = '1';

						$q1="INSERT INTO cart(food_id,email,price,qty,trn_date,customer_id,fid) values('$id','$getEmail','$price','$qnty','$cdate','$cuid','$fid')";
		                $res1=mysqli_query($con,$q1);

		                if ($res1) {
		                	echo "<script type=\"text/javascript\"> alert(\"Food Added to Cart\"); window.location= \"index.php\";</script>";
		                }else{
		                	echo "<script type=\"text/javascript\"> alert(\"Cart Adding Fail\"); window.location= \"index.php\";</script>";
		                }

					}else{
						$qnty = '1';

						$q1="INSERT INTO cart(food_id,email,price,qty,trn_date,customer_id,fid) values('$id','$getEmail','$price','$qnty','$cdate','$cuid','$fid')";
		                $res1=mysqli_query($con,$q1);

		                if ($res1) {
		                	echo "<script type=\"text/javascript\"> alert(\"Food Added to Cart\"); window.location= \"index.php\";</script>";
		                }else{
		                	echo "<script type=\"text/javascript\"> alert(\"Cart Adding Fail\"); window.location= \"index.php\";</script>";
		                }
					}
				
			}
		}
	}
 ?>