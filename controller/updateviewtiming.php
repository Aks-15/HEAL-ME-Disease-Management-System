<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['timing'])) 
{
$id=$_POST['id'];
$from1=$_POST['from1'];
$to1=$_POST['to1'];


$stmt=$admin->ret("UPDATE `timing` SET `from1`='".$from1."',`to1`='".$to1."' WHERE time_id=".$id);

echo "<script>alert('Timing updated successfully');window.location='../doctor/viewtiming.php';</script>";

}

?>