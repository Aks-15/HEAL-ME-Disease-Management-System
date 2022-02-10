<!DOCTYPE html>
<html>
<head>
	<title>Forgotpassword</title>
	<link rel="icon" type="images/png" href="images/Logo1.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
<body style="background-image: url(images/a31.jpg);" >
		<div class="row">
			<div class="col-md-2" style="margin-left:-240px;"></div>
				<div class="col-md-4" style="background-image: url('../images/qsn.jpg');">
					
				</div>
			<div class="card col-md-4">
			<div class="card-header badge-info">
				<center>Security Question</center>
			</div>

	<form  class="login100-form validate-form" method="POST" action="../Controller/matchsecurityd.php">
	<div class="wrap-input100 validate-input m-b-50" data-validate="Enter email">
						<input class="input100" type="varchar" name="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Question</label>
						<select name="sqsn" class="form-control col-md-8" required="">
						<option value="">Select any one question below:</option>
							<option value="1">What is Your nick name?</option>
							<option value="2">What is Your pet's name?</option>
							<option value="3">What is Your lucky number?</option>
							

						</select>
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Answer</label>
						<input type="text" name="sans" autocomplete="off" class="form-control col-md-8" required>
					</div>
				<div>
					<input type="submit" name="btn">
				</div>
				</form>
				</div>
				</div>
				<div class="col-md-3"></div>
			</div>
	     </div>

	     	<footer id="qbootstrap-footer" role="contentinfo" style="margin-top:100px;">
		<div class="row copyright" style="margin-top:-50px;">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block"><a href="../home.php" target="_blank" style="color:white;">| About us |</a></small> 
                    <small class="block" style="color:white;"><br>Designed by | Akash Shetty</a></small>
                </p>
			</div>
		</div>
	</footer>


</body>
</html>