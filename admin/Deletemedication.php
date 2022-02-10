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

$stmt=$admin->ret("DELETE FROM `medicine` WHERE med_id=".$id);
 echo "<script>alert('Medication deleted successfully');window.location='../admin/viewmedicine.php';</script>";
?>