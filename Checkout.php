<!DOCTYPE HTML>
<?php session_start(); ?>
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
	
	<?php include("nav.php"); ?>
	
	<br><br><br><br><br>
	<div class="col-md-2"></div>
	<div class="col-md-4"> 
		
		<h3>Current Address:</h3>
		
		<p><?php echo "Full Name: ".$_POST['fname']; ?></p>
		<p><?php echo "Email: ".$_POST['no']; ?></p>
		<p><?php echo "Pincode: ".$_POST['code']; ?></p>
		<p>Address:
		<?php echo $_POST['adr']; ?></p>
		<p><?php echo $_SESSION['user_id']; ?></p>
		
	
	</div>
	
	<div class="col-md-6">
	
		<h3>Shipping Method:</h3>
		
		<input type="radio" name="sm" id="Regular" checked="checked">
			<label for Regular>Regular(1-2 weeks)    59 rs.</label>
			<br>
		<input type="radio" name="sm" id="Express" />
			<label for Express>Express(1-3 days)     99 rs.</label>
	
	</div>
	<p>
	&nbsp;&nbsp;&nbsp;<?php echo "Total Price: ".$_SESSION['total']; ?>
	</p>
	
	&nbsp;&nbsp;&nbsp;<input class="btn" type="button" value="Buy Now">
	
	<!--<div class="col-md-12">
	
		<h3>Shipping Method:</h3>
		
		<select>
			<option value="reg">Regular(1-2 weeks)    59 rs.</option>
			<option value="reg">Express(3-4 days)     99 rs.</option>
		</select>
	
	</div>-->
	
	<?php include("footer.php"); ?>