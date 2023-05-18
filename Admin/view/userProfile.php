<?php 
  session_start();
  if(isset($_SESSION['status']) && isset($_COOKIE['status'])){
?>


<html>
<head>
  <title>User</title>
</head>
     <body background="../assets/Cover.jpg" link="#ffffff" alink="black" vlink="black" >
        <form method="post" action="">
          <fieldset>
            <legend style="text-align: center;"><h1>Welcome</h1></legend>
            <br><br><br>
                <table align="center">
          <tr>
            <td><h2>User Profile</h2>
            </td>
          </tr>
          <tr>
            <td align="center">
              <a href="../controller/ulogout.php">
              <input type="button" style="height: 70px; width: 100px;" name="" value="Logout">
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