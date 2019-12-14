<?php
	session_start();
	if (!$_SESSION['login'])
	{
		header('Location: /');
		exit();
	}
	include('./back/db.php');
	mysqli_query($link, "DELETE FROM users WHERE nickname = '${_SESSION['login']}'");
	$_SESSION['login'] = "";
	header('Location: /');

	