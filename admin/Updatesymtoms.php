<!DOCTYPE html>
<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
if (!isset($_SESSION['admin'])) {
		# code...
	header("location:index.php");

	}



$id=$_GET['id'];

$stmt=$admin->ret("SELECT * FROM `symptom` inner join disease on symptom.dis_id=disease.dis_id WHERE s_id=".$id);
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Updatesymptoms</title>
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
	<style type="text/css">
	th{
		text-align: center;
	}
	</style>

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
	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<style type="text/css">

			#disname{
				border-style: inset;
			}
	</style>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="qbootstrap-loader"></div>
	
	<div id="page">
	<?php include"adminheader.php";?>
	
	<!-- <aside id="qbootstrap-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_5.jpg);">
		   		<div class="overlay"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>About Dr. <strong>Mary Smith</strong></h1>
									<h2>Free html5 templates Made by <a href="https://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside> -->

	<div class="container">
	<div class="row">
	<div class="col-md-8 col-md-offset-2" style="border:solid black;width:550px;margin-top:80px;margin-left:350px;">
		<!-- <form action="#" class="appointment-wrap animate-box">
			<div class="row form-group"> -->
	
	<br>
	<h3><div class="col-md-6" style="margin-left:150px;">DISEASE FORM</div></h3><br>
	<form action="../controller/updatesymtom.php" method="POST">

							<div class="form-group">
							<label>Disease Name:</label>
							<select name="dis_id" class="form-control">
								
								<option value="<?php echo $row['dis_id'];?>"><?php echo $row['dis_name'];?></option>

							</select>
								<!-- <input type="text" id="symname" name="symname" class="form-control" placeholder="Enter the Symtoms"> -->
							</div>

							<div class="form-group">
							<label>Symptoms Name:</label>
							<textarea class="form-control" name="symptoms" rows="3"><?php echo $row['symptoms'];?></textarea>
								<input type="hidden" id="symname" name="id" class="form-control" value="<?php echo $row['s_id'];?>" placeholder="Enter the Symtoms" autocomplete="off" required>
							</div>
																		
						<div class="form-group">
							<br><input type="submit" value="Submit" name="editsym" class="btn btn-primary">
						</div>
	</form>	
	</div>
	</div>

	<!-- <div id="qbootstrap-intro">
		<div class="row">
			<div class="intro animate-box">
				<div class="intro-grid color-1">
					<span class="icon"><i class="icon-calendar3"></i></span>
					<h3>Flexible Schedule</h3>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
				<div class="intro-grid color-2">
					<span class="icon"><i class="icon-wallet2"></i></span>
					<h3>Best Price Guarantee</h3>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
				<div class="intro-grid color-3">
					<span class="icon"><i class="icon-clock3"></i></span>
					<h3>Opening Hours</h3>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<a href="#" class="btn btn-primary">Book an Appointment</a>
				</div>
			</div>
		</div>
	</div>
 -->
	<!-- <div id="qbootstrap-doctor" class="qbootstrap-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 image-content">
					<div class="doctor animate-box">
						<img class="img-responsive" src="images/img_bg_5.jpg" alt="">
						<h2><a href="doctors-single.html">Dr. Mary Smith</a></h2>
						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
						<div class="desc">
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p><br>
							<h3>Biography</h3>
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts.</p><br>
							<h3>Professional Life</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						</div>
						<div class="contact-info">
							<h2>Contacts</h2>
							<p><i class="icon-location4"></i> 198 West 21th Street, Suite 721 New York NY 10016</p>
							<p><i class="icon-phone-outline"></i> +01-123-456-7890</p>
							<p><i class="icon-paperplane"></i><a href="#"> medical@email.co</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 sticky-parent">
					<div id="sticky_item">
						<h3>Doctors Schedule</h3>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span>Monday</span>
								<span>8:00 am - 12:00 pm</span>
								<h4>Liposuction</h4>
							</div>
						</div>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span>Tuesday</span>
								<span>8:00 am - 12:00 pm</span>
								<h4>Reconstructive Surgery</h4>
							</div>
						</div>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span>Thursday</span>
								<span>8:00 am - 12:00 pm</span>
								<h4>Liposuction</h4>
							</div>
						</div>
						<p class="btn-big"><a href="appointment.html" class="btn btn-primary">Make an Appoinment</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
 -->
	<div id="qbootstrap-register"data-stellar-background-ratio="0.5" >
		<div class="overlay"style="background:white;"></div>
		<div class="container"style="background:white;">
			<div class="row">
				<!-- <div class="col-md-10 col-md-offset-1 animate-box"> -->
				
			</div>
		</div>
	</div>

	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 qbootstrap-widget">
					<h3>About</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Links</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Department</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Shop</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Our Services</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="#">Heart Surgery</a></li>
						<li><a href="#">Surgical Treatment</a></li>
						<li><a href="#">General Treatment</a></li>
						<li><a href="#">Medical Treatment</a></li>
						<li><a href="#">Help Desk</a></li>
					</ul>
				</div>

				<div class="col-md-5 col-sm-4 col-xs-12 qbootstrap-widget">
					<h3>Let's Talk</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy; 2017 Free HTML5. All Rights Reserved.</small> 
                    <small class="block">Designed by <a href="https://qbootstrap.com/" target="_blank">QBootstrap.com</a> Avaiable on <a href="https://themefisher.com/free-bootstrap-templates" class="">Themefisher.com</a></small>
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

