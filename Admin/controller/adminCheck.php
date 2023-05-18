<?php 
	session_start();

	require_once "../model/adminModel.php";

	$email = $_POST['a_email'];
	$password = $_POST['a_password'];

	if($email == null || $password == null){
		echo "null email/password";
	}else{
		$status = adminLogin($email, $password);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/adminProfile.php');
		}
		
		echo "invalid user";
	}

?>