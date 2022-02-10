<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['clogin'])) {
	# code...
	$name=$_POST['name'];
	
	$pwd=$_POST['pwd'];
	
	$stmt=$admin->loginClient("client",$name,$pwd);

	if ($stmt) {
		# code...
		echo "<script>alert('Login successfully done');window.location='../patient/patientdashboard.php';</script>";
	}
	else 
	{
	echo "<script>alert('Fail');window.location='../patient/signup.php';</script>";
	}
}

?>