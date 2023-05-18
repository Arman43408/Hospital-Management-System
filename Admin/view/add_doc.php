<?php 
	session_start();
	require_once "../model/addDoctorModel.php";
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>

<html>
<head>
	<script>
  function val() 
  {
  let dname = document.forms["adddoc"]["doc_name"].value;
  let joinning = document.forms["adddoc"]["join"].value;
  let designation = document.forms["adddoc"]["des"].value;
  let status = document.forms["adddoc"]["d_stt"].value;
  if (dname == "" || joinning == "" || designation == "" || status == "") {
    alert("Null Input!!!");
    return false;
    }
  }
</script>
	<title>Admin</title>
</head>
  <body background="../assets/Admin.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
    <form name="adddoc" method="post" action="../controller/add_doc_v.php" onsubmit="return val()">
    	<fieldset>
    
      	<legend style="text-align: center;"><h2>Add Doctor</h2></legend>
        <table align="center">
					<tr>
						<td>Doctor's Name</td>
						<td><input type="text" name="doc_name" value="" ></td>
					</tr>
					<tr>
						<td>Joinning Date</td>
						<td><input type="text" name="join" value="" ></td>
					</tr>
					<tr>
						<td>Designation</td>
						<td><input type="text" name="des" value="" ></td>
					</tr>
					<tr>
						<td>Status</td>
						<td><input type="text" name="d_stt" value="" ></td>
					</tr>
		  </table>
    </form>
     <form action="../controller/uploadCheckDoc.php" method="post" enctype="multipart/form-data">
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
						</td>
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