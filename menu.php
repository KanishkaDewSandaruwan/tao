 <?php
  require_once 'connection.php'; //insert connection to page
  session_start();
  if (isset($_SESSION['email'])) {
  	$getEmail = $_SESSION['email'];
  }
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <link rel="icon" type="image/png" href="img/others/logo.png" sizes="200x300" />
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>THE TAO SEAFOOD RESTAURANT</title> 
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

     <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style1.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <script type="text/javascript">
    	$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
    </script>

</head>
<style type="text/css">
.top-navbar .navbar-light .navbar-nav .nav-item .h:hover{
	color: red;
}	

.navbar-expand-lg .navbar-nav .dropdown-menu a.h:hover{
	color: #ffffff;
}
/*
.navbar-light .navbar-toggler:hover{
	background: #cfa671;
}*/
</style>
<body style="font-family: 'Times New Roman', Times, serif;">
	<!-- Start header -->
		<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<a href="index.php"><img src="img/others/logo.png" width="150px" height="90px" alt="THE TAO SEAFOOD RESTAURANT" /></a>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<div class="col-md-6 col-lg-6">
						<ul class="navbar-nav ml-3 mt-5">
							<li class="nav-item"><a style="color: black; font-size: 25px; font-weight: bold;" class="nav-link h" href="index.php">Home</a></li>
							<li class="nav-item"><a style="color: black; font-size: 25px; font-weight: bold;" class="nav-link h" href="menu.php">Menu</a></li>
							<li class="nav-item"><a style="color: black; font-size: 25px; font-weight: bold;" class="nav-link h" href="about.php">About</a></li>
							<li class="nav-item"><a style="color: black; font-size: 25px; font-weight: bold;" class="nav-link h" href="contact.php">Contact US</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-lg-4">
					</div>
					<div class="col-md-2 col-lg-2">
						<ul class="navbar-nav ml-3 mt-5">
								<li class="nav-item dropdown">
								<a style="color: black; font-size: 25px; font-weight: bold;" class="nav-link " href="#" id="dropdown-a" data-toggle="dropdown"><i class="fas fa-user-friends" style="font-size: 35px;"></i></a>
								<div class="dropdown-menu" aria-labelledby="dropdown-a">
									<?php if (isset($_SESSION['email'])) {?>
									<a style="color: black; font-size: 20px; font-weight: bold;" class="dropdown-item" href="user_logout.php">Logout</a>
									<a style="color: black; font-size: 20px; font-weight: bold;" class="dropdown-item" href="myaccount.php">My Account</a>
									<a style="color: black; font-size: 20px; font-weight: bold;" class="dropdown-item" href="vieworder.php">My Orders</a>

								<?php }else{ ?>
									<a style="color: black; font-size: 20px; font-weight: bold;" class="dropdown-item" href="login/userlogin/login.php">Login</a>
								<?php } ?>
							</li>
							<li class="nav-item">
				              <a class="nav-link text-dark"  href="foodCart.php" role="button">
				                <i class="fas fa-shopping-cart" style="font-size: 30px;"></i>
				                <!-- Counter - Messages -->
				                <?php
				                if (isset($_SESSION['email'])) {
								  	$getEmail = $_SESSION['email'];

				                	$cart = "SELECT * FROM cart where email='$getEmail'";
									$cart_result = mysqli_query($con,$cart);
									$num = mysqli_num_rows($cart_result); ?>
				                <span class="badge badge-danger badge-counter"><?php echo $num; ?></span>
				            <?php } ?>
				              </a>
				            </li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	
		<?php 
$slider_query = "SELECT * FROM home_images";
$slider_query_result = mysqli_query($con,$slider_query);
if(mysqli_num_rows($slider_query_result)>0){

  	$row = mysqli_fetch_assoc($slider_query_result);
  	$background_image = $row['background_image'];
  	$blockimage = $row['second_block_image'];

		$backimage_src = "upload/homepage/".$background_image;
		$bloackimage_src = "upload/homepage/".$blockimage;

 ?>
	<!-- Start About -->


<!-- Foode Slider  -->
	<div class="row m-4">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
            	<h1>Most Populer Foods</h1>
            	<?php 
				$food="SELECT * FROM food_items";
				$query1 = mysqli_query($con,$food); 
				while ($row3 = mysqli_fetch_assoc($query1)) { 
				$foodimage = $row3['image'];
				$foodimage_src = "upload/food/".$foodimage; 
				if ($row3['available'] == "Yes") {
				?>

                <div class="item">
                    <div class="pad15">
                    	<div class="img-box mb-4">
							<img style="height: 200px" src="<?php echo $foodimage_src; ?>" class="img-fluid" alt="">
						</div>
                        <div class="thumb-content">
									<h4><?php echo $row3['food_name']; ?></h4>
									<p class="item-price"><?php echo $row3['description']; ?></p>
									<p style="color: red" class="item-price">Rs. <?php echo $row3['price']; ?></p>                                    
									<a href="addtocat.php?food_id=<?php echo $row3['food_id']; ?>" class="btn btn-primary">Add to Cart</a>
								</div>	
                    </div>
                </div>
            <?php } } ?>
               
            </div>
            <button class="btn btn-dark leftLst"><</button>
            <button class="btn btn-dark rightLst">></button>
        </div>
</div>

	<!-- Category -->
	<div class="gallery-box">
		<div class="container-fluid">s
			<div class="tz-gallery">
				<div class="row">
					<?php 
						$food="SELECT * FROM category";
						$query1 = mysqli_query($con,$food); 
						$count = 0;
						while ($row3 = mysqli_fetch_assoc($query1)) {

						$id = $row3['cat_id'];
						$food1="SELECT * FROM food_items where food_cat_id='".$id."'";
						$query3 = mysqli_query($con,$food1);
						$row4 = mysqli_fetch_assoc($query3);

						if (isset($row4['food_id'])) {
						$catimage = $row3['cat_image'];
						$catimage_src = "upload/category/".$catimage; ?>
						<div class="col-sm-12 col-md-4 col-lg-4 mt-5">
							<a class="lightbox" href="cat_menu.php?cat_name=<?php echo $row3['cat_id']; ?>">
								<h1><?php echo $row3['cat_name']; ?></h1>
								<img style="width: 100%; height: 300px" class="img-fluid" src="<?php echo $catimage_src; ?>"  alt="Gallery Images">
							</a>
						</div>
					<?php } $count++; } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->


	<!-- Start Food section with category -->
	<?php 
	$foodcat="SELECT * FROM category";
	$query2 = mysqli_query($con,$foodcat); 
	$counts = 0;
	while ($row2 = mysqli_fetch_assoc($query2)) { 
		$id = $row2['cat_id'];
		$food1="SELECT * FROM food_items where food_cat_id='".$id."'";
		$query3 = mysqli_query($con,$food1); 
		if (mysqli_fetch_assoc($query3)) {
		?>

	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<!-- <div class="heading-title text-center"> -->
						<h2 style="font-size: 50px; text-align: center; color: maroon">~~~ <?php echo $row2['cat_name']; ?> ~~~</h2>
						<hr>
					<!-- </div> -->
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<?php 
						$food="SELECT * FROM food_items where food_cat_id='".$id."'";
						$query1 = mysqli_query($con,$food); 
						$count = 0;
						while ($row3 = mysqli_fetch_assoc($query1)) { 
						$foodimage = $row3['image'];
						$foodimage_src = "upload/food/".$foodimage; 


						if ($row3['available'] == "Yes") {

							?>
							<div class="col-sm-12 col-md-4 col-lg-4 mt-5">
						<a class="lightbox" href="<?php echo $foodimage_src; ?>">
							<img style="width: 100%; height: 300px" class="img-fluid" src="<?php echo $foodimage_src; ?>"  alt="Gallery Images">
							<h4><?php echo $row3['food_name']; ?></h4>
							<p class="item-price"><?php echo $row3['description']; ?></p>
							<p class="item-price">Rs. <?php echo $row3['price']; ?></p>
							<a href="addtocat.php?food_id=<?php echo $row3['food_id']; ?>" class="btn btn-primary">Add to Cart</a>
						</a>
					</div>
					<?php  $count++; } } ?>
				</div>
			</div>
		</div>
	</div>
<?php } $counts++; } ?>
	<!-- End Gallery -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background" style="background: url(<?php echo $backimage_src; ?>) no-repeat; background-size: cover; padding: 100px 0;
	background-attachment: fixed;
	background-position: center center;
	position: relative;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						"<?php echo $row['second_block_image_description']; ?>"
					</p>
					<!-- <span class="lead">Michael Strahan</span> -->
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	<?php } ?>
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box" style="background-color: black;">
		<div class="container">
			<div class="row">
				<?php
            $viewquery = "SELECT * FROM rest_details";
            $viewresult = mysqli_query($con,$viewquery);
            $row1 = mysqli_fetch_assoc($viewresult); ?>

				<div class="col-md-4">
					<i style="color: black" class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							<?php echo $row1['phone']; ?>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i style="color: black" class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							<?php echo $row1['email']; ?>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i style="color: black" class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							<?php echo $row1['rest_address']; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Now Resturant: </span><?php echo $row1['rest_opening']; ?></p>
				</div>
				<div class="col-lg-9 col-md-6">
					<h3>Contact information</h3>
					<p class="lead"><?php echo $row1['rest_address']; ?></p>
					<p class="lead"><a href="#"><?php echo $row1['phone']; ?></a></p>
					<p><a href="#"><?php echo $row1['email']; ?></a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="<?php echo $row1['fb']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $row1['tweeter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $row1['linkdin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="<?php echo $row1['instragram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p style="text-align: left;" class="company-name">All Rights Reserved. &copy; 2021 <a href="#">TAOREATURANT</a> <br>Design By : 
					<a href="https://html.design/">De.Silva.K.S.N-SEU/IS/16/MIT/081</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
<style type="text/css">
	.MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
        input[type="number"] {
  -webkit-appearance: textfield;
    -moz-appearance: textfield;
          appearance: textfield;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;
}
.number-input {
  margin: 3rem;
}
.number-input button {
  -webkit-appearance: none;
  background-color: transparent;
  border: none;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  margin: 0;
  position: relative;
}
.number-input button:before,
.number-input button:after {
  display: inline-block;
  position: absolute;
  content: '';
  height: 2px;
  transform: translate(-50%, -50%);
}
.number-input button.plus:after {
  transform: translate(-50%, -50%) rotate(90deg);
}
.number-input input[type=number] {
  text-align: center;
}


.md-number-input.number-input {
  border: 2px solid #ddd;
  width: 11.8rem;
}
.md-number-input.number-input button {
  outline: none;
  width: 3rem;
  height: 2rem;
  padding-top: .8rem;
}
.md-number-input.number-input button.minus {
  padding-left: 8px;
}
.md-number-input.number-input button.plus {
  padding-left: 2px;
}
.md-number-input.number-input button:before,
.md-number-input.number-input button:after {
  width: 1rem;
  background-color: #212121;
}
.md-number-input.number-input input[type=number] {
  max-width: 5rem;
  padding: .5rem;
  border: solid #ddd;
  border-width: 0 2px;
  font-size: 2rem;
  height: 3rem;
  font-weight: bold;
  outline: none;
}
@media not all and (min-resolution:.001dpcm)
{ @supports (-webkit-appearance:none) and (stroke-color:transparent) {
  .number-input.md-number-input.safari_only button:before, 
  .number-input.md-number-input.safari_only button:after {
    margin-top: -.6rem;
  }
}}
</style>