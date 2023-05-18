<?php 
    session_start();

    require_once "../model/addDoctorModel.php";

    $d_name = $_POST['doc_name'];
    $j_date = $_POST['join'];
    $desig = $_POST['des'];
    $d_stat = $_POST['d_stt'];

    if($d_name == null || $j_date == null || $desig == null || $d_stat == null){
        echo "Null Input";
    }else{
        add($d_name,$j_date,$desig,$d_stat);
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/add_doc.php');
    }
?>