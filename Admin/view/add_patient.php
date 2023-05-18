<?php 
	session_start();
	require_once "../model/addPatientModel.php";
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
<script>
  function val() 
  {
  let pname = document.forms["addpatient"]["p_name"].value;
  let addate = document.forms["addpatient"]["ad_date"].value;
  let rldate = document.forms["addpatient"]["rl_date"].value;
  let assindoc = document.forms["addpatient"]["as_doc"].value;
  let pstat = document.forms["addpatient"]["stt"].value;
  if (pname == "" || addate == "" || rldate == "" || assindoc == "" || pstat == "") {
    alert("Null Input!!!");
    return false;
    }
  }
</script>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form name="addpatient" method="post" action="../controller/add_patient_v.php" onsubmit="return val()">
    	<fieldset>
    
      	<legend style="text-align: center;"><h2>Add Patient</h2></legend>
        <table align="center">
					<tr>
						<td>Patient's Name</td>
						<td><input type="text" name="p_name" value="" ></td>
					</tr>
					<tr>
						<td>Admission Date</td>
						<td><input type="text" name="ad_date" value="" ></td>
					</tr>
					<tr>
						<td>Release Date</td>
						<td><input type="text" name="rl_date" value="" ></td>
					</tr>
					<tr>
						<td>Assigned Doctor</td>
						<td><input type="text" name="as_doc" value="" ></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><input type="text" name="stt" value="" ></td>
					</tr>
		  </table>
		</form>
		<form action="../controller/uploadCheckPatient.php" method="post" enctype="multipart/form-data">
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