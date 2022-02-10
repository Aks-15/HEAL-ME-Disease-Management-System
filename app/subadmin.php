<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */
require_once '../config.php';
require_once 'app/main.php';
class Admin extends Main
{
	protected $id;

	public function __construct()
	{
		$this->id = $_SESSION['admin'];
		parent::__construct();
	}

	public function loginAdmin($name,$password)
	{
		try{
			$stmnt = $this->conn->prepare("SELECT `a_id`, `a_uname`, `a_upwd` FROM `admin` WHERE `a_uname` = ? AND `a_upwd` = ?");
			$stmnt->bindParam("name", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $res['a_id'];
			if($count){
				$_SESSION['admin']= $id;
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}
	public function loginUser($name,$password)
	{
		try{
			$stmnt = $this->conn->prepare("SELECT `cl_id`, `name`, `gender`, `adds`, `ph_no`, `email`, `sqsn`, `sans`, `pwd` FROM `client` WHERE  `name` = ? AND `pwd` = ?");
			$stmnt->bindParam("name", $name,PDO::PARAM_STR) ;
			$stmnt->bindParam("password", $password,PDO::PARAM_STR) ;
			$stmnt->execute();
			$count=$stmnt->rowCount();
			$res=$stmnt->fetch(PDO::FETCH_ASSOC);
			$id = $res['id'];
			if($count){
				$_SESSION['admin']= $id;
				return true;
			}else{
				return false;
			}

		}catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}

		// updating indivisual customer
	public function cud($res,$message){
		try {
			$stmt = $this->conn->prepare($res);
			$stmt->execute();
			$_SESSION['success_message'] = "Successfully ".$message;
			return true;
		} catch (PDOException $e) {
			echo $e->getMessage();
			$_SESSION['error_message'] = "Sorry  still not ".$message;
			return false;
		}
	}
}
?>