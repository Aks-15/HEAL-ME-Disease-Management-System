<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['appointment'])) 
{
$id=$_POST['id'];
$cid=$_POST['cid'];
$date=$_POST['date'];
$time=$_POST['time'];
$details=$_POST['details'];
$date1=date('Y-m-d');

  // echo $date1;

if ($date<=$date1) {
	# code...
	echo "<script>alert('Sorry your date got expired');window.location='../patient/ViewDoctor.php';</script>";

}
else
{

$stmt=$admin->Rcud("INSERT INTO `appointment`(`cl_id`, `d_id`, `date`, `time`, `description`, `Status`) VALUES ('".$cid."','".$id."','".$date."','".$time."','".$details."','Pending')");

// echo "<script>alert('Appointment added successfully, Please wait for the Confirmation from the Doctor');window.location='../patient/viewappointment.php';</script>";
$admin->redirect1('../patient/viewappointment.php?aid='.$stmt.'&d_id='.$id);
}
}
?>