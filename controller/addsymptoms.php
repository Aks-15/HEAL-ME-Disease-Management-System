<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['addsym'])) 
{

$dis_id=$_POST['dis_id'];
$symptoms=$_POST['symptoms'];


$stmt=$admin->ret("INSERT INTO `symptom`(`dis_id`,`symptoms`) VALUES ('".$dis_id."','".$symptoms."')");

echo "<script>alert('Symptoms added successfully');window.location='../admin/viewsymptoms.php';</script>";

}

?>