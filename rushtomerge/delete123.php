<?php
	session_start();
	if (!$_SESSION['admin'])
	{
		header('Location: /');
		exit();
	}
	include('./back/db.php');
	if ($_GET['category'])
	{
		mysqli_query($link, "DELETE FROM categories WHERE id = '${_GET['category']}'");
	}
	if ($_GET['product'])
	{
		mysqli_query($link, "DELETE FROM products WHERE id = '${_GET['product']}'");	
	}
	header('Location: /');
?>