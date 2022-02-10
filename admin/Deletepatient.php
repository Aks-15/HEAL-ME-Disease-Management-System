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

$stmt=$admin->ret("DELETE FROM `client` WHERE cl_id=".$id);
 echo "<script>alert('Patient deleted successfully');window.location='../admin/viewpatients.php';</script>";
?>