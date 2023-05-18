<?php 
	session_start();
	require_once "../model/patientModel.php";
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
	<style>
	#rcorners1 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 700px;
    height: 150px;  
    }
    #s1 {
    color: black;
    text-shadow: 2px 2px 4px #000000;
    }
    #t1{
    	color: coral;
    	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }
    </style>
	<title>Patients</title>
</head>
     <body background="../assets/doccover.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
        <form method="post" action="../controller/adminCheck.php">
    	    <fieldset>
      	    <legend style="text-align: center;"><h1 id="s1">Patient Information</h1></legend>
      	    <br><br><br>
      	    <table align="center">
      	    	<tr>
      	    		<td id="t1"><h2>
      	    			Name - 
      	    		</h2>
      	    		</td>
      	    		<td id="t1"><h2>
      	    			 Admission Date -
      	    			</h2>
      	    		</td>
      	    		<td id="t1"><h2>
      	    			 Release Date -
      	    			</h2>
      	    		</td>
      	    		<td id="t1"><h2>
      	    			 Assigned Doctor -
      	    			</h2>
      	    		</td>
      	    		<td id="t1"><h2>
      	    			 Status
      	    			</h2>
      	    		</td>
      	    	</tr>
      	    </table>
                <table align="center" id="rcorners1">
					<tr>
						<td id="t1"><h2>
							<?php 
                        	patient();
                            ?>
                            </h2>
						</td>
					</tr>
					<tr>
						<td align="center">
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