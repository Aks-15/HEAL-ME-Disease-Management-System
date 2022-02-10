<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['edit'])) {
	# code...
	$did=$_POST['did'];

	
	$d_name=$_POST['d_name'];
	$d_adds=$_POST['d_adds'];
	$d_qualfn=$_POST['d_qualfn'];
	$d_splist=$_POST['d_splist'];
	$d_phno=$_POST['d_phno'];
	$d_clnc=$_POST['d_clnc'];
	$d_clncloc=$_POST['d_clncloc'];
	$d_mail=$_POST['d_mail'];

	$target_dir = "../uploads/";
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	$image = $_FILES['image']['name'];
    $image_name_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name_tmp, "../uploads/$image");

	$stmt=$admin->ret("UPDATE `doctors` SET `d_name`='".$d_name."',`d_adds`='".$d_adds."',`d_qualfn`='".$d_qualfn."',`d_splist`='".$d_splist."',`image`='".$image."',`d_phno`='".$d_phno."',`d_clnc`='".$d_clnc."',`d_clncloc`='".$d_clncloc."',`d_mail`='".$d_mail."' WHERE d_id=".$did);
	echo "<script>alert('Edited successfully');window.location='../doctor/doctordashboard.php';</script>";
	// }
}
?>