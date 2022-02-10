<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['medname'])) 
{

$dis_id=$_POST['dis_id'];
$medname=$_POST['name'];


$stmt=$admin->ret("INSERT INTO `medicine`(`dis_id`,`name`) VALUES ('".$dis_id."','".$medname."')");

echo "<script>alert('Medication added successfully');window.location='../admin/viewmedicine.php';</script>";

}

?>