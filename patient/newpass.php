<!DOCTYPE html>
<html>
<head>
	<title>Newpassword</title>
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
<body style="background-image: url('images/a31.jpg');">
		<div class="row">
			<div class="col-md-2" style="margin-left:-240px;"></div>
				<div class="col-md-4" style="background-image: url('../images/qsn.jpg');">
					
				</div>
			<div class="card col-md-4" style="margin-top:80px;">
			<div class="card-header badge-info">
				<center>Change Password</center>
			</div>

	<form  class="login100-form validate-form" method="POST" action="../Controller/changepass.php">


					<div class="form-group form-row">
						<label class="col-md-4">New Password</label>
						<input type="password" id="one" name="pass" class="form-control col-md-8" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter with minimum of 8 characters" required>
					</div>
                     <input type="hidden" name="id" name="id" value="<?php echo $_SESSION['cid']; ?>">
					<div class="form-group form-row">
						<label class="col-md-4">Ensure Password</label>
						<input type="password" id="two" name="sans" class="form-control col-md-8" onchange="match(this.value)" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter with minimum of 8 characters" required>
					</div>
			

					
				<div style="margin-left:175px;">
					<input type="submit" name="btn" class="btn btn-primary">
				</div>
				</form>
				</div>
				</div>
				<div class="col-md-3"></div>
			</div>
	     </div>
<script type="text/javascript">
	function match(str){
		var p1=document.getElementById('one').value;
		if(p1==str){
        //alert('Your password Successfully.');
		
		}else{
        document.getElementById('two').value='';
        alert('Password is not matching.Please try again!!.');
       // document.getElementById('one').value;
		}
	}
</script>

</body>
</html>