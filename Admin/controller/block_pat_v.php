<?php

require_once "../model/bpatModel.php"; 

    if(isset($_POST['submit1'])){
    	check1();
    }
    elseif (isset($_POST['submit2'])){
    	check2();
    }
    elseif (isset($_POST['submit3'])) {
    	check3();
    }else{
    	check4();
    }

header('location: ../view/block_pat.php');

?>
