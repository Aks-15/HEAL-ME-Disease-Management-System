<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['dsignup'])) {
	# code...
	$d_name=$_POST['d_name'];
	$d_adds=$_POST['d_adds'];
	$d_qualfn=$_POST['d_qualfn'];
	$d_splist=$_POST['d_splist'];
	$d_phno=$_POST['d_phno'];
	$d_clnc=$_POST['d_clnc'];
	$d_clncloc=$_POST['d_clncloc'];
	$d_email=$_POST['d_mail'];
	$d_pwd=$_POST['d_pwd'];
	$sq=$_POST['sqsn'];
	$sa=$_POST['sans'];


	$target_dir = "../uploads/";
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	$image = $_FILES['image']['name'];
    $image_name_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name_tmp, "../uploads/$image");
	

	$stmt=$admin->logindoctor("doctors",$d_name,$d_pwd);

	if ($stmt) {
		# code...
		echo "<script>alert('User exists');window.location='../doctor/index.php';</script>";
	}
	else 
	{
	$stmt=$admin->ret("INSERT INTO `doctors`(`d_name`, `d_adds`, `d_qualfn`, `d_splist`, `image`, `d_phno`, `d_clnc`, `d_clncloc`, `d_mail`, `d_pwd`, `sqsn`, `sans`) VALUES ('".$d_name."','".$d_adds."','".$d_qualfn."','".$d_splist."','".$image."','".$d_phno."','".$d_clnc."','".$d_clncloc."','".$d_email."','".$d_pwd."','".$sq."','".$sa."')");
	echo "<script>alert('Registered successfully');window.location='../doctor/addexperience.php';</script>";
	echo $sq;echo $sa;
	}
}

?>