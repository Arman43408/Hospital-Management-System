<?php 
    require_once "db.php";

    function add($name,$ad_date,$rl_date,$as_doc,$stat){
        $conn = getConnection();
        $sql = "insert into patient values('{$name}','{$ad_date}','{$rl_date}','{$as_doc}','{$stat}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

?>