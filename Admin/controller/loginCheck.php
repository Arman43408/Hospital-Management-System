<?php 
	session_start();

	require_once "../model/loginModel.php";

	$email = $_POST['u_email'];
	$password = $_POST['u_password'];

	if($email == null || $password == null){
		echo "null email/password";
	}else{
		$status = userLogin($email, $password);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/userProfile.php');
		}
		
		echo "invalid user";
	}

?>