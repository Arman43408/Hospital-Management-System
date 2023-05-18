<?php

	$l_mail = $_POST['lemail'];
	$con = mysqli_connect('localhost', 'root', '', 'shdb');
	$sql = "select * from registration where Email = '{$l_mail}'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "Valid";
	} else {
		echo "Invalid Email!!!";
	}

?>