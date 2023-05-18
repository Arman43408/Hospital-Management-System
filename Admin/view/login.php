<?php 
	$error = "";

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'error'){
			$error = "Password did not match!";
		}
	}

	require_once '../assets/JS/jsfunctionA.php';
	require_once '../assets/Ajax/ajax.html';
?>
<html>
<head>
	<title>Login</title>
</head>
<body background="../assets/Cover.jpg" link="#ffffff" alink="black" vlink="black" >
	<form name="loginForm" method="post" action="../controller/loginCheck.php" enctype="multipart/form-data" onsubmit="return validateLoginForm()">
		<fieldset>
			<legend style="text-align: center;"><h2>LOGIN</h2></legend>
			    <table align="center">
		            <tr>
						<td>Email</td>
						<td><input id="u_email" type="email" name="u_email" value="" ></td>
						<td><input type="button" name="btnCheck" value="Check Email" onclick="checkLogin()"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="u_password" value="" ></td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="Login" >
						</td>
						<td>
							<a href="registration.php"> Register </a>
						</td>
					</tr>
	            </table>
	            <table align="center">
	            	<tr>
	            		<td>
							<a href="home.php"> Back to Home Page </a>
						</td>
	            	</tr>
	            </table>
	    </fieldset>
	</form>
</body>
</html>