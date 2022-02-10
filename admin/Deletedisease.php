<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
if (!isset($_SESSION['admin'])) {
		# code...
	header("location:index.php");

	}

$id=$_GET['id'];

$stmt=$admin->ret("DELETE FROM disease, symptom , medicine USING disease INNER JOIN symptom ON disease.dis_id = symptom.dis_id INNER JOIN medicine on medicine.dis_id=disease.dis_id WHERE disease.dis_id=".$id);
 echo "<script>alert('Disease deleted successfully');window.location='../admin/viewdisease.php';</script>";
?>