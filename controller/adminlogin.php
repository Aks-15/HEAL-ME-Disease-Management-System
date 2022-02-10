<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['alogin'])) {
	# code...
	$a_uname=$_POST['a_uname'];
	
	$a_upwd=$_POST['a_upwd'];
	
	$stmt=$admin->loginAdmin($a_uname,$a_upwd);

	if ($stmt) {
		# code...
		echo "<script>alert('Login successfully done');window.location='../admin/admindashboard.php';</script>";
	}
	else 
	{
	echo "<script>alert('Fail');window.location='../admin/index.php';</script>";
	}
}

?>