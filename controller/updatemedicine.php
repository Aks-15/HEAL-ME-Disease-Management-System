<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['editmed'])) 
{
$id=$_POST['id'];
$dis_id=$_POST['dis_id'];
$medname=$_POST['name'];


$stmt=$admin->ret("UPDATE `medicine` SET `name`='".$medname."',`dis_id`='".$dis_id."' WHERE med_id=".$id);

echo "<script>alert('Medication updated successfully');window.location='../admin/viewmedicine.php';</script>";

}

?>