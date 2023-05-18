<?php

    require_once "db.php";


    function application1()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM donor where Name ='Jackson'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Blood_Group"]." - ".$row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
    }
    function application2()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM donor where Name ='Anderson'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Blood_Group"]." - ".$row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
        
    }


    function check1()
    {
        $conn = getConnection();
        $sql = "UPDATE donor SET Name='Jackson',Blood_Group='B(+ve)',Status='Blocked' where Name ='Jackson'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check2()
    {
        $conn = getConnection();
        $sql = "UPDATE donor SET Name='Jackson',Blood_Group='B(+ve)',Status='Valid' where Name ='Jackson'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check3()
    {
        $conn = getConnection();
        $sql = "UPDATE donor SET Name='Anderson',Blood_Group='AB(-ve)',Status='Blocked' where Name ='Anderson'";        
        $result = mysqli_query($conn, $sql);
        application2();
    }

    function check4()
    {
        $conn = getConnection();
        $sql = "UPDATE donor SET Name='Anderson',Blood_Group='AB(-ve)',Status='Valid' where Name ='Anderson'";
        $result = mysqli_query($conn, $sql);
        application2();
    }



?>