<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['dlogin'])) {
	# code...
	$name=$_POST['d_name'];
	
	$pwd=$_POST['d_pwd'];
	
	$stmt=$admin->logindoctor("doctors",$name,$pwd);

	if ($stmt) {
		# code...
		echo "<script>alert('Login successfully done');window.location='../doctor/doctordashboard.php';</script>";
	}
	else 
	{
	echo "<script>alert('Fail');window.location='../doctor/signup.php';</script>";
	}
}

?>