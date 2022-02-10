<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['sendreply'])) 
{
$bid=$_POST['bid'];
$cid=$_POST['cid'];
$d_id=$_POST['d_id'];

$target_dir = "../uploads/";
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	$image = $_FILES['image']['name'];
    $image_name_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name_tmp, "../uploads/$image");

$message=$_POST['rmsg'];


$stmt=$admin->ret("UPDATE `chat` SET `rmsg`='".$message."',`img`='".$image."',`status`='Replied' WHERE box_id=".$bid);
// $stmt=$admin->ret("UPDATE `chatrequest` SET `status`='Replyed' WHERE box_id=".$bid);
echo "<script>alert('Replied successfully');window.location='../doctor/viewquestion.php';</script>";

}

?>