<?php 
	session_start();
	require_once "../model/addDonorModel.php";
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
		<script>
  function val() 
  {
  let donorname = document.forms["adddonor"]["don_name"].value;
  let bloodg = document.forms["adddonor"]["don_bg"].value;
  let donstatus = document.forms["adddonor"]["don_stat"].value;
  if (donorname == "" || bloodg == "" || donstatus == "") {
    alert("Null Input!!!");
    return false;
    }
  }
</script>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form name="adddonor" method="post" action="../controller/add_donor_v.php" onsubmit="return val()">
    	<fieldset>
    
      	<legend style="text-align: center;"><h2>Add Donor</h2></legend>
        <table align="center">
					<tr>
						<td>Donor's Name</td>
						<td><input type="text" name="don_name" value="" ></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td><input type="text" name="don_bg" value="" ></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><input type="text" name="don_stat" value="" ></td>
					</tr>
		  </table>
	</form>
	<form action="../controller/uploadCheckDonor.php" method="post" enctype="multipart/form-data">
		<table align="center">
     	<tr>
     	<td>Upload : </td>
     	<td>
     	<input type="file" name="myfile" >
     	</td>
     	</tr>
      </table>
          <table align="center">
					<tr>
						<td>
							<input type="submit" name="submit" value="Add">
						</td>
					</tr>
		  </table>
		  <table align="center">
					<tr>
						<td>
							<a href="adminProfile.php">
							<input type="button" name="" value="Back">
						    </a>
						</td>
					</tr>
		  </table>				
      </fieldset>
    </form>
  </body>
</html>
<?php 
	}else{
		echo " Please Login Again!!";
	}  
?>
