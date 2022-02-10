<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
$did=$_SESSION['did'];

if (isset($_POST['timing'])) 
{

$from1=$_POST['from1'];
$to1=$_POST['to1'];
$stmt=$admin->ret("SELECT * FROM timing  where did=".$did);
$count=$stmt->rowCount();
if($count==0)
{


$stmt=$admin->ret("INSERT INTO `timing`(`did`, `from1`, `to1`) VALUES ('".$did."','".$from1."','".$to1."')");

echo "<script>alert('Timings added successfully');window.location='../Doctor/viewtiming.php';</script>";

}
else
{

echo "<script>alert('Timings is already addded');window.location='../Doctor/viewtiming.php';</script>";
}
}

?>