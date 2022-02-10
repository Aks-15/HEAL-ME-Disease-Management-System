<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['edit'])) {
	# code...
	$cid=$_POST['cid'];
	$name=$_POST['cname'];
	
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
	$stmt=$admin->edit_data4("doctors","d_name","d_qualfn","d_splist","time_id",$d_name,$d_qualfn,$d_splist,$d_splist,"cl_id",$cid);
	echo "<script>alert('Registered successfully');window.location='../patient/index.php';</script>";
	// }
}
?>