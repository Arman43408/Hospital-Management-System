<?php 
	session_start();
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Block Profile</title>
</head>
     <body background="../assets/doccover.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
        <form method="post" action="../controller/block_profile_v.php">
    	    <fieldset>
      	    <legend style="text-align: center;"><h1>Block Profile</h1></legend>
      	    <br><br><br>
                <table align="center">
					<tr>
						<td>
							<a href="block_doc.php">
							<input type="submit" style="height: 50px; width: 100px;" name="doc" value="Block Doctor">
						    </a>
						</td>
						<td>
							<a href="block_pat.php">
							<input type="submit" style="height: 50px; width: 100px;" name="pat" value="Block Patient">
						    </a>
						</td>
						<td>
							<a href="block_don.php">
							<input type="submit" style="height: 50px; width: 100px;" name="don" value="Block Donor">
						    </a>
						</td>
					</tr>
		        </table>
		        <table align="center">
		        	<tr>
						<td>
							<a href="adminProfile.php">
							<input type="button" style="height: 70px; width: 100px;" name="" value="Back">
						    </a>
						</td>
					</tr>
		        </table>
		        <br><br><br>			
            </fieldset>
        </form>
    </body>
</html>
<?php 
	}else{
		echo " Please Login Again!!";
	}  
?>

