<?php

    require_once "db.php";


    function application1()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM patient where Name ='freddy'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Admission_Date"]." - ".$row["Release_Date"]." - ".$row["Assigned_Doctor"]." - ".$row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
    }
    function application2()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM patient where Name='Jimmy'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Name"]." - ".$row["Admission_Date"]." - ".$row["Release_Date"]." - ".$row["Assigned_Doctor"]." - ".$row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
        
    }


    function check1()
    {
        $conn = getConnection();
        $sql = "UPDATE patient SET Name='freddy',Admission_Date='2/4/2022',Release_Date='5/4/2022',Assigned_Doctor='Dr. Elizabeth Blackwell' ,Status='Blocked'  where Name ='freddy'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check2()
    {
        $conn = getConnection();
        $sql = "UPDATE patient SET Name='freddy',Admission_Date='2/4/2022',Release_Date='5/4/2022',Assigned_Doctor='Dr. Elizabeth Blackwell' ,Status='Valid'  where Name ='freddy'";
        $result = mysqli_query($conn, $sql);
        application1();
    }

    function check3()
    {
        $conn = getConnection();
        $sql = "UPDATE patient SET Name='Jimmy',Admission_Date='5/2/2022',Release_Date='10/2/2022',Assigned_Doctor='Dr. Michael DeBakey' ,Status='Blocked'  where Name ='Jimmy'";        $result = mysqli_query($conn, $sql);
        application2();
    }

    function check4()
    {
        $conn = getConnection();
       $sql = "UPDATE patient SET Name='Jimmy',Admission_Date='5/2/2022',Release_Date='10/2/2022',Assigned_Doctor='Dr. Michael DeBakey' ,Status='Valid'  where Name ='Jimmy'";
        $result = mysqli_query($conn, $sql);
        application2();
    }



?>