<?php

    $src = $_FILES['myfile']['tmp_name'];
    $des = "../assets/Uploads/".$_FILES['myfile']['name'];

    if(move_uploaded_file($src, $des)){
        header('location: ../view/add_patient.php');
    }else{
        echo "Error";
    }

?>