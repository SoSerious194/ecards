<?php session_start();

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
    </style>	

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	
	<?php include('nav.php'); ?>
		
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
			
				<div class="col-md-12 text-left" style="clear: right">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to ECards<span style="color: red">
								<?php 
								
									$user="root";
									$pass="";
									$database="ECards";
									$host="localhost";	
									
									$con = mysqli_connect($host, $user, $pass, $database);
									$userQuery = "Select * from user_login where id = $user_id";
									$res = mysqli_query($con, $userQuery);
									
									while($row = mysqli_fetch_array($res)) {
										
										echo "<b>".$row['name']."!</b>";
										
									}
								
								?>
								</span>
							</span>
							<h1>Create Your Custom Cards Here.</h1>	
						</div>
					</div>					
				</div>
		</div>
		
		<center><div class="col-md-12" >
		<div id="jssor_1" style="position:relative; top:0px; left:0px; width:980px; height:380px; overflow:hidden; visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-b="0">
                <!---<img data-u="image" src="img/download.png" />--->
                <div style="position:absolute;top:30px;left:528px;width:360px;height:44px;font-size:32px;color:#ffffff;line-height:1.2;text-align:center;">Many Unique Designs!!!</div>
                <div data-ts="preserve-3d" style="position:absolute;top:88px;left:459px;width:488px;height:215px;">
                    <img data-t="0" style="position:absolute;top:-300px;left:89px;width:210px;height:178px;max-width:210px;" src="img/sample2.png" />
                    <img data-t="1" style="position:absolute;top:55px;left:-200px;width:114px;height:144px;max-width:114px;" src="img/custom-birthday-cards-2-728x1024.png" />
                    <img data-t="2" style="position:absolute;top:88px;left:420px;width:219px;height:120px;max-width:219px;" src="img/sample4.jpg" />
                </div>
                <div data-t="3" data-to="0% 100%" data-ts="preserve-3d" style="position:absolute;top:385px;left:-100px;width:257px;height:127px;">
                    <div data-ts="preserve-3d" style="position:absolute;top:4px;left:34px;width:198px;height:112px;overflow:hidden;">
                        <img data-t="4" style="position:absolute;top:-2px;left:-2px;width:408px;height:116px;max-width:408px;" src="img/slider.png" />
                    </div>
                    <img style="position:absolute;top:0px;left:0px;width:257px;height:127px;max-width:257px;" src="img/mock-phone.png" />
                </div>
            </div>
            <div data-b="1">
                <!---<img data-u="image" src="img/black-gradient-background.png" />--->
                <div data-ts="flat" data-p="1360" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                    <div data-t="5" data-ts="preserve-3d" style="position:absolute;top:150px;left:-36px;width:1053px;height:150px;">
                        <div data-t="6" data-to="100% 50%" style="position:absolute;top:0px;left:1030px;width:72px;height:72px;background-color:#eb9434;">
                            <div data-t="7" style="position:absolute;top:0px;left:0px;width:72px;height:72px;font-size:46px;color:#000000;line-height:1.57;text-align:center;background-color:#ffffff;">All</div>
                        </div>
                        <div data-t="8" data-to="0% 50%" style="position:absolute;top:0px;left:360px;width:175px;height:72px;font-size:45px;color:#000000;line-height:1.6;text-align:center;background-color:#ffffff;">Varieties</div>
                        <div data-t="9" data-to="0% 50%" style="position:absolute;top:0px;left:535px;width:230px;height:72px;font-size:45px;color:#000000;line-height:1.6;text-align:center;background-color:#ffffff;">of Cards</div>
                        <div data-t="10" style="position:absolute;top:360px;left:238px;width:577px;height:30px;font-size:24px;color:#ffffff;line-height:1.25;text-align:center;">ECards has the best Cards!!</div>
                    </div>
                    <div data-t="11" data-ts="preserve-3d" style="position:absolute;top:70px;left:182px;width:616px;height:150px;">
                        <img data-t="12" style="position:absolute;top:22px;left:266px;width:84px;height:84px;max-width:84px;" src="img/wedding_love_celebration_birthday_cake_party-512.png" />
                        <img data-t="13" style="position:absolute;top:16px;left:260px;width:96px;height:96px;max-width:96px;" src="img/circle.png" />
                        <div data-t="14" style="position:absolute;top:195px;left:260px;width:96px;height:30px;font-size:18px;color:#ffffff;line-height:1.67;text-align:center;">Birthday Cards</div>
                        <img data-t="15" style="position:absolute;top:22px;left:22px;width:84px;height:84px;max-width:84px;" src="img/business_circle.png" />
                        <img data-t="16" style="position:absolute;top:16px;left:16px;width:96px;height:96px;max-width:96px;" src="img/circle.png" />
                        <div data-t="17" style="position:absolute;top:125px;left:166px;width:96px;height:30px;font-size:18px;color:#ffffff;line-height:1.67;text-align:center;">Business Cards</div>
                        <img data-t="18" style="position:absolute;top:22px;left:510px;width:84px;height:84px;max-width:84px;" src="img/valentineslogo.png" />
                        <img data-t="19" style="position:absolute;top:16px;left:504px;width:96px;height:96px;max-width:96px;" src="img/circle.png" />
                        <div data-t="20" style="position:absolute;top:125px;left:354px;width:96px;height:30px;font-size:18px;color:#ffffff;line-height:1.67;text-align:center;">Valentines Day Cards</div>
                    </div>
                </div>
            </div>
            <div data-b="2">
                <!---<img data-u="image" src="img/black-gradient-background.png" />--->
                <div data-ts="flat" data-p="850" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;"></div>
                <div style="position:absolute;top:151px;left:192px;width:585px;height:62px;font-size:32px;color:#ffffff;line-height:1.2;text-align:center;">Create Your Custom Cards Now!!</div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb101" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="co" cx="8000" cy="8000" r="5000"></circle>
                    <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    </div>
    </center>
				
			</div>
		
	</header>
	
	<!-------------------Slider code starts here--------------------->
		
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:-1,y:2,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.85}},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1000,x:4,y:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InQuint,$Top:$Jease$.$InQuint,$Zoom:$Jease$.$InQuart,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InQuint},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1000,x:-3,y:1,$Rows:2,$Zoom:11,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.5,$Zoom:1,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1200,x:-0.6,y:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1200,y:-0.5,$Delay:30,$Cols:15,$Opacity:2,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:{$Top:$Jease$.$InWave,$Opacity:$Jease$.$Linear},$Round:{$Top:1.5}},
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Clip:$Jease$.$InSine}},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1200,y:300,o:1,e:{y:24,o:6}},{b:5600,d:800,y:-200,o:-1,e:{y:5}}],
              [{b:-1,d:1,o:-1},{b:400,d:800,x:200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:-200,o:-1,e:{x:5}}],
              [{b:-1,d:1,o:-1},{b:400,d:800,x:-200,o:1,e:{x:27,o:6}},{b:5600,d:800,x:200,o:-1,e:{x:5}}],
              [{b:-1,d:1,o:-1},{b:1600,d:600,x:200,y:-230,o:1,e:{x:3,y:3}},{b:5600,d:800,o:-1}],
              [{b:4600,d:960,x:-204,e:{x:1}}],
              [{b:2800,d:600,y:70,sX:-0.5,sY:-0.5,e:{y:5}},{b:6000,d:600,y:50,r:-10},{b:7000,d:400,o:-1,rX:30,rY:-30}],
              [{b:0,d:600,x:-742,sX:4,sY:4,e:{x:6}},{b:900,d:600,sX:-4,sY:-4}],
              [{b:-1,d:1,o:-1},{b:400,d:500,o:1,e:{o:5}}],
              [{b:-1,d:1,o:-1,r:-180},{b:1500,d:500,o:1,r:180,e:{r:27}}],
              [{b:-1,d:1,o:-1,r:180},{b:2000,d:500,o:1,r:-180,e:{r:27}}],
              [{b:2800,d:600,y:-270,e:{y:6}}],
              [{b:6000,d:600,y:-100,r:-10,e:{y:6}},{b:7000,d:400,o:-1,rX:-30,rY:30}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3400,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:3800,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:3400,d:600,o:1},{b:4000,d:1000,r:360,e:{r:1}}],
              [{b:-1,d:1,o:-1},{b:3400,d:600,y:-70,o:1,e:{y:27}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:3700,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4100,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:3700,d:600,o:1},{b:4300,d:1000,r:360}],
              [{b:-1,d:1,o:-1},{b:3700,d:600,x:-150,o:1,e:{x:27}}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:4000,d:400,sX:1.33,sY:1.33,e:{sX:7,sY:7}},{b:4400,d:200,sX:-0.33,sY:-0.33,e:{sX:16,sY:16}}],
              [{b:-1,d:1,o:-1},{b:4000,d:600,o:1},{b:4600,d:1000,r:360}],
              [{b:-1,d:1,o:-1},{b:4000,d:600,x:150,o:1,e:{x:27}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:2000,b:5600}],
                  [{d:2000,b:9300}],
                  [{d:2000,b:22700}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
		

	<?php include("footer.php"); ?>