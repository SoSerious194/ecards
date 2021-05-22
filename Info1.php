<?php 

	session_start();
	
	$user_id = $_SESSION['user_id'];
	if($user_id == null) {
		
		header("location: login.php");
		
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ECards &mdash; Info</title>
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
		<br>
		<br>
		<br>
		<br>
		<center><label style="color: red; font-family: Cambria; font-size: 20px" class="animate-box">Enter the info to be displayed on the card.</label></center>
		<br>
		<div style="margin-right: 200px; margin-left: 200px; border: 2px solid #DC5E60; padding: 50px; border-radius: 10px;">
		<div class="tab-content">
			<div class="tab-content-inner active" data-content="signup">
				<form action="Creator/Creator1.php"method="post">
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<label for="username">Name</label>
								<input type="text" class="form-control" name="name" maxLength="13" required>
						</div>
					</div>
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<label>Company Name</label>
								<input type="text" class="form-control" name="cname" maxLength="15" required>
						</div>
					</div>
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<label>Contact</label>
								<input type="text" class="form-control" name="no" maxLength="10" required>
						</div>
					</div>
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<label>Address Line 1</label>
								<input type="text" class="form-control" name="adr1" maxLength="21" required>
						</div>
					</div>
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<label>Address Line 2</label>
								<input type="text" class="form-control" name="adr2" maxLength="21" required>
						</div>
					</div>
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<label>Mail</label>
								<input type="email" class="form-control" name="mail" maxLength="24" required>
						</div>
					</div>
					<div class="row form-group animate-box">
						<div class="col-md-12">
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>
					<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
					<input type="hidden" name="user_id" value="<?php echo $_REQUEST['user_id']; ?>" />
				</form>	
			</div>
		</div>
			<br><br>
		</div>
	<?php include("footer.php"); ?>