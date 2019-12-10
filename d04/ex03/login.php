<?php
	function auth($login, $passwd)
	{
		if (!$login || !$passwd)
			return false;
		$users = unserialize(file_get_contents("../private/passwd"));
		if ($users)
		{
			foreach ($users as $value) 
			{
				if ($value["login"] === $login && $value["passwd"] === hash("whirlpool", $passwd))
					return true;
			}
		}
		return false;
	}

	session_start();
	if ($_GET["login"] && $_GET["passwd"] && auth($_GET["login"], $_GET["passwd"]))
	{
		$_SESSION["loggued_on_user"] = $_GET["login"];
		echo "OK\n";
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";
	}
?>