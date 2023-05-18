<?php 
    session_start();

    require_once "../model/addPatientModel.php";

    $name = $_POST['p_name'];
    $ad_date = $_POST['ad_date'];
    $rl_date = $_POST['rl_date'];
    $as_doc = $_POST['as_doc'];
    $stat = $_POST['stt'];

    if($name == null || $ad_date == null || $rl_date == null || $as_doc == null || $stat == null){
        echo "Null Input";
    }else{
        add($name,$ad_date,$rl_date,$as_doc,$stat);
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/add_patient.php');
    }

?>