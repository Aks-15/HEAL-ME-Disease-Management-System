<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['sendnote'])) 
{

$did=$_POST['did'];
$cl_id=$_POST['cl_id'];
$date=date('y-m-d');

$note=$_POST['note'];


$stmt=$admin->ret("INSERT INTO `notification`(`d_id`,`cl_id`, `notes`,`date`) VALUES ('".$did."','".$cl_id."','".$note."','".$date."')");

echo "<script>alert('Notification sent successfully');window.location='../doctor/viewnoted.php';</script>";

}

?>