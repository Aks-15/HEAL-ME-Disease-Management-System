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
	$id=$_SESSION['id'];
   $table='doctors';
	$pass=$_POST['pass'];
	//$pass2=$_POST['pass2'];

    $stmt=$admin->edit_data1($table,'d_pwd',$pass,'d_id',$id);

  echo '<script>alert("Your password has been changed");window.location="../doctor/index.php";</script>';


}

?>