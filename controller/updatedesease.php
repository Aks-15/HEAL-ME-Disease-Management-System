<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['editisease'])) 
{
$id=$_POST['id'];
$disname=$_POST['disname'];


$stmt=$admin->ret("UPDATE `disease` SET `dis_name`='".$disname."' WHERE dis_id=".$id);

echo "<script>alert('Disease updated successfully');window.location='../admin/viewdisease.php';</script>";

}

?>