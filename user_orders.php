<?php session_start();
	$user="root";
	$pass="";
	$database="ECards";
	$host="localhost";
	$con = mysqli_connect($host, $user, $pass, $database);

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
		
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/w32.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!---------------------------Slider--------------------------->
	
	<style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 101 css*/
        .jssorb101 .i {position:absolute;cursor:pointer;}
        .jssorb101 .i .ci {fill:#000;}
        .jssorb101 .i .co {fill:#fff;opacity:.3;}
        .jssorb101 .i:hover .co {fill:#ff9933;opacity: 1;}
        .jssorb101 .i:hover .ci {fill:#fff;}
        .jssorb101 .iav .ci {fill:#fff;stroke-width:0;}
        .jssorb101 .iav .co {fill:#46d1d3;opacity: 1;}
        .jssorb101 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
		
		.custom-style{
			
			padding: 50px; 
			margin-left: 43px; 
			margin-right: 43px;
			margin-top: 20px;
			margin-bottom: 20px;
			border-bottom-left-radius: 80px;
			border-top-right-radius: 80px;
			border-bottom-right-radius: 10px;
			border-top-left-radius: 10px;
			
		}
		
    </style>	

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">

	<?php include('nav.php'); ?>
		
		<p style="position: absolute; margin-top: 90px; font-size: 28px; margin-left: 100px">My Orders</p>
		
		<div style="margin-top: 10%; background-color: rgb(236,236,236); class="gtco-container">
			
			<?php
				
				$showOrder = "Select * from all_orders where id = '$_SESSION[user_id]' order by order_id desc";
																							   
				$res = mysqli_query($con, $showOrder);
																							   
				if(mysqli_num_rows($res) > 0){
					
					while($row = mysqli_fetch_array($res)) {
				
						echo "

							<div class='row'>

							<div class='w3-panel w3-white w3-card w3-display-container custom-style animate-box' data-animate-effect='fadeInUp'>

								<img style='border-style:groove; border-width:thick; border-color:grey' src='../UploadedImages/$row[card_image]' width=370>
								<label style='margin-left:70px;'>Order Id: $row[order_id]</label>
								<label style='margin-left:70px;'>Quantity: $row[quantity]</label>
								<label style='margin-left:70px;'>Price: $row[price]</label>";
							
						if($row['status'] == null) {
							
							echo "<a href='user_orders.php?cancel_id=$row[order_id]' class='btn btn-danger' style='margin-left:80px;'>Cancel Order</a>";
							
						} else {
							
							echo "<label style='color:green; margin-left:80px;'>Out for delivery.</label>";
							
						}
						
							

						echo "</div></div>";
				
					}
					
				} else {
					
					echo "

							<div class='row'>

							<div class='w3-panel w3-white w3-card w3-display-container custom-style'>

								<label style='color:red'> You have no orders currently! </label>

							</div>				

							</div>";
					
				}
				
				
																							   		
			?>
										   
		</div>
										   
<?php include('footer.php'); ?>
		
<?php 
																							   
	if(isset($_REQUEST['cancel_id'])){
		
		$deleteOrder = "delete from all_orders where order_id='$_REQUEST[cancel_id]'";
		
		if(mysqli_query($con, $deleteOrder)){
			
			echo "<script>window.location='user_orders.php'</script>";
			
		}
		
	}
																							   
?>		
																							   
<script>
		
	document.addEventListener('contextmenu', event => event.preventDefault());												   																						   
</script>