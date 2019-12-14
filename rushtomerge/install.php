<?php
	$sql = file_get_contents('rush.sql');

	$link = mysqli_connect("127.0.0.1", "root", "12345");
	$result = mysqli_query($link, "CREATE DATABASE rush");
	$link = mysqli_connect("127.0.0.1", "root", "12345", "rush");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	/* execute multi query */
	if (mysqli_multi_query($link, $sql)) {
		echo "success";
	} else {
	   echo "error";
	}
	mysqli_close($link);
?>