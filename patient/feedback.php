<!DOCTYPE html>
<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
if (!isset($_SESSION['client'])) {
		# code...
	header("location:index.php");

	}


$cid=$_SESSION['cid'];
// $stmt=$admin->ret("SELECT * FROM `client` WHERE cl_id=".$cid);
// $row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sendfeedback</title>
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
	<?php include"patientheader.php";?>
	
	<div id="qbootstrap-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading" style="margin-top:-70px;">
					<h2>Give feedback to the doctor</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="margin-top:-70px;">
					<form action="../controller/feedback.php" class="appointment-wrap animate-box" method="POST">
					
						<input type="hidden" name="cid" value="<?php echo $cid;?>">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Select Doctor</label>
								<select name="d_id" class="form-control">
								<?php

									$stmt=$admin->ret("SELECT * FROM doctors");
									while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {	
								?>

									<option value="<?php echo $row['d_id'];?>"><?php echo $row['d_name'];?></option>
							<?php	} ?>
								</select>
							</div>
						</div>

						
						

						


						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Feedback</label>
								<textarea name="description" id="message" cols="30" rows="10" class="form-control" placeholder="Write your Feedback" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send feedback" name="sendfeedback" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>


	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 qbootstrap-widget">
					<h3>Contact us</h3>
					<p><b>Address :</b><br> MAK MALL, 4th floor, Kodialbail, Mangalore-575002<br><br>
					<b>Telephone :</b><br> 9008930585<br><br>
					<b>Email :</b> akashshetty8444@gmail.com<br></p>
				</div>
				
				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Our Services</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="../home.php">Disease prediction</a></li>
						<li><a href="../home.php">Disease medication</a></li>
						<li><a href="../home.php">Well known doctors</a></li>
						<li><a href="../home.php">Online chatbox</a></li>
						<li><a href="../home.php">Medical treatment</a></li>
						<li><a href="../home.php">Online appointment</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Feedback</h3>
					<ul class="qbootstrap-footer-links">
						<p>Feel free to give feedback to an admin here.</p>
					</ul>
				</div>

				<div class="col-md-5 col-sm-4 col-xs-12 qbootstrap-widget">
					<h3>Let's Talk With Admin</h3>
					<?php
						$stmt=$admin->ret("SELECT * FROM client where cl_id=".$cid);
						$row=$stmt->fetch(PDO::FETCH_ASSOC);
					?>
					<form class="contact-form" action="../controller/sendfeeda.php" method="POST">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name" value="<?php echo $row['name'];?>">
							<input type="hidden" name="id" value="<?php echo $cid;?>">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email"  value="<?php echo $row['email'];?>" >
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="3" placeholder="Enter your feedback" name="description" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" name="send" value="Send message">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row copyright" style="margin-top:-50px;">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block"><a href="../home.php" target="_blank">| About us |</a></small> 
                    <small class="block">Designed by | Akash Shetty</a></small>
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

