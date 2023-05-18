<?php 
	session_start();
	require_once "../model/bdocModel.php";
	if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>
<html>
<head>
	<style>
	#rcorners1 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 1000px;
    height: 150px;  
    }
    #s1 {
    color: black;
    text-shadow: 2px 2px 4px #000000;
    }
    </style>

	<title>Doctor Block List</title>
</head>
     <body background="../assets/doccover.jpg" link="#ffffff" alink="#017bf5" vlink="#ffffff" >
        <form method="post" action="../controller/block_doc_v.php">
    	   <fieldset>
      	    <legend style="text-align: center;"><h1 id="s1">Doctor's List</h1></legend>
      	    <br><br><br>
                <table align="center" id="rcorners1">
					<tr>
						<td style="color: coral;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><h2>
							<?php 
							
							application1();

                            ?>
                        </h2>
						</td>
						<td>
							<input type="submit" style="height: 50px; width: 100px;" name="submit1" value="Block">
						</td>		
						<td>
							<input type="submit" style="height: 50px; width: 100px;" name="submit2" value="Unblock">
						</td>	
					</tr>
					<tr>
						<td style="color: coral;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><h2>
							<?php 

							application2();

                            ?>
                        </h2>
						</td>
						<td>
							<input type="submit" style="height: 50px; width: 100px;" name="submit3" value="Block">
						</td>
						<td>
							<input type="submit" style="height: 50px; width: 100px;" name="submit4" value="Unblock">
						</td>
					</tr>
					<table align="center" id="rcorners1">
					<tr>
						<td align="center">
							<a href="block_profile.php">
							<input type="button" style="height: 70px; width: 100px;" name="" value="Back">
						    </a>
						</td>
					</tr>
				</table>
			</table>
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

