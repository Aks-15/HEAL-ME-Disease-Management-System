<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['send'])) 
{

$cid=$_POST['id'];
// $d_id=$_POST['d_id'];
$date=date('y-m-d');

$description=$_POST['description'];


$stmt=$admin->ret("INSERT INTO `feedback`(`cl_id`,`description`,`date`) VALUES ('".$cid."','".$description."','".$date."')");

echo "<script>alert('Feedback sent successfully');window.location='../patient/patientdashboard.php';</script>";

}

?>