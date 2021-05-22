<?php session_start();

	$user_id = $_SESSION['user_id'];
	if($user_id == null) {
		
		header("location: login.php");
		
	}

	$user="root";
	$pass="";
	$database="ECards";
	$host="localhost";
	
	$con=mysqli_connect($host, $user, $pass, $database);

?>
		 
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ECards &mdash; Everything Cards!!!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<style>
		
		#content{
			display:none;
		}
		
		#disableScreenshotDiv {
			position: absolute;
			top: -9px;
			left: 15px;
			display: none;
			z-index: 10;
			background-color: white;
			min-width: 500px;
			min-height: 295px;
			text-align: center;
			font-weight: bold;
		}
		
	</style>
	
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	
		<nav class="gtco-nav" role="navigation" style="position: fixed; background: linear-gradient(to right, #555152, rgb(99, 95, 96));">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="../index.php?user_id=<?php echo $user_id; ?>">ECards <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="../feedback.php?user_id=<?php echo $user_id; ?>">Feedback</a></li>
						<li class="has-dropdown">
							<a href="#">Categories</a>
							<ul class="dropdown">
								<li><a href="../Business.php?user_id=<?php echo $user_id; ?>">Business Cards</a></li>
								<li><a href="../Birthday.php?user_id=<?php echo $user_id; ?>">Birthday Cards</a></li>
								<li><a href="../Anniversary.php?user_id=<?php echo $user_id; ?>">Anniversary Cards</a></li>
								<li><a href="../Sorry.php?user_id=<?php echo $user_id; ?>">Sorry Cards</a></li>
								<li><a href="../Valentines.php?user_id=<?php echo $user_id; ?>">Valentines Day Cards</a></li>
							</ul>
						</li>
						<li><a href="../contact.php?user_id=<?php echo $user_id; ?>">Contact</a></li>
						<li><a href="../user_orders.php">My Orders</a></li>
					<li class="btn-cta"><a href="../logout.php"><span>Log Out</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		</nav>
		
	<br>
	<br>
	<br>
	<br>


		<p style="color:lime; text-align: center">Congrats!!! Order placed successfully. Your cards will be delivered soon!</p>
		<p style="color:lime; text-align: center">Thankyou for shopping at ECards!</p><br>
		
		<center><label>Your Order Summary</label></center>
		<hr>
		<div class="col-md-5">
			<div id="disableScreenshotDiv">Nope!!</div>
		
		<?php 
		
			if(isset($_SESSION['order_id'])){
				
				$order_id = $_SESSION['order_id'];
				$summaryQuery = "select * from all_orders where order_id = $order_id";
				$res = mysqli_query($con, $summaryQuery);
				
				if(mysqli_num_rows($res) > 0){
					
					while($row = mysqli_fetch_array($res)){
						
						echo "<img src='../../UploadedImages/$row[card_image]' style='width:500px; border-style:groove; border-width:thick; border-color:grey; position:absolute' class='img-responsive animate-box'>";
						$name = $row['user_name'];
						$email = $row['email'];
						$address = $row['Address'];
						$pin_code = $row['pin_code'];
						$contact = $row['contact'];
						$quantity = $row['quantity'];
						$total = $row['price'];
						
					}
					
				}
				
			}
			
		?>
		
		</div>
		
		<div class='col-md-6'>
			
			<table style="margin-top:20px" class='table table-striped animated-box'>
				
				<tr class = "animate-box">
					<td>Name</td>
					<td><?php echo $name ?></td>
				</tr>
				<tr class = "animate-box">
					<td>Email</td>
					<td><?php echo $email ?></td>
				</tr>
				<tr class = "animate-box">
					<td>Contact</td>
					<td><?php echo $contact ?></td>
				</tr>
				<tr class = "animate-box">
					<td>Quantity</td>
					<td><?php echo $quantity ?></td>
				</tr>
				<tr class = "animate-box">
					<td>Total Price</td>
					<td><?php echo $total ?></td>
				</tr>
				<tr class = "animate-box">
					<td>Address</td>
					<td><pre><?php echo $address ?></pre></td>
				</tr>
				<tr class = "animate-box">
					<td>Pincode</td>
					<td><?php echo $pin_code ?></td>
				</tr>
			
			</table>
			
		</div>
		
		<div class="col-md-12" style="margin-top: 30px">
	
			<a href="../user_orders.php" class="btn btn-danger"  style="float:right;margin-right: 122px;">View Order.</a>
			<a href="../index.php" class="btn btn-danger" style="float:right; margin-right: 122px;">Continue Shopping.</a>
		
		</div>

		
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p b-md">

				<div class="col-md-8">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">ECards<span>.<span></span></h3>
						<p>Here, at ECards, you can buy cards for any occassion. You can also create your own custom business cards by using our simple editor. Lots of design to choose from. </p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +91 234 567 8909</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@ECards.com</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>
				<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<script>
		
		//document.addEventListener('contextmenu', event => event.preventDefault());
		
		/******************* Disable Screenshot **********************/
		
		$(document).on("keydown", function(e) {
			if(e.keyCode == 91) {
				
				document.getElementById("disableScreenshotDiv").style.display = "block";
				
			}
		});
		
		$(document).on("keyup", function(e) {
			if(e.keyCode == 91) {
				
				document.getElementById("disableScreenshotDiv").style.display = "none";
				
			}
		});
		
	
	</script>
		
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>