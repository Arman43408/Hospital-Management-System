<?php 
    require_once "db.php";

    function patient()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM patient";
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

?>