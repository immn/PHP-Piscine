<?php
    $a_k = array_keys($_SERVER);
    $auth_user = "";
    $auth_pass = "";
    if (array_search("PHP_AUTH_USER" ,$a_k) !== false)
        $auth_user = $_SERVER["PHP_AUTH_USER"];
    if (array_search("PHP_AUTH_PW" ,$a_k) !== false)
        $auth_pass = $_SERVER["PHP_AUTH_PW"];
	if ($auth_user == "zaz" &&
	$auth_pass == "jaimelespetitsponeys")
	{
		$pic = base64_encode(file_get_contents("../img/42.png"));
		echo "<html><body>\nHello Zaz<br />\n<img src='data:image/png;base64,";
		echo ($pic);
		echo "'>\n</body></html>\n";
	}
	else
	{
		header("WWW-Authenticate: Basic realm=\'Member area\'");
		header("HTTP/1.0 401 Unauthorized");
		echo "<html><body>That area is accessible for members only";
		echo "</body></html>\n";
	}
?>