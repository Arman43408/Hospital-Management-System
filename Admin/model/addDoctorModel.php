<?php 
    require_once "db.php";

    function add($d_name,$j_date,$desig,$d_stat){
        $conn = getConnection();
        $sql = "insert into doctor values('{$d_name}','{$j_date}','{$desig}','{$d_stat}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

?>