<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
$did=$_SESSION['did'];
if (isset($_POST['addexp'])) 
{

$adds=$_POST['adds'];
$doj=$_POST['doj'];
$dur=$_POST['dur'];
$frm=$_POST['frm'];
$tto=$_POST['tto'];


$stmt=$admin->ret("INSERT INTO `experience`(`d_id`, `adds`, `doj`, `frm`,`tto`) VALUES ('".$did."','".$adds."','".$doj."','".$dur."','".$frm."','".$tto."')");

echo "<script>alert('Experience added successfully');window.location='../admin/viewexperience.php';</script>";

}

?>