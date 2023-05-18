<?php 
	$error = "";

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'error'){
			$error = "Password did not match!";
		}
	}

	require_once "../model/registrationModel.php";
	require_once '../assets/JS/jsfunctionA.php';
	require_once '../assets/Ajax/ajax.html';

?>
<html>
<head>
	<title>Smart Hospital</title>
</head>
    <body background=" ../assets/Cover.jpg" link="#ffffff" alink="black" vlink="black" >
    	
    	<form name="regForm" method="post" action="../controller/regCheck.php" enctype="multipart/form-data" onsubmit="return validateRegForm()">
			<fieldset>
				<legend style="text-align: center;"><h2>Registration</h2></legend>
				<table border=0.5 align="center">

					<tr>
						<td>First Name</td>
						<td><input type="text" name="n_fname" value="" ></td>
						<td>Last Name</td>
						<td><input type="text" name="n_lname" value="" ></td>
					</tr>
					<tr>
						<td>Your Email</td>
						<td><input id="n_email" type="email" name="n_email" value="" ></td>
						<td><input type="button" name="btnCheck" value="Check Email" onclick="checkEmail()"> </td>
					</tr>
					<tr>
						<td>Your Phone</td>
						<td><input type="number" name="n_phone" value="" ></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><input type="text" name="n_address" value="" required></td>
						<td>Country</td>
						<td>
							<select name="n_country">
								<option value="Bangladesh">Bangladesh</option>
								<option value="India">India</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Nepal">Nepal</option>
								<option value="Sri Lanka">Sri Lanka</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td><input type="date" name="n_dob" value="" ></td>
						<td>Blood Group</td>
						<td>
							<select name="n_bloodgroup">
								<option value="AB(+ve)">AB(+ve)</option>
								<option value="AB(-ve)">AB(-ve)</option>
								<option value="A(+ve)">A(+ve)</option>
								<option value="A(-ve)">A(-ve)</option>
								<option value="B(+ve)">B(+ve)</option>
								<option value="B(-ve)">B(-ve)</option>
								<option value="O(+ve)">O(+ve)</option>
								<option value="O(-ve)">O(-ve)</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
								<input type="radio" name="gender" value="Male" > Male
								<input type="radio" name="gender" value="Female" > female
								<input type="radio" name="gender" value="Others" > Other
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="n_pass" value="" ></td>
						<td>Confirm Password</td>
						<td><input type="password" name="n_cpass" value="" ></td>
					</tr>
					
				</table>
				<table align="center">
					<tr>
						<td>
							<a href="login.php">
							<input type="submit" name="submit" value="Register" >
						</a>
						</td>
					</tr>
				</table>
				<tr>
					<td></td>
				</tr>
				<div align="center"><h3>
			    	<a href="home.php"> Back to Home Page </h3></a>
			    </div>
            </fieldset>
		</form>
    </body>
</html>

