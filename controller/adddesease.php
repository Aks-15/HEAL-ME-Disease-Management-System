<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['adddisease'])) 
{
$disname=$_POST['disname'];
$stmt=$admin->ret("SELECT * FROM disease where dis_name='$disname'");
$count=$stmt->rowCount();
if ($count==1) {
	# code...
	echo "<script>alert('Disease Exist');window.location='../admin/adddisease.php';</script>";
}
else
{
$stmt=$admin->ret("INSERT INTO `disease`(`dis_name`) VALUES ('".$disname."')");
echo "<script>alert('Disease added successfully');window.location='../admin/viewdisease.php';</script>";
}
}
?>