
<!DOCTYPE html>
<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
if (!isset($_SESSION['doctor'])) {
		# code...
	header("location:index.php");

	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HealMe</title>
	<link rel="icon" type="images/png" href="images/Logo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM
		
	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap
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

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
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
		
	<div class="qbootstrap-loader"></div>
	
	<div id="page">
	<?php include"doctorheader.php";?>
	
	<aside id="qbootstrap-hero">
		<div class="flexslider">
			<ul class="slides">
			
		   	<li style="background-image: url(images/img_bg_5.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><strong>The Skill to Heal <br> The Spirit to Care</strong></h1>
							</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>

		   	<li style="background-image: url(images/img_bg_1.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<!-- <h1>Dr. <strong> Akash Shetty</strong></h1> -->
									<h1><strong>Have an Access to a Health Professional at any time</strong></h1>
									<!-- <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
									<p><a class="btn btn-primary btn-lg" href="appointment.html">Make an Appointment</a></p>
			   				 --></div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	
		   	<li style="background-image: url(images/img_bg_2.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><strong>Get an instant Disease Prediciton and know the Medication</strong></h1>
									<!-- <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="appointment.html">Make an Appointment</a></p>
	 -->		   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/g3.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1><strong>Get an answers for all your Disease queries by the Doctors</strong></h1>
									<!-- <h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
									<p><a class="btn btn-primary btn-lg btn-learn" href="appointment.html">Make an Appointment</a></p> -->
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>
	<div id="qbootstrap-services">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Our Services</h2>
					<p><!-- Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. --></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Disease Prediction</a></h3>
							<p>It will predict the diseases according to the patients given symptoms </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-flow-merge"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Disease Medication</a></h3>
							<p>After the prediction of the disease the patient can know about its medication</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-group-outline"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Well Known Doctors</a></h3>
							<p>The patients will get to know about the different categories of the doctors</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-params"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Online Chatbox</a></h3>
							<p>The patients can ask the queries related to the diseases, with the doctors and then they get the reply from them</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Medical Treatment</a></h3>
							<p>The doctors while replying the queries of the patients can also send the tablets photos with the prescriptions</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-document-text"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Online Appointment</a></h3>
							<p>The doctors will get the appointments of the patients through online</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="qbootstrap-choose">
		<div class="container-fluid">
			<div class="row">
				<div class="choose">
					<div class="half img-bg" style="background-image: url(images/img_bg_6.jpg);"></div>
					<div class="half features-wrap">
						<div class="qbootstrap-heading animate-box">
							<h2>What Makes Us the Best?</h2>
							<p><!-- Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. --></p>
						</div>
						
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-heart"></i></span>
							<div class="desc">
								<h3>Disease Prediction</h3>
								<p>It predicts the diseases of the patients by knowing their smptoms.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-group-outline"></i></span>
							<div class="desc">
								<h3>Well Experienced Doctors</h3>
								<p>There will be an experienced doctors of many categories of the diseases will be available for the patients.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-flow-merge"></i></span>
							<div class="desc">
								<h3>Medications for the Treatment</h3>
								<p>The patients will get to know about the medications for their predicted disaeses.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-document-text"></i></span>
							<div class="desc">
								<h3>Online Appointment</h3>
								<p>Patients can get the appointment from the particular doctors through online.</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="qbootstrap-register" style="background-image: url(images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="date-counter text-center">
					<h2><strong class="color">ADDRESS</strong></h2>
					<H3>MAK MALL, 4th floor, Kodialbail, Mangalore-575002</H3>
						<h2><strong class="color">CONTACT US</strong></h2>
						<h3>TELEPHONE NUMBER : <strong>9008930585</strong></h3>
						<h2><strong class="color">EMAIL</strong></h2>
						<h3>akashshetty8444@gmail.com</h3>
						<!-- <p><a href="#" class="btn btn-primary btn-lg">Book an Appointment <i class="icon-calendar3"></i></a></p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="qbootstrap-footer" role="contentinfo">
			<div class="row copyright" style="margin-top:-115px;">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block"><a href="../home.php" target="_blank">| About us |</a></small> 
                    <small class="block">Designed by |<a href="#qbootstrap-register"> Akash Shetty</a></small>
                </p>
			</div>
		</div>
	</footer>
	</div>



	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

