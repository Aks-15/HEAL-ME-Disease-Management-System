<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['edit'])) {
	# code...
	$cid=$_POST['cid'];
	$name=$_POST['cname'];
	$gender=$_POST['gender'];
	$adds=$_POST['adds'];
	$ph_no=$_POST['ph_no'];
	$email=$_POST['email'];
	
	// $pwd=$_POST['pwd'];

	// $sqsn=$_POST['sqsn'];
	// $sans=$_POST['sans'];


	
	// $stmt=$admin->loginClient("client",$name,$pwd);

	// if ($stmt) {
	// 	# code...
	// 	echo "<script>alert('User exists');window.location='../patient/index.php';</script>";
	// }
	// else 
	// {
	$stmt=$admin->Rcud("UPDATE `client` SET `name`='".$name."',`gender`='".$gender."',`adds`='".$adds."',`ph_no`='".$ph_no."',`email`='".$email."' WHERE `cl_id`='".$cid."'");
	//$stmt=$admin->edit_data5("client","name","gender","adds","ph_no","email",$name,$gender,$adds,$ph_no,$email,"cl_id",$cid);
	echo "<script>alert('Your profile edited successfully');window.location='../patient/patientdashboard.php';</script>";
	// }
}
?>