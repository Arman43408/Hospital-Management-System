<?php

    $src = $_FILES['myfile']['tmp_name'];
    $des = "../assets/Uploads/".$_FILES['myfile']['name'];

    if(move_uploaded_file($src, $des)){
        header('location: ../view/add_doc.php');
    }else{
        echo "Error";
    }

?>