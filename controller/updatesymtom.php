<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['editsym'])) 
{
	$id=$_POST['id'];
$dis_id=$_POST['dis_id'];
$symptoms=$_POST['symptoms'];


$stmt=$admin->ret("UPDATE `symptom` SET `dis_id`='".$dis_id."',`symptoms`='".$symptoms."' WHERE s_id=".$id);

echo "<script>alert('Symptoms updated successfully');window.location='../admin/viewsymptoms.php';</script>";

}

?>