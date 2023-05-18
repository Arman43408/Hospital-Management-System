<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.header {
  padding: 10px;
  text-align: center;
  background: #004764;
  color: white;
  font-size: 30px;
}

#rcorners2 {
  border-radius: 80px;
  border: 4px solid #73AD21;
  padding: 160px; 
  width: 1190px;
  height: 400px;  
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #004764;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  opacity: 0.6;
  transition: 0.3s;
  cursor: pointer;
  margin: 5px;
}

.button:hover {opacity: 1}

img {
  opacity: 0.5;
}


</style>
	<title>Smart Hospital</title>
</head>
    <body background=" ../assets/home.jpg" link="#ffffff" alink="black" vlink="black" >
    	<form id="rcorners2" method="post" action="" enctype="">
    		<div class="header">
            <h3>Welcome</h3>
            </div>
			<fieldset>
				<legend style="text-align: center;"><h2>Please select your user type:</h2></legend>
				<table align="center">
					<tr>
						<td>
							<input type="button" class="button" style="vertical-align:middle" name="" value="Patient" >
							<a href="../../Doctor">
							<input type="button" class="button" style="vertical-align:middle" name="" value="Doctor">
						    </a>
						</td>
					</tr>
					<tr>
						<td>
							<input type="button" class="button" style="vertical-align:middle" name="" value="Blood Bank">
							<a href="AdminLogin.php">
							<input type="button" class="button" style="vertical-align:middle" name="" value="Admin">
						    </a>
						</td>
					</tr>
				</table>
				<table align="center">
					<tr>
						<td>Do not have an account?
						</td>

						<td>
							<a href="registration.php">
							<input type="button" name="submit" value="Create An Account" >
						</a>
						</td>
					</tr>
					<tr>
						<td>Already Have an account
						</td>
						<td>
							<a href="login.php">
							<input type="button" name="submit" value="Login" >
						    </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
    </body>
</html>

