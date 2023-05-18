<?php 
    require_once "db.php";

    function doctor()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM doctor";
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

?>