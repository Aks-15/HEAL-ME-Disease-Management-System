<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['sendfeedback'])) 
{

$cid=$_POST['cid'];
$d_id=$_POST['d_id'];
$date=date('y-m-d');

$description=$_POST['description'];


$stmt=$admin->ret("INSERT INTO `feedback`(`cl_id`, `d_id`, `description`, `date`) VALUES ('".$cid."','".$d_id."','".$description."','".$date."')");

echo "<script>alert('Feedback sent successfully');window.location='../patient/viewfeedback.php';</script>";

}

?>