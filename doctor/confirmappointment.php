
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
$stmt=$admin->ret("UPDATE `appointment` SET `Status`='Confirmed' WHERE app_id=".$id);

echo "<script>alert('Confirmed Successfully');window.location='viewappointment.php';</script>";

?>