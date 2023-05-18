<?php 
    require_once "db.php";

    function add($firstname,$lastname,$email,$phone,$address,$country,$dob,$bloodgroup,$genderType,$password,$cpassword){
        $conn = getConnection();
        $sql = "insert into registration values('{$firstname}','{$lastname}','{$email}','{$phone}','{$address}','{$country}','{$dob}','{$bloodgroup}','{$genderType}','{$password}','{$cpassword}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

?>