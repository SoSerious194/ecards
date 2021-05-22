<?php session_start(); 
	
	if(isset($_SESSION["user_id"]))
		header("location: index.php");

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ECards. Everything Cards!!</title>
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

	<nav class="gtco-nav" role="navigation" style="position: fixed; background: linear-gradient(to right, #555152, rgb(99, 95, 96));">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="login.php">ECards <em>.</em></a></div>
				</div>
			</div>
		</div>
</nav>

<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to ECards</span>
							<h1>Please SignUP or LogIN here.</h1>	
						</div>
						
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form action="check.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Username</label>
														<input type="text" class="form-control" name="username" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Email</label>
														<input type="email" class="form-control" name="email" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" class="form-control" name="password" required>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" name="signupBtn" value="Sign up">
													</div>
												</div>
											</form>	
										</div>

										<div class="tab-content-inner" data-content="login">
											<form action="check.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Email</label>
														<input type="email" class="form-control" name="loginEmail" required>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" class="form-control" name="loginPassword" required>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" name="loginBtn" value="Login">
													</div>
												</div>
											</form>	
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>		
					
				</div>
			</div>
		</div>
	</header>	
		
	
	<div class="gtco-section border-bottom">
		
		<div class="gtco-container">
			
			<div class="row">
				
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					
					<h2>Our Unique Card Designs</h2>
					
					<p>We believe in providing the best card designs to our customer. Therefore ECards - Everything Cards!!! Take a look at some of the designs by ECrads. Login to view more!!</p>
					
				</div>
				
			</div>
			
			<?php 
			
			$con = mysqli_connect('localhost','root','','ecards');
			
			$showCards = "select * from card order by id desc limit 6";
			
			$showRes = mysqli_query($con, $showCards);
			
			echo "<div class='row'>";
			
			while ($showRow = mysqli_fetch_array($showRes)) {
				
				echo "
				
					<div class='col-lg-4 col-md-4 col-sm-'>
					
					<a href='images/Front Images/$showRow[imgFront]' class='fh5co-project-item image-popup'>
						
						<figure>
						
							<div class='overlay'><i class='ti-plus'></i></div>
							
							<img src='images/Front Images/$showRow[imgFront]' alt='Image' class='img-responsive'>
							
						</figure>
						
						<div class='fh5co-text'>
						
							<h2 style='color: $showRow[cfc]'>Price: $showRow[price]/-</h2>
							
						</div>
					
					</a>
					
					</div>
					
				";
				
			}
			
			echo "</div>";
	
			
			?>
			
		</div>
		
	</div>
	
	
<?php include("footer.php"); ?>