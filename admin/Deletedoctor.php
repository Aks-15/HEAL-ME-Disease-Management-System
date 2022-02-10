<?php 

define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
if (!isset($_SESSION['admin'])) {
		# code...
	header("location:index.php");

	}


   $id=$_GET['id'];
  
   $res=$admin->delete('doctors','d_id',$id);
     echo "<script>alert('Doctor deleted successfully');window.location='viewdoctorsinfo.php';</script>";
?>
