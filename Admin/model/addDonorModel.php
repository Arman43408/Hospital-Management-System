<?php 
    require_once "db.php";

    function add($don_name,$don_bg,$don_stat){
        $conn = getConnection();
        $sql = "insert into donor values('{$don_name}','{$don_bg}','{$don_stat}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

?>