<?php

    require_once "db.php";


    function application1()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM doctor where Name ='Dr. Michael DeBakey'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Joinning_Date"]." - ".$row["Designation"]." - ".$row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
    }
    function application2()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM doctor where Name='Dr. Elizabeth Blackwell'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Joinning_Date"]." - ".$row["Designation"]." - ".$row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
        
    }


    function check1()
    {
        $conn = getConnection();
        $sql = "UPDATE doctor SET Name='Dr. Michael DeBakey',Joinning_Date='7/24/2020',Designation='Junior Doctor',Status='Blocked' where Name ='Dr. Michael DeBakey'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check2()
    {
        $conn = getConnection();
        $sql = "UPDATE doctor SET Name='Dr. Michael DeBakey',Joinning_Date='7/24/2020',Designation='Junior Doctor',Status='Valid' where Name ='Dr. Michael DeBakey'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check3()
    {
        $conn = getConnection();
        $sql = "UPDATE doctor SET Name='Dr. Elizabeth Blackwell',Joinning_Date='8/21/2018',Designation='Senior Doctor',Status='Blocked' where Name ='Dr. Elizabeth Blackwell'";      
        $result = mysqli_query($conn, $sql);
        application2();
    }

    function check4()
    {
        $conn = getConnection();
        $sql = "UPDATE doctor SET Name='Dr. Elizabeth Blackwell',Joinning_Date='8/21/2018',Designation='Senior Doctor',Status='Valid' where Name ='Dr. Elizabeth Blackwell'";
        $result = mysqli_query($conn, $sql);
        application2();
    }



?>