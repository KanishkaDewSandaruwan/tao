<?php
    require_once '../resourse/resourse.php'; //insert connection to page
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- load Icons -->
    <link rel="icon" type="image/png" href="../img/others/logo.png" sizes="200x300" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <title>THE TAO SEAFOOD RESTAURANT</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	    <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		 <link rel="stylesheet" href="font/font/flaticon.css">
  </head>
  

  
  
  <body>
  
  
  <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
       <div class="simplebar-content" style="padding: 0px;">
        <a class="sidebar-brand" href="../dashboard.php">
          <span class="align-middle">The TAO Restorent</span>
        </a>

         <ul class="navbar-nav align-self-stretch">



   <!-- start process manager -->
<li class="sidebar-header">Process Managment</li>
       <li class="has-sub"> 
      <a class="nav-link collapsed text-left" href="#collapseExample2" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>   Orders
         </a>
      <div class="collapse menu mega-dropdown" id="collapseExample2">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
    <div class="container-fluid ">
              <div class="row">
                <div class="col-lg-12 px-2">
                  <div class="submenu-box"> 
                    <ul class="list-unstyled m-0">
                      <li><a href="ordermanager.php?id=1">Pending Orders</a></li>
                      <li><a href="ordermanager.php?id=2">Confirm Orders</a></li>
                      <li><a href="ordermanager.php?id=3">Deliverd Orders</a></li>
                      <li><a href="ordermanager.php?id=4">Complete Orders</a></li>
                      <li><a href="ordermanager.php?id=6">Complete Orders Without Paid</a></li> 
                      <li><a href="ordermanager.php?id=5">Rejected Orders</a></li> 
                      <!-- <li><a href="">ReactJS</a></li>  -->
                        <!-- <li><a href="">Asp.net</a></li> -->
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
         </div>
      </div>
      </li>
      <li class=""> 
      <a class="nav-link text-left"  role="button" href="customer.php">
       <i class="flaticon-bar-chart-1"></i>  Customers 
         </a>
      </li>
     <li class=""> 
      <a class="nav-link text-left"  role="button" href="account.php" >
       <i class="flaticon-bar-chart-1"></i> Account Manager 
         </a>
      </li>

      <li class=""> 
      <a class="nav-link text-left"  role="button" href="massage.php" >
       <i class="flaticon-bar-chart-1"></i> Massage Manager
         </a>
      </li>



      <!-- stat menu & food -->

      <li class="sidebar-header">
            Menu & Food Manager
          </li>
          <li class=""> 
      <a class="nav-link text-left"  role="button" href="addcategories.php">
       <i class="flaticon-bar-chart-1"></i> Food Category
         </a>
      </li>
       </li>
          <li class="has-sub"> 
      <a class="nav-link collapsed text-left" href="#collapseExample4" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>   Food Items
         </a>
      <div class="collapse menu mega-dropdown" id="collapseExample4">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
    <div class="container-fluid ">
              <div class="row">
                <div class="col-lg-12 px-2">
                  <div class="submenu-box"> 
                    <ul class="list-unstyled m-0">
                      <li><a href="addfoods.php">Add Food Item</a></li>
                      <li><a href="viewfooditem.php">View Food Item</a></li>
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
         </div>
      </div>
      </li>
      <li class=""> 


        <!-- Custon website -->
       <li class="sidebar-header">
            Custome Website
          </li>
          
         <li class=""> 
      <a class="nav-link text-left"  role="button" href="slider_manager.php">
       <i class="flaticon-bar-chart-1"></i>  Slider Manager
         </a>
      </li>
      
        <li class=""> 
      <a class="nav-link text-left"  role="button" href="marketing.php">
       <i class="flaticon-bar-chart-1"></i>  Marketing Banners Manager 
         </a>
      </li>
       <li class=""> 
      <a class="nav-link text-left"  role="button" href="homepage_manager.php">
       <i class="flaticon-bar-chart-1"></i>  Website Appearance Manager
         </a>
      </li>
      <li class=""> 
      <a class="nav-link text-left"  role="button" href="resturentdetailmanager.php">
       <i class="flaticon-bar-chart-1"></i>  Resturant Details Manager
         </a>
      </li>
      <li class=""> 




            <!-- Worker Manager -->
       <li class="sidebar-header">
            Empoyee Manager
          </li>
          
       </li>
          <li class="has-sub"> 
      <a class="nav-link collapsed text-left" href="#collapseExample5" role="button" data-toggle="collapse" >
        <i class="flaticon-user"></i>   employee
         </a>
      <div class="collapse menu mega-dropdown" id="collapseExample5">
        <div class="dropmenu" aria-labelledby="navbarDropdown">
    <div class="container-fluid ">
              <div class="row">
                <div class="col-lg-12 px-2">
                  <div class="submenu-box"> 
                    <ul class="list-unstyled m-0">
                      <li><a href="addemployee.php">Add Employee</a></li>
                      <li><a href="viewemployee.php">View Employee</a></li>
                    </ul>
                  </div>
                </div>
                
              </div>
            </div>
         </div>
      </div>
      </li>
      <li class=""> 
      
        
      
      </ul>

        
      </div>
     
     
    </nav>
        <!-- /#sidebar-wrapper -->










        <!-- Page Content -->
        <div id="page-content-wrapper">
         
      
      <div id="content">

       <div class="container-fluid p-0 px-lg-0 px-md-0">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light my-navbar">

          <!-- Sidebar Toggle (Topbar) -->
            <div type="button"  id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed" style="color: white;" data-toggle="offcanvas">
               <span></span>
          <span></span>
         <span></span>
            </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown  d-sm-none">
         
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
          placeholder="Search for..." >
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <?php $count = 0;
            $viewquery = " SELECT * FROM getorder";
            $viewresult = mysqli_query($con,$viewquery);

            while($row1 = mysqli_fetch_assoc($viewresult)) { 
              if ($row1['accept'] == 'Pending' && $row1['shipped'] == 'Pending' && $row1['deliver'] == 'Pending') { 
              $count++; 
              } 
            } ?>

           <li class="nav-item dropdown">
              <a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown" aria-expanded="false">
                <div class="position-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                  <span class="indicator"><?php echo $count; ?></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                <div class="dropdown-menu-header">
                  <?php echo $count; ?> New Pending Orders 
                </div>
                <div class="list-group">
                  <a href="#" class="list-group-item">
                      <?php $counts = 0;
                      $viewquery = " SELECT * FROM getorder";
                      $viewresult = mysqli_query($con,$viewquery);

                      while($row1 = mysqli_fetch_assoc($viewresult)) { 
                      if ($row1['accept'] == 'Pending' && $row1['shipped'] == 'Pending' && $row1['deliver'] == 'Pending') { 
                      $viewquerys = " SELECT * FROM customer where customer_id = '".$row1['customer_id']."'";
                      $viewresults = mysqli_query($con,$viewquerys);
                      $row3 = mysqli_fetch_assoc($viewresults); ?>

                    <div class="row no-gutters align-items-center">
                      <div class="col-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                      </div>

                      <div class="col-10">
                        <div class="text-dark"><p>Address : <?php echo $row1['address']; ?></p></div>
                        <div class="text-muted small mt-1">Payment Type :<?php echo $row1['payment_type']; ?></div>
                        <div class="text-muted small mt-1">Amount : Rs. <?php echo $row1['amount']; ?></div>
                        <hr>
                      </div>
                    </div>
                    <?php   $counts++; } }?>
                  </a>
                  
                </div>
                <div class="dropdown-menu-footer">
                  <a href="ordermanager.php?id=1" class="text-muted">Show all notifications</a>
                </div>
              </div>
            </li>
            <!-- Nav Item - Messages -->
            <?php $massage_counter = 0;
            $viewquery = " SELECT * FROM message";
            $viewresult = mysqli_query($con,$viewquery);

            while($row1 = mysqli_fetch_assoc($viewresult)) { 
              if ($row1['msg_read'] != 'Reded') {
                $massage_counter++; 
              }
              
            } ?>
            <li class="nav-item">
              <a class="nav-link " href="massage.php" role="button">
                <i class="fas fa-envelope"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter"><?php echo $massage_counter; ?></span>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <?php 
            if (isset($_SESSION['username'])) {
              $user =  $_SESSION['username']; 
              if ($user == 'admin') { ?>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello <?php echo $user; ?></span>
                <img class="img-profile rounded-circle" src="../img/logo3.png">
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <a class="nav-link " href="../logout.php" role="button">
                    <i class="fas fa-sign-out-alt" style="color: black;"></i>
                    <span class="text-dark">Logout</span>
                  </a>
                  <a class="nav-link " href="admin_pass_change.php" role="button">
                    <span class="text-dark">Change Password</span>
                  </a>


              </div>
            </li>
                <?php }else{ ?>

             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello <?php echo $user; ?></span>
                <img class="img-profile rounded-circle" src="../img/logo3.png">
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                  <a class="nav-link " href="../logout.php" role="button">
                    <i class="fas fa-sign-out-alt" style="color: black;"></i>
                    <span class="text-dark">Logout</span>
                  </a>
                  <a class="nav-link " href="admin_pass_change.php" role="button">
                    <span class="text-dark">Change Password</span>
                  </a>
                  <a class="nav-link " href="employee_username_change.php" role="button">
                    <span class="text-dark">Change Username</span>
                  </a>


              </div>
            </li>
              <?php } } ?>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid px-lg-4">
<div class="row">
<div class="col-md-12 mt-lg-4 mt-4">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="../dashboard.php"><h1 class="h3 mb-0 text-gray-800">THE TAO SEAFOOD RESTAURANT - Dashboard</h1></a>
          </div>
		  </div>
<div class="col-md-12">
       <div class="row">
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<?php 
													$query2="SELECT * FROM customer";
                                                  	$sql2=mysqli_query($con,$query2);
                                                  	$number = mysqli_num_rows($sql2);
												 ?>
												<h5 class="card-title mb-4">All Customers</h5>
												<h1 class="display-5 mt-1 mb-3 ml-3"><?php echo $number; ?></h1>
												<div class="mb-1">
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<?php 
													$query2="SELECT * FROM customer where MONTH(trn_date) >= MONTH(CURRENT_DATE())";
                                                  	$sql2=mysqli_query($con,$query2);
                                                  	$number = mysqli_num_rows($sql2);
												 ?>
												<h5 class="card-title mb-4">This Month Customer Registrations</h5>
												<h1 class="display-5 mt-1 mb-3 ml-3"><?php echo $number; ?></h1>
												<div class="mb-1">
												</div>
											</div>
										</div>
										
									</div>
									<div class="col-sm-3">
										<div class="card">
											<div class="card-body">
												<?php 
													$query2="SELECT * FROM customer where YEAR(trn_date) >= YEAR(CURRENT_DATE())";
                                                  	$sql2=mysqli_query($con,$query2);
                                                  	$number = mysqli_num_rows($sql2);
												 ?>
												<h5 class="card-title mb-4">This Year Customer Registrations</h5>
												<h1 class="display-5 mt-1 mb-3 ml-3"><?php echo $number; ?></h1>
												<div class="mb-1">
												</div>
											</div>
										</div>
										
									</div>
									
								</div>
</div>


     
                    <!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Customer First Name</th>
                                            <th class="border-top-0 text-white">Customer Last Name</th>
                                            <th class="border-top-0 text-white">Date of Birth</th>
                                            <th class="border-top-0 text-white">Phone Number</th>
                                            <th class="border-top-0 text-white">Email</th>
                                            <th class="border-top-0 text-white">Address</th>
                                            <th class="border-top-0 text-white">Registerd Date</th>
                                            <th class="border-top-0 text-white">Remove Customer</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
									  $viewquery = " SELECT * FROM customer";
									  $viewresult = mysqli_query($con,$viewquery);

                                     ?>
                                    <tbody>
                                    	<?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a class="btn btn-circle btn-info text-white"><?php echo $row['customer_id']; ?></a></div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $row['first_name']; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row['last_name']; ?></td>
                                            <td><?php echo $row['date_of_birth']; ?></td>
                                            <td>
                                                <label class="label label-danger"><?php echo $row['phone']; ?></label>
                                            </td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td>
                                                <h5 class="m-b-0"><?php echo $row['trn_date']; ?></h5>
                                            </td>
                                            <td><a style="text-decoration: none; color: red; font-size: 15px;" href="delete.php?customer_id=<?php echo $row['customer_id']; ?>">Delete</a></td>
                                        </tr>
                                        <?php   $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   

        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
			
			
			
			
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Copyright© 2020 TAO Restaurant. All rights reserved </strong></a>
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted">TAO Resturant Moderawalla,Thalwila Beach, Marawilla</a>
								</li><br>
								<li class="footer-item">
									<a class="text-muted"> Contact No: 077-2013600</a>
								</li><br>
								<li class="footer-item">
									<a class="text-muted"> Email: namalk79@gmail.com</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			
        </div>
		</div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
  
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
  
 <script>
 
$('#bar').click(function(){
	$(this).toggleClass('open');
	$('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled' );

});
  </script>

   
   
 
  
  
  </body>
</html>

   <style>
  
  
body {
    position: relative;
    overflow-x:hidden;
    background: #f7f7fc;
    font-family: 'Roboto', sans-serif;
}

a:hover{
  color:white;
  text-decoration:none;
}

body,
html { height: 100%;}





/*---------------------------------
sidebar
----------------------*/

#sidebar-wrapper {
    z-index: 1000;
    height: 100%;
  width:0px;
  left: -50px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #0a2116;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
    width: 8px;
    background: #222e3c;
}

#sidebar-wrapper::-webkit-scrollbar-thumb {
    background-color:#989898;
  border-radius:10px;
}


.sidebar-brand {
    font-weight: 600;
    font-size: 1.5rem;
    padding: 1.15rem 1.5rem;
    display: block;
    color: white;
}
.sidebar-header{
  text-transform:capitalize;
    padding: 1.5rem 1.5rem .375rem!important;
    font-size: 16px;
    color: yellow;
}

.navbar-nav > li > a ,.submenu-box ul li a{
    color:white!important;
    text-transform: capitalize;
    font-size: 14px;
    padding:10px 10px 10px 20px!important;
    display: block;
    font-weight: 400;
    position: relative;
    z-index: 2;
    font-family: 'Roboto', sans-serif;
    letter-spacing: .2px;
}

.submenu-box ul li a{
 padding:4px 10px 4px 20px!important;
  color:white!important;
}



.navbar-nav > li > a.active{
     color: #e9ecef!important;
    background: linear-gradient(90deg,rgba(59,125,221,.1),rgba(59,125,221,.0875) 50%,transparent);
    border-left:4px solid #3b7ddd;
}

.navbar-nav .has-sub > a.collapsed::after {
    transition: 0.4s ease;
}

.navbar-nav .has-sub > a.collapsed::after {
    color:gray;
    font-size: 10px;
    content: "\f078";
}
.navbar-nav .has-sub > a.collapsed::after {
   color:gray;
}

.navbar-nav .has-sub > a::after {
    position: absolute;
    right: 0px;
    top: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    color:gray;
    display: block;
    content: "\f077";
    font-family: 'Font Awesome\ 5 Free';
    font-weight: 900;
    font-size: 13px;
    line-height: 30px;
    margin-top: -15px;
}



#wrapper.toggled {
    padding-left: 270px;
}



.toggled#sidebar-wrapper {
    width:270px!important;
    height: 100%;
     left: 0px;
    overflow-y:auto;
    overflow-x:hidden;
    transition: all 0.5s ease;
}

.navbar-nav li{
  display:block!important;
  margin:2px 0px;
}


.nav-item .nav-link{
    display:block;
    color:white!important;
  text-transform:capitalize;
    text-decoration: none;
    padding:6px 10px; 
    transition:0.4s ease; 
}

.navbar-nav > li > a i:before{
  margin:0px 5px 0px 0px;
  font-size:14px;
}


/*---------------------------------
sidebar
----------------------*/






/*---------------------------------
  main-content
----------------------*/

#page-content-wrapper {
    width: 100%;
  transition: all 0.5s ease;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -270px;

  transition: all 0.5s ease;
}

 .toggled#page-content-wrapper{
  margin-left:270px;
  transition: all 0.5s ease;
 }
 
 @media only screen and (min-width:992px){
 .toggled#page-content-wrapper{
    width:calc(100% - 270px); 
  }
 }

/*---------------------------------
  main-content
----------------------*/



/*---------------------------------
cross-bar animation
----------------------*/


.nav-icon1{
  z-index: 999;
  position:relative;
  display: block;
  width:23px;
  margin:0px 30px 0px 25px;
   cursor:pointer;
  height: 25px;
}


.nav-icon1 span{
  position:absolute;
  top:0;
  width:100%;
  height:3px;
  cursor:pointer;
  background-color:#5d5d5d;
  left:0;
  transform:rotate(0deg);
  transition:.30s ease-in-out;
}

.nav-icon1:hover span:nth-of-type(1){
  top:-3px
}

.nav-icon1:hover span:nth-of-type(3){
  top:19px;
}

.nav-icon1 span:nth-of-type(1){
   top:0;
}

.nav-icon1 span:nth-of-type(2){
   top:8px;
}

.nav-icon1 span:nth-of-type(3){
   top:16px;
}

.nav-icon1.open span:nth-of-type(1){
   top:8px;
   transform:rotate(135deg);
}

.nav-icon1.open span:nth-of-type(2){
   top:8px;
   opacity:0;
   left:-30px;
}

.nav-icon1.open span:nth-of-type(3){
   top:8px;
   transform:rotate(-135deg);
}


/*---------------------------------
cross-bar animation
----------------------*/



/*---------------------------------
header navbar design
----------------------*/
.my-navbar{
  padding:0px;
  background-color:black;
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.16);
}

.text-gray-600 {
    color: white!important;
}
.nav-link .img-profile {
    height:40px;
    width:40px;
}

.navbar-nav > li > a >i{
    font-size: 18px;
    color:#b3b3b3;
  margin:8px 0px 0px 0px;
  padding:0px;
}

.badge-counter {
    position: absolute;
    transform:scale(.7);
    transform-origin: top right;
    right:6px;
  margin-top:4px;
}


.dropdown, .dropleft, .dropright, .dropup {
    position: relative;
}

.nav-flag, .nav-icon {
    padding: .1rem .8rem;
    display: block;
    font-size: 1.5rem;
    color: white;
    transition: background .1s ease-in-out,color .1s ease-in-out;
    line-height: 1.4;
}


.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}
.navbar-nav .dropdown-menu {
    box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
}
.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}
.dropdown-menu-lg {
    min-width: 20rem;
}


.position-relative {
    position: relative!important;
}

.nav-item .indicator {
    background: #3b7ddd;
    box-shadow: 0 0.1rem 0.2rem rgba(0,0,0,.05);
    border-radius: 50%;
    display: block;
    height: 18px;
    width: 18px;
    padding: 1px;
    position: absolute;
    top: 0;
    right: -8px;
    text-align: center;
    transition: top .1s ease-out;
    font-size: .675rem;
    color: white;
}

/*---------------------------------
 header navbar design
----------------------*/



/*---------------------------------
main-top card
----------------------*/

.card {
    margin-bottom: 24px;
  border:none;
    box-shadow: 0 0 0.875rem 0 rgba(33,37,41,.05);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.card-title {
    font-size: .875rem;
    color: #495057;
}

.card-body h1{
font-size: 1.75rem;
font-weight: 400;
    line-height: 1.2;
    color: #000;
}


.text-gray-800 {
    color: #5a5c69!important;
  font-size: 1.75rem;
  font-weight: 400;
    line-height: 1.2;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
}


.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}


.font-16 {
    font-size: 16px;
}



/*---------------------------------
main-top card
----------------------*/




/*---------------------------------
main-table
----------------------*/


 .m-r-10 {
    margin-right: 10px;
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962FF;
    border-color: #2962FF;
}

.btn-orange {
    color: #212529;
    background-color: #fb8c00;
    border-color: #fb8c00;
}

.btn-success {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
}
.btn-purple {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}


.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
    margin-top: -0.375rem;
}


.table td, .table th {
    padding: 1rem;
  font-size:14px;
  color:#333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5{
      font-size: 16px;
    font-weight:600;
    color:#585858;
}



/*---------------------------------
main-table
----------------------*/




/*---------------------------------
 footer
----------------------*/

footer.footer {
    padding: 1rem .875rem;
    direction: ltr;
    background: #fff;
}

footer.footer ul {
    margin:0px;
  list-style:none;
}

.footer ul  li{
 display:inline-block;
 margin:0px 7px;
}

.text-muted {
    color: #6c757d!important;
  font-size:14px;
}
 

/*---------------------------------
footer
----------------------*/





</style>