<?php 
	session_start();
	$user_id = $_SESSION['user_id'];
	if($user_id == null) {
		
		header("location: login.php");
		
	}

?>

<?php
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
	<title>ECards &mdash; Create Custom Business Cards</title>
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

	<style>
		
		.imge {
			padding: 10px;
			transition: transform .75s;
			width: auto;
			height: auto;
			margin 20 auto;
		}
		
		.imge:hover {
			transform: scale(1.2);
		} 
		
		.tag {
			display: inline-block;

		  	width: 70px;
			height: 38px;

			background-color: #f00;;
			-webkit-border-radius: 3px 4px 4px 3px;
			-moz-border-radius: 3px 4px 4px 3px;
			border-radius: 3px 4px 4px 3px;
			border-left: 1px solid #f00;;
			margin-left: 343px;
			margin-top: -8px;
			position: absolute;
			color: white;
			font-weight: 300;
			font-family: 'Source Sans Pro', sans-serif;
			font-size: 22px;
			line-height: 38px;
			padding: 0 10px 0 10px;
			z-index: 20;
		}

		/* Makes the triangle */
		.tag:before {
			content: "";
			position: absolute;
			display: block;
			left: -18px;
			width: 0;
			height: 0;
			border-top: 19px solid transparent;
			border-bottom: 19px solid transparent;
			border-right: 19px solid #979797;
			z-index: 21;
		}

		/* Makes the circle */
		.tag:after {
			content: "";
			background-color: white;
			border-radius: 50%;
			width: 4px;
			height: 4px;
			display: block;
			position: absolute;
			left: -9px;
			top: 17px;
			z-index: 22;
		}
		
		@keyframes cf3FadeInOut {
			0% {
			  opacity:1;
			}
			45% {
				opacity:1;
			}
			55% {
				opacity:0;
			}
			100% {
				opacity:0;
			}
		}

			#cf3 img.top {
				animation-name: cf3FadeInOut;
				animation-timing-function: ease-in-out;
				animation-iteration-count: infinite;
				animation-duration: 6s;
				animation-direction: alternate;
			}
		
	</style>
	
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<?php include("nav.php"); ?>
	
	<header id="gtco-header" class="gtco-cover1" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">	
				</div>
			</div>
		</div>
	</header>
	<body>
		<br>
		<br>
		<br>
		<hr>
		<center><label style="color: red; font-size: 20px">CHOOSE YOUR CARD DESIGN.</label></center>
		<hr>
		<center><label style="color: red; font-size: 14px;">Price shown in the tag is for 1 card.</label></center>
		
		<div style="margin-right: 30px; margin-left: 30px;">
		
			<?php 
			
			$sql=mysqli_query($con,"select * from card");
			while($res=mysqli_fetch_array($sql)) { 
			
			?>
			
			
	 		<div class="col-sm-4 animate-box" style="margin-top: 70px" id="cf3">
				<span class="tag" style="text-align: center;  margin-top:4px;"><?php echo $res['price']."/-" ?></span>
				<a href="Info1.php?id=<?php echo $res['id']; ?>">
					<figure>
						<center><img class="bottom img-responsive" src="images/Front Images/<?php echo $res['imgFront'] ; ?>" alt="Image" style="min-width: 350px; margin-left: 54px; position:absolute; max-width: 350px; max-height: 194px; margin-top: 1px;  max-height: 195px;  min-height: 195px;">
						<img class="top img-responsive" src="images/Back Images/<?php echo $res['imgBack'] ; ?>" alt="Image" style="min-width: 350px; max-width: 350px; max-height: 195px;  margin-top:10px; min-height: 195px;"></center>
					</figure>
				</a>
			</div>
			<?php } ?>
		
		</div>
		
	</body>

<?php  include("footer.php")  ?>