<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['sendquestion'])) 
{

$cid=$_POST['cid'];
$d_id=$_POST['d_id'];
$date=date('y-m-d');

$message=$_POST['message'];


$stmt=$admin->ret("INSERT INTO `chat`(`c_id`, `d_id`, `smsg`, `date`, `status`) VALUES ('".$cid."','".$d_id."','".$message."','".$date."','Requested')");

echo "<script>alert('Question sent to the doctor successfully, Please wait for the reply');window.location='../patient/viewreply.php';</script>";

}

?>