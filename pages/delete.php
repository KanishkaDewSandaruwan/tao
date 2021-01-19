<?php
require_once '../connection.php';

if(isset($_REQUEST['food_id']))
{
          $id = $_REQUEST['food_id'];

          $querygetcode="SELECT  * FROM food_items where food_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['food_id'];

          $food_name = $result_row['food_name'];
          $description = $result_row['description'];
          $image = $result_row['image'];
          $food_id = $result_row['food_id'];
          $fid = $result_row['fid'];


          $q1="INSERT INTO food_items_backup(food_name,description,image,food_id,fid) values('$food_name','$description','$image','$food_id','$fid')";
          $res1=mysqli_query($con,$q1);

          if ($res1) {
            $query1="DELETE FROM food_items WHERE food_id='$a '";
            mysqli_query($con,$query1);

            header('location:viewfooditem.php');
          }
}
else if(isset($_REQUEST['emp_id']))
{
          $id = $_REQUEST['emp_id'];

          $querygetcode="SELECT  * FROM employee where emp_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['emp_id'];

          $query1="DELETE FROM employee WHERE emp_id='$a '";
          mysqli_query($con,$query1);
          header('location:viewemployee.php');

}
else if(isset($_REQUEST['cart_id']))
{
          $id = $_REQUEST['cart_id'];

          $querygetcode="SELECT  * FROM cart where food_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['food_id'];

          $query1="DELETE FROM cart WHERE food_id='$a '";
          mysqli_query($con,$query1);
          header('location:../foodCart.php');

}
else if(isset($_REQUEST['m_id']))
{
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:massage.php');

}  else if(isset($_REQUEST['image_id'])){
          $id = $_REQUEST['image_id'];

          $querygetcode="SELECT  * FROM galary where image_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['image_id'];

          $query1="DELETE FROM galary WHERE image_id='$a '";
          mysqli_query($con,$query1);
          header('location:galary.php');

}else if(isset($_REQUEST['cat_id'])){
          $id = $_REQUEST['cat_id'];

          $querygetcode="SELECT  * FROM category where cat_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['cat_id'];

          $querygetcode1="SELECT  * FROM food_items where food_cat_id='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);

          while($row=mysqli_fetch_assoc($catresult1)){

                $food_name = $row['food_name'];
                $description = $row['description'];
                $image = $row['image'];
                $food_id = $row['food_id'];
                $fid = $row['fid'];


                $q1="INSERT INTO food_items_backup(food_name,description,image,food_id,fid) values('$food_name','$description','$image','$food_id','$fid')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {

                  $query1="DELETE FROM food_items WHERE food_cat_id='$a'";
                  mysqli_query($con,$query1);

                }
            
          }
                  $query1="DELETE FROM category WHERE cat_id='$a '";
                  mysqli_query($con,$query1);
                  header('location:addcategories.php');

          
}

else if(isset($_REQUEST['customer_id']))
{
          $id = $_REQUEST['customer_id'];

          $querygetcode="SELECT  * FROM customer where customer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['customer_id'];
          $g=$result_row['email'];

          $cdate = date("Y/m/d m:H:s");

            $viewquery = " SELECT * FROM customer where email='".$g."'";
              $viewresult = mysqli_query($con,$viewquery);
              if ($row = mysqli_fetch_assoc($viewresult)) {

                $name = $row['first_name'].' '.$row['last_name'];
                $cus_id = $row['customer_id'];
                $phone = $row['phone'];
                $email = $row['email'];


              $q1="INSERT INTO customer_backup(customer_id,name,phone,email,trn_date) values('$cus_id','$name','$phone','$email','$cdate')";
                $res1=mysqli_query($con,$q1);

                if ($res1) {


              $query1="DELETE FROM customer WHERE email='$g '";
                      mysqli_query($con,$query1);

                      header('location:customer.php');
                }
              }
}
else{
  header('location:dashboard.php'); 
}
?>