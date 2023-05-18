<?php 
    session_start();

    require_once "../model/addDonorModel.php";

    $don_name = $_POST['don_name'];
    $don_bg = $_POST['don_bg'];
    $don_stat = $_POST['don_stat'];

    if($don_name == null || $don_bg == null || $don_stat == null){
        echo "Null Input";
    }else{
        add($don_name,$don_bg,$don_stat);
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/add_donor.php');
    }

?>