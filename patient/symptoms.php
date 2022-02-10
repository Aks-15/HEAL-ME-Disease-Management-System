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
	<title>Prediction</title>
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

	<style type="text/css">
	input{
		color: red;
	}

	</style>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<!-- <div class="qbootstrap-loader"></div> -->
	
	<div id="page">
	<?php include"patientheader.php";?>
	
	
		<div class="container"><BR>
		<H1><CENTER>DISEASE PREDICTION</CENTER></H1>
			<div class="row">
				<div class="col-md-6" style="border:solid black;width:600px;margin-top:10px;margin-right:200px;">
					<form action="" class="appointment-wrap animate-box" method="POST">
														
					
						<div class="row form-group">
							<div class="col-md-6"> 
								<label for="message">Symptoms</label>
								<input type="text" name="symptom" id="one" autocomplete="off" pattern="^[a-zA-Z,\s]+$" placeholder="Enter Your Symptoms" title="Each symptoms should be seperated by COMMA(,) and no space after a comma for next symptoms"  required="" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Predict" name="predict" class="btn btn-primary">
							<a href="symptoms.php" class="btn btn-primary">Clear</a>
						</div>

					</form>
				</div>
<?php
if (isset($_POST['predict'])) 
{


$symptom=$_POST['symptom'];



$stmt=$admin->ret("SELECT * FROM `symptom`,`disease`,`medicine` WHERE symptom.dis_id=disease.dis_id AND medicine.dis_id=disease.dis_id AND symptom.symptoms LIKE '%$symptom%'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$did=$row['dis_id'];
 $dname=$row['dis_name'];

 if ($dname) 
 {
 	# code...
 ?>

<div class="col-md-5"style="margin-right:8px;margin-top:-270px;float:right;border:solid black;">
<p>Predicted Disease</p>
<h1><?php echo $row['dis_name'];?></h1>
<p>Predicted Medication for the above Disease</p>
<h1><?php echo $row['name'];?></h1>
<?php }
					else
					{
						echo "No data found, Predict if you have any other symptoms";
					} ?>
				</div>
				</div>


				
<?php
}
?>

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

