<?php 
	session_start();
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#rcorners2 {
  border-radius: 80px;
  border: 4px solid #004764;
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
  font-size: 15px;
  padding: 30px;
  width: 200px;
  opacity: 0.6;
  transition: 0.3s;
  cursor: pointer;
  margin: 5px;
}

.header {
  padding: 5px;
  text-align: center;
  background: #004764;
  color: white;
  font-size: 20px;
}

.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #001264;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 30px;
  width: 200px;
  opacity: 0.6;
  transition: 0.3s;
  cursor: pointer;
  margin: 5px;
}

.button:hover {opacity: 1}
.button1:hover {opacity: 2}
</style>
<title>Admin Profile</title>
</head>
<body background="../assets/acover.jpg" link="#ffffff" alink="black" vlink="black" >
	<form id="rcorners2">
			<legend class="header" style="text-align: center;"><h2>Welcome to Admin Profile</h2></legend>
			<table align="center">
				<tr>
					<td>
						<a href="authorization.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="User Authorization"></h3></a>
					</td>
					<td>
						<a href="block_profile.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Block Profile"></h3></a>
					</td>
					<td>
						<a href="docinfo.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Doctor Information"></h3></a>
					</td>
					<td>
						<a href="transaction.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Transactions Record"></h3></a>
					</td>
					<td>
						<a href="add_donor.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Add Blood Donor"></h3></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="patientinfo.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Patient Information"></h3></a>
					</td>
					<td>
						<a href="leaveapplication.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Leave Application"></h3></a>
					</td>
					<td>
						<a href="add_patient.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Add Patients"></h3></a>
					</td>
					<td>
						<a href="complain.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Complain/Query"></h3></a>
					</td>
					<td>
						<a href="add_doc.php"><h3><input type="button" class="button" style="vertical-align:middle" name="" value="Add Doctors"></h3></a>
					</td>
				</tr>
			</table>
			<table align="center">
				<tr>
					<td>
						<a href="../controller/alogout.php"><h4><input type="button" class="button1" style="vertical-align:middle" name="" value="Logout"></h4></a>
					</td>
				</tr>
			</table>
			<br><br>
	</form>
</body>
</html>

<?php 
	}else{
		echo " Please Login Again!!";
	}  
?>