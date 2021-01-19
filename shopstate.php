 <?php
  require_once 'connection.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

     $viewquery = " SELECT * FROM rest_details";
      $viewresult = mysqli_query($con,$viewquery); 
      $row1 = mysqli_fetch_assoc($viewresult);

      if ($row1['rest_opening'] == 'Open') {
          $query3="UPDATE rest_details SET rest_opening='Close'";
          $sql3=mysqli_query($con,$query3);
          echo "<script type=\"text/javascript\"> alert(\"Your Resturant is Closed\"); window.location= \"dashboard.php\";</script>";
      }else{
          $query3="UPDATE rest_details SET rest_opening='Open'";
        $sql3=mysqli_query($con,$query3);
        echo "<script type=\"text/javascript\"> alert(\"Your Resturant is Opened\"); window.location= \"dashboard.php\";</script>";
      }
  

?>