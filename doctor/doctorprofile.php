<!DOCTYPE html>


<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
$d_id=$_SESSION['did'];
if (!isset($_SESSION['doctor'])) {
		# code...
	header("location:index.php");

	}
?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
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
	
	<div id="qbootstrap-doctor">
		<div class="container-fluid">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading" style="margin-top:-80px;">
					<h2><b>PROFILE</b></h2>
					<!-- <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->
				</div>
			</div>
			<div class="row">
				<?php
	$stmt=$admin->ret("SELECT * from doctors where d_id=".$d_id);
	$row=$stmt->fetch(PDO::FETCH_ASSOC); 
		echo '

				<div class="col-md-3 animate-box text-center" style="margin-left:500px;" style="margin-top:-100px;">
					<div class="doctor">';?>
					<form action="../controller/editdprofile.php" method="POST"enctype="multipart/form-data">
						<div class="staff-img">
							<img src="../uploads/<?php echo $row['image']?>" class="staff-img">
						</div>
						
						<input type="hidden" name="did" value="<?php echo $d_id;?>">
						<?php echo '
						<div class="form-group">
						<label>Name</label>
						<input type="text" autocomplete="off"  pattern="^[A-Za-z\s]+$" title="Enter only characters" name="d_name" value="'.$row['d_name'].'" class="form-control">
						</div>
						<div class="form-group">
						<label>City</label>
						<input type="text" pattern="^[A-Za-z\s]+$" autocomplete="off" title="Enter only characters" name="d_adds" value="'.$row['d_adds'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>Phone No</label>
						<input type="text" autocomplete="off" pattern="[0-9]{10}" title="Enter only the 10 digit number" name="d_phno" value="'.$row['d_phno'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>Email</label>
						<input type="text" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,4}$" title="xyz@something.com" name="d_mail" value="'.$row['d_mail'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>Qualification</label>
						<input type="text" pattern="^[A-Za-z.,-]+$" autocomplete="off" title="Eg:M.B.B.S,MS-W,MD,DNB etc" name="d_qualfn" value="'.$row['d_qualfn'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>Specialization</label>
						<input type="text" pattern="^[A-Za-z-]+$" autocomplete="off" title="Eg:Gastrologist" name="d_splist" value="'.$row['d_splist'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>Clinic Name</label>
						<input type="text" autocomplete="off" pattern="^[A-Za-z-]+$" title="Enter your Clinic or Hospital name" name="d_clnc" value="'.$row['d_clnc'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>Clinic Location</label>
						<input type="text" autocomplete="off" pattern="^[A-Za-z,-]+$" title="Enter the location of your Clinic or Hospital" name="d_clncloc" value="'.$row['d_clncloc'].'"class="form-control">
						</div>
						<div class="form-group">
						<label>New Photo</label>
						<input class="form-control" type="file" name="image">
						</div>
						
					</div>'; ?>
					<button type="submit" name="edit" class="btn btn-warning">Save
					</button>
					</form>
				</div> 
</div>
</div>
</div>
			
<footer id="qbootstrap-footer" role="contentinfo" style="margin-top:-100px;">
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

