<?php 

	session_start();

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
	<title>ECards &mdash; Contact Us</title>
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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	
	<?php include("nav.php") ?>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Don't be shy</span>
							<h1>Get In Touch</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Your full name" required>
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Your email address" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text" name="subject" class="form-control" placeholder="Your subject of this message" maxlength="80" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" cols="30" rows="10" class="form-control" placeholder="Write us something" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="sbn" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Jetpur 360370, <br> </li>
							<li class="phone"><a href="tel://1234567920">+91 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@ECards.com</a></li>
							<li class="url"><a href="http://FreeHTML5.co">ECards</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("footer.php"); ?>
		
<?php 
		
		if(isset($_REQUEST['sbn'])) {
			
			$fname = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			$subject = $_REQUEST['subject'];
			$msg = $_REQUEST['message'];
			
			$messageQuery = "insert into message(user_id, email, fname, subject, msg) values('$user_id', '$email', '$fname', '$subject', '$msg')";
			
			if(mysqli_query($con, $messageQuery)) {
				
				echo "<script> alert('Your Message has been sent!') </script>";
				
			} else {
				
				echo "<script> alert('Your Message could not be send. Please try again..') </script>";
				
			}
			
		}

?>

