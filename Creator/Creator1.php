<?php

	session_start();

	$id = $_REQUEST['id'];
	
	$user_id = $_SESSION['user_id'];

	$_SESSION['id'] = $id;

	$user="root";
	$pass="";
	$database="ECards";
	$host="localhost";
	
	$con=mysqli_connect($host, $user, $pass, $database);
	
	$cname = $_POST['cname'];
	$name = $_POST['name'];
	$no = $_POST['no'];
	$adr1 = $_POST['adr1'];
	$adr2 = $_POST['adr2'];
	$mail = $_POST['mail'];
	
    $id=$_REQUEST['id'];
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
		
		#warning {
			display:none;
		}
		
		#disableScreenshotDiv {
			position: absolute;
			top: 104px;
			left: 15px;
			display: none;
			z-index: 10;
			background-color: white;
			min-width: 450px;
			min-height: 300px;
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
		
		<div id="disableScreenshotDiv"></div>
		
			<?php
		
			$query = "select * from card where id='$id'";
		
			$sql=mysqli_query($con,$query);
		
			while($r=mysqli_fetch_array($sql)) { 
		
			echo "<div style='position: relative; z-index: 6; width:450px; height: 246px;' class='col-md-6'>
				<div id='convert' style='width:435px; height:246px'>
				
					<img src='../images/Empty Images/$r[imgEmpty]' style='z-index:1; position: absolute; max-width: 435px;'>
					
					<div style='position:absolute; z-index: 10; top:$r[cmt]px; left:$r[cml]px; width: 226px;'>
						<center  style='position: absolute; color:$r[cfc]; font-size:$r[cfs]px; z-index:10; font-weight:bold'><p><b>$cname</b></p></center>
					</div>

					<p style='color:$r[nfc]; position:absolute; z-index:6; top:$r[nmt]px; left:$r[nml]px; font-size:$r[nfs]px;'>$name</p>

					<p style='color:$r[cnfc]; position:absolute; z-index:6; top:$r[cnmt]px; left:$r[cnml]px; font-size:$r[cnfs]px;'>$no</p>

					<p style='color:$r[a1fc]; position:absolute; z-index:6; top:$r[a1mt]px; left:$r[a1ml]px; font-size:$r[a1fs]px;'>$adr1</p>

					<p style='color:$r[a2fc]; position:absolute; z-index:6; top:$r[a2mt]px; left:$r[a2ml]px; font-size:$r[a2fs]px;'>$adr2</p>

					<p style='color:$r[efc]; position:absolute; z-index:6; top:$r[emt]px; left:$r[eml]px; font-size:$r[efs]px;'>$mail</p>
				</div>
				
			</div>";
			}
			?>
		<div class="col-md-6">
				<center>
					<input type="text" class="animate-box" id="qnty" placeholder="Quantity of cards" name="txt" oninput="checkNull(this.id)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="4" style="margin-top:50px;" /><br>
					<label style="color: red" id="warning">You must order minimum 50 cards!</label>
				</center>
				<br>
				<center>
					<!--<input type="text" id="aply" placeholder="Apply Promocode">-->
				</center>
					<center><br><label class="animate-box" id="result"></label></center>
					<div class="col-md-12" style="margin-left:50px; margin-right:50px;">
					 
						
					</div><br>	
					
				<center><input type="button" class="btn animate-box" onClick="myDiv();" id="hide" value="Buy Now"></center>
		</div>
		
		  <div id="content" class="col-md-12 animate-box" name="divi">
					<br><br><br><br><br><br>
			  	<div class="tab-content-inner active col-md-12" data-content="signup" style="border: 2px solid #DC5E60; padding: 30px; border-radius: 10px;">
							
						<div class="row form-group">
						<div class="col-md-12">
							<label for="username">Full Name</label>
							<input type="text" class="form-control animate-box" id="user" />
						</div>
						</div>
						
						<div class="row form-group">
						<div class="col-md-12">
							<label for="username">Email</label>
							<input type="email" class="form-control animate-box" id="email" />
						</div>
						</div>
					
						<div class="row form-group">
						<div class="col-md-12">
							<label for="username">Contact</label>
							<input type="text" class="form-control animate-box" id="no" />
						</div>
						</div>
							
						<div class="row form-group">
						<div class="col-md-12">
							<label for="username">Pincode</label>
							<input type="text" class="form-control animate-box" id="code" />
						</div>
						</div>
						
						<div class="row form-group">
						<div class="col-md-12">
							<label for="username">Address</label><br>
							<textarea class="form-control animate-box" rows="5" cols="143" id="adr"></textarea>	
						</div>
						</div>
					
						<div class="row form-group">
						<div class="col-md-12">
							<label class="animate-box" id="totalPrice">Your Total is:</label><br>
						</div>
						</div>
							
						<div class="row form-group">
							<div class="col-md-12" style="top: 10px;">
								<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
								<input type="button" id="checkout" class="btn btn-primary animate-box" value="Checkout">
							</div>
						</div>					
				  	</div>
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
	
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../js/html2canvas.min.js"></script>
	<script type="text/javascript" src="../js/canvas2image.js"></script>
	
	<!-------------------------------------Canvas2Image Code ------------------------------------------------------------->
	
	<script type="text/javascript" language="javascript">
		
		document.addEventListener('contextmenu', event => event.preventDefault());
		
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
		
		
	$('#checkout').click(function(){
		
		var elm = $('#convert').get(0);
		var w = "450";
		var h = "256";
		var type="png";
		var filename = "finalCard";
		
		var fname = $('#user').val();	
		var email = $('#email').val();	
		var no = $('#no').val();	
		var code = $('#code').val();	
		var adr = $('#adr').val();
		
		html2canvas(elm).then(function(canvas)
	    {
			var canWidth = canvas.width;
			var canHeight = canvas.height;
			var dataURL = canvas.toDataURL();
			
			$.ajax({
				type: "POST",
				url: "image.php",
				data: { 
					img: dataURL,
					fname: fname,
					email: email,
					no: no,
					code: code,
					adr: adr
				}
			}).done(function(){
				window.location = "summary.php";
			});			
		});
		
	});
	</script>
	
	
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript">
		
		document.getElementById("hide").disabled = true;
		
		
		function checkNull(id) {
			
			document.getElementById("warning").style.display = "none";
			
			var i = '#'+id;
			var idValue = $(i).val();
			if(isNaN(idValue) || parseInt(idValue) < 50 || parseInt(idValue) == null) {
				
				document.getElementById("hide").disabled = true;
				document.getElementById("warning").style.display = "block";
				document.getElementById("checkout").disabled = true;
				
			} else {
				
				document.getElementById("hide").disabled = false; 
				document.getElementById("warning").style.display = "none";
				document.getElementById("checkout").disabled = false;
				
			}
			var qnty = $('#qnty').val();
				$.ajax({
					method: "POST",
					url: "../action.php",
					data: {qnty: qnty},
					success: function(status){
						$('#result').text(status);
						$('#totalPrice').text(status);
				}	
			});
		}
		
		$(document).ready(function(){
			$('#qnty').input(function(event){
				var key = (event.keyCode ? event.keyCode : event.which);
				//if(key == 13){
					var qnty = $('#qnty').val();
					$.ajax({
						method: "POST",
						url: "../action.php",
						data: {qnty: qnty},
						success: function(status){
							$('#result').text(status);
						}	
					});
				//};
			});
		});
		
	</script>

	<!-------------------------------------------- Buy Now code --------------------------------------------------->
	
	<script>
		
		function myDiv(){
			if(document.getElementsByName(''))
			document.getElementById('content').style.display='block';
		}
		
	</script>
	
	<!--<script>
		
		$(document).ready(function (){
 			if ($('#hide').val().length > 0) {
  				$("input[type=button]").prop("disabled", "false");
 			}
 			else {
  				$("input[type=button]").prop("disabled", "true");
 			}
		});
	
	</script>-->
	
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