<?php
	$a_k = array_keys($_GET);
	$val = "";
	$nam = "";
	$act = "";
	if (array_search("value" ,$a_k) !== false)
		$val = $_GET['value'];
	if (array_search("action" ,$a_k) !== false)
		$act = $_GET['action'];
	if (array_search("name" ,$a_k) !== false)
		$nam = $_GET['name'];
	switch ($act) 
	{
		case("set"):
			if ($nam && $val)
				setcookie($nam, $val);
			break;
		case("get"):
				if ($nam && $_COOKIE[$nam] && !$val)
					echo $_COOKIE[$nam]."\n";
			break;
		case("del"):
			if ($nam && !$val)
				setcookie($nam, '', 1);
			break;
	}
?>
