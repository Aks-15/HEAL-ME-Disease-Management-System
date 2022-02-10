<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['csignup'])) {
	# code...
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$adds=$_POST['adds'];
	$ph_no=$_POST['ph_no'];
	$email=$_POST['email'];
	
	$pwd=$_POST['pwd'];

	$sqsn=$_POST['sqsn'];
	$sans=$_POST['sans'];


	
	$stmt=$admin->loginClient("client",$name,$pwd);

	if ($stmt) {
		# code...
		echo "<script>alert('User exists');window.location='../patient/index.php';</script>";
	}
	else 
	{
	$stmt=$admin->add_data8("client","name","gender","adds","ph_no","email","sqsn","sans","pwd",$name,$gender,$adds,$ph_no,$email,$sqsn,$sans,$pwd);
	echo "<script>alert('Registered successfully');window.location='../patient/index.php';</script>";
	}
}
?>