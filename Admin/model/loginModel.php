<?php 
    require_once "db.php";

    function userLogin($email, $password){
        $conn = getConnection();
		$sql = "select * from registration where email='{$email}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

?>