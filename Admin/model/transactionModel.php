<?php 
    require_once "db.php";

    function transaction()
    {
        $conn = getConnection();
        $sql = "SELECT Month,Status FROM transaction";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "In " . $row["Month"]. " total transaction is : " . $row["Status"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
        
    }

?>