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
$did=$_SESSION['did'];

?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sendnotification</title>
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
	
	
	<div id="qbootstrap-contact">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading" style="margin-top:-80px;">
					<h2>NOTIFICATION</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2" style="margin-top:-70px;">
					<form action="../controller/sendnote.php" class="appointment-wrap animate-box" method="POST"enctype="multipart/form-data">
					
						<input type="hidden" name="did" value="<?php echo $did;?>">
						
						<div class="row form-group">
							<div class="col-md-12">
								
								<input type="hidden" name="d_id" value="<?php echo $did;?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
					
							<label>Patient Name</label>
							<select name="cl_id" class="form-control" required="">
							<option value="">Select patient</option>
								<?php 
								$stmt=$admin->ret("SELECT distinct(email),client.cl_id,client.name from client INNER JOIN appointment on client.cl_id=appointment.cl_id where appointment.d_id='".$_SESSION['did']."'");
								while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) { ?>
								
									<option value="<?php echo $row['cl_id']?>"><?php echo $row['name'];?> -<?php echo $row['email'];?> </option> 
							<?php }

								?>

							</select>
							</div>
							</div>
								<!-- <input type="text" id="symn?>e" name="symname" class="form-control" placeholder="Enter the Symtoms"> -->
						


								<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Note</label>
								<textarea name="note" id="message" cols="30" rows="10" class="form-control" title="Send notification for the patient" autocomplete="off" placeholder="Your Message" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send" name="sendnote" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="qbootstrap-footer" role="contentinfo" style="margin-top:100px;">
		<div class="row copyright" style="margin-top:-50px;">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block"><a href="../home.php" target="_blank">| About us |</a></small> 
                    <small class="block">Designed by | Akash Shetty</a></small>
                </p>
			</div>
		</div>
	</footer>

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

