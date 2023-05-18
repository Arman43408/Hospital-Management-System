<?php 
  $error = "";

  if(isset($_REQUEST['msg'])){
    if($_REQUEST['msg'] == 'error'){
      $error = "Password did not match!";
    }
  }

  require_once '../assets/JS/jsfunctionA.php';
?>
<html>
<head>
<style>
.header {
  padding: 10px;
  text-align: center;
  background: #004764;
  color: white;
  font-size: 30px;
}

#rcorners2 {
  border-radius: 100px;
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

.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #004764;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 150px;
  opacity: 0.6;
  transition: 0.3s;
  cursor: pointer;
  margin: 5px;
}

.button:hover {opacity: 1}
.button1:hover {opacity: 1}

img {
  opacity: 0.5;
}


</style>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form id="rcorners2" name="adminLogin" method="post" action="../controller/adminCheck.php" onsubmit="return validateAdminForm()">
      	<legend class="header" style="text-align: center;"><h2>Admin Page</h2></legend>
      	<br><br>
        <table align="center">
					<tr>
						<td>Email</td>
						<td><input type="email" name="a_email" value=""></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="a_password" value="" required></td>
					</tr>
		  </table>
		
          <table align="center">
					<tr>
						<td>
							<input type="submit" class="button1" name="submit" value="Login">
						</td>
					</tr>
		  </table>
		  <table align="center">
					<tr>
						<td>
							<a href="Home.php">
							<input type="button" class="button1" name="" value="Home Page">
						    </a>
						</td>
					</tr>
		  </table>				
    </form>
  </body>
</html>
