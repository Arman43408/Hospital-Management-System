<?php 

    $submit_1 = $_POST['doc'];
    $submit_2 = $_POST['pat'];
    $submit_2 = $_POST['don'];

    if($submit_1 == true){
	header('location: ../view/block_doc.php');
    }elseif($submit_2 == true){
	header('location: ../view/block_don.php');
    }else{
    header('location: ../view/block_pat.php');
    }

?>
