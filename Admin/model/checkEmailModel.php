<?php

	$mail = $_POST['uemail'];
	$con = mysqli_connect('localhost', 'root', '', 'shdb');
	$sql = "select * from registration where Email = '{$mail}'";
	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result) > 0) {
		echo "Email is Taken!";
	} else {
		echo "Email is Not Taken!";
	}

?>