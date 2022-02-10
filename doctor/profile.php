<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login_v6/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login_v6/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v6/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Login_v6/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-40 p-b-20">
				<form class="login100-form validate-form" action="../controller/profile.php" method="POST"enctype="multipart/form-data">
					<span class="login100-form-title p-b-70">
					</span>
					<span class="login100-form-avatar">
						<img src="../Login_v6/images/doctor.jpg" alt="AVATAR" height="100" width="100">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Username">
						<input class="input100" type="text" name="d_name" autocomplete="off"  pattern="[A-Za-z]+" title="letters only" >
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Select Image">
						<input class="input100" type="file" name="image">
						<!-- <span class="focus-input100" data-placeholder="Username"></span> -->
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter City">
						<input class="input100" type="text" name="d_adds">
						<span class="focus-input100" data-placeholder="City"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Qualification">
						<input class="input100" type="varchar" name="d_qualfn">
						<span class="focus-input100" data-placeholder="Qualification"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter the Spealist in">
						<input class="input100" type="varchar" name="d_splist">
						<span class="focus-input100" data-placeholder="Specialist"></span>
					</div>

				

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Phone number">
						<input class="input100" type="varchar" name="d_phno" pattern="[0-9]{10}" autocomplete="off" title="please enter 10 digit phone number">
						<span class="focus-input100" data-placeholder="Phone number"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Clinic Name">
						<input class="input100" type="varchar" name="d_clnc">
						<span class="focus-input100" data-placeholder="Clinic Name"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Clinic Location">
						<input class="input100" type="varchar" name="d_clncloc">
						<span class="focus-input100" data-placeholder="Clinic Location"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
						<input class="input100" type="varchar" name="d_mail" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,4}$" title="xyz@something.com">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="d_pwd">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Question</label>
						<select name="sqsn" class="form-control col-md-8">
							<option value="1">What is Your nick name?</option>
							<option value="2">What is Your pet's name?</option>
							<option value="3">What is Your lucky number?</option>
						</select>
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Answer</label>
						<input type="text" name="sans" class="form-control col-md-8">
					</div>



					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="dsignup">
							Signup
						</button>
						<a href="index.php" class="txt2">
								Login
							</a>
					</div>

					<ul class="login-more p-t-20">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>


						<!-- <li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="#" class="txt2">
								Sign up
							</a>
						</li>
 -->					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../Login_v6/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v6/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v6/vendor/bootstrap/js/popper.js"></script>
	<script src="../Login_v6/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v6/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v6/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Login_v6/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v6/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v6/js/main.js"></script>

</body>
</html>