<?php 
    require_once "db.php";

    function complain()
    {
        $conn = getConnection();
        $sql = "SELECT * FROM complain";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["Date"]." - ".$row["Complain"]. "<br>";
            }
        } 
        else {
        echo "No Data Found!!";
        }
        
    }

?>