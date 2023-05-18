<?php

    require_once "db.php";


    function application1()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM autorhization where Name ='Dr. Elizabeth Blackwell'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Status"]." - ".$row["Designation"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
    }
    function application2()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM autorhization where Name='Dr. Michael DeBakey'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Status"]." - ".$row["Designation"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
        
    }


    function check1()
    {
        $conn = getConnection();
        $sql = "UPDATE autorhization SET Name='Dr. Elizabeth Blackwell',Status='Authorized',Designation='Senior Doctor' where Name ='Dr. Elizabeth Blackwell'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check2()
    {
        $conn = getConnection();
        $sql = "UPDATE autorhization SET Name='Dr. Elizabeth Blackwell',Status='Unauthorized',Designation='Senior Doctor' where Name ='Dr. Elizabeth Blackwell'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check3()
    {
        $conn = getConnection();
        $sql = "UPDATE autorhization SET Name='Dr. Michael DeBakey',Status='Authorized',Designation='Junior Doctor' where Name ='Dr. Michael DeBakey'";
        $result = mysqli_query($conn, $sql);
        application2();
    }

    function check4()
    {
        $conn = getConnection();
        $sql = "UPDATE autorhization SET Name='Dr. Michael DeBakey',Status='Unauthorized',Designation='Junior Doctor' where Name ='Dr. Michael DeBakey'";
        $result = mysqli_query($conn, $sql);
        application2();
    }



?>