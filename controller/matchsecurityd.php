<?php
define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
//$control->isLogged('admin', 'admin/index'); 

?>
<?php
if (isset($_POST['btn'])) {
	# code.
	$email=$_POST['email'];
	$sq=$_POST['sqsn'];
	$sa=$_POST['sans'];
	//$date=$_POST['date'];
	//$c_id=$_POST['coordinator'];
	$stmt=$admin->ret('select * from doctors where d_mail="'.$email.'" and sqsn="'.$sq.'" and sans="'.$sa.'"');
	$rc=$stmt->rowCount();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rc>0){
		$_SESSION['id']=$row['d_id'];
  echo '<script>alert("You can change your password now");window.location="../doctor/newpass.php";</script>';
	}else{
  echo '<script>alert("Sorry!! please try again");window.location="../doctor/forgotpass.php";</script>';
		
	}
}

?>