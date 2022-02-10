
<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
if (!isset($_SESSION['doctor'])) {
		# code...
	header("location:index.php");

	}
$id=$_GET['id'];
$id2=$_GET['id2'];
$id3=$_GET['id3'];
$stmt=$admin->Rcud("UPDATE `appointment` SET `Status`='Cancelled' WHERE app_id=".$id);
$admin->redirect1('../doctor/sendnotification.php?cl_id='.$id2.'&d_id='.$id3);
// echo "<script>alert('Cancelled Successfully');window.location='sendnotification.php?id3=';</script>";

?>