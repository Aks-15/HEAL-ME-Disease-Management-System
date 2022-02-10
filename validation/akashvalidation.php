<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Browse halls Search and browse all our halls | Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Venue Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<?php #include('menubar.php'); ?>
		<div class="agileinfo-top-heading">
			<h2> </h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- Blog -->
		<div class="blog">
			<div class="container">
				<!-- single -->
				<div class="single">
					<div class="container">
						<div class="col-md-1"></div>
						<div class="col-md-10">
						  <div class="panel panel-success">
						    <div class="panel-heading">
						     <h2 style="text-align: center;">User Registraion</h2>
						    </div>
						    <div class="panel-body">
							<form action="" method="post">
							<div class="col-md-2"></div>
							 <div class="row">
								<div class="form-group col-md-4">
									<label>First Name</label>
									<input type="text" name="fname" title="Characters only" pattern="[A-Za-z]+" class="form-control" placeholder="Enter firs name" required>
								</div>
								<div class="form-group col-md-4">
									<label>Last Name</label>
									<input type="text" name="lname" title="Characters only" pattern="[A-Za-z\s]+" class="form-control" placeholder="Enter last name" required >
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="row">
								<div class="form-group col-md-4">
									<label>Gender</label>
									<input type="radio" name="gender"  value="male" checked> Male
									<input type="radio" name="gender" value="female"> Female
								</div>
								<div class="form-group col-md-4">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Enter email" required>
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="row">
								<div class="form-group col-md-4">
									<label>Contact No-1</label>
									<input type="text" name="contact1" pattern="^[6-9]\d{9}$"  title="10 digits only" class="form-control" placeholder="Enter your contact no" required>
								</div>
								<div class="form-group col-md-4">
									<label>Contact No-2</label>
									<input type="text" name="contact2" pattern="^[6-9]\d{9}$"  title="10 digits only" class="form-control" placeholder="Enter your contact no" required>
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="row">
								<div class="form-group col-md-4">
									<label>Address</label>
									<input type="text" name="address" title="Characters only" pattern="[A-Za-z\s]+" class="form-control" placeholder="Enter last name" required >
								</div>
								<div class="form-group col-md-4">
									<label>Password</label>
									<input type="password" name="pwd" pattern="[A-Za-z0-9]{8}" title="enter 8 Characters either letter or digit" class="form-control" placeholder="********" required>
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="row">
								<div class="form-group col-md-4">
									<label>Confirm Password</label>
									<input type="password" name="cpwd" pattern="[A-Za-z0-9]{8}" title="enter 8 Characters either letter or digit" class="form-control" placeholder="********" required>
								</div>
								<div class="col-md-4">
								<input type="submit" name="ureg" style="margin-top: 30px;" value="Signup" class="btn btn-success"> 
								</div>
							</div>
							</form>
							</div>
							</div>
							<?php 
							include("conn_db.php");
                     if(isset($_POST['ureg']))
                     {
                      $fname=$_POST['fname'];
                      $lname=$_POST['lname'];
                      $gender=$_POST['gender'];
                      $email=$_POST['email'];
                      $contact1=$_POST['contact1'];
                      $contact2=$_POST['contact2'];
                      $address=$_POST['address'];
                      $pwd=$_POST['pwd'];
                       $cpwd=$_POST['cpwd'];
                       if($pwd==$cpwd)
                       {
	                       $result=mysql_query("INSERT INTO `user`(`firstname`, `lastname`, `gender`, `email`, `contact_no_1`, `contact_no_2`, `address`, `password`, `reg_date`) VALUES ('$fname','$lname','$gender','$email','$contact1','$contact2','$address','$pwd',now())") or die(mysql_error());
	                       if($result)
	     						{
							     		echo "<script>alert('Registered successfully, Now Please Login');
							     window.location='userlogin.php';
							     </script>";	
	     						}
	     				   else
	     						{
	     							echo "<script>alert('Failed..Try again');</script>";
	     						}
     				   }
     				   else{
     				   		echo "<script>alert('Password Mismatch');</script>";
     				       }

     				}

	?>
						</div>
					</div>	
				</div>
				<!-- //single -->
			</div>
		</div>
		<!-- // Blog -->
	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>	
</html>