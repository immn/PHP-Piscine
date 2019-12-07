<?php
    function safe_init_by_arr($arr, $key)
    {
    	$temp = array_keys($arr);
    	$namevar = "";
    	if (array_search($key, $temp) !== false)
    		$namevar = $arr[$key];
    	else 
    		$namevar = "";
    	return ($namevar);
    }
	session_start();
	$sub	= safe_init_by_arr($_GET, "submit");
	$log	= safe_init_by_arr($_GET, "login");
	$pas	= safe_init_by_arr($_GET, "passwd");
	$login	= safe_init_by_arr($_SESSION, "login");
	$passwd = safe_init_by_arr($_SESSION, "passwd");
	if ($sub == "OK")
	{
		$_SESSION['login'] = $log;
		$_SESSION['passwd'] = $pas;
	}
?>
<head>
    <title>d04ex00</title>
</head>
<html>
    <body>
         <fieldset>
        	<form action = "index.php" method="GET">
        		<p>
        		    <label for="login">
        		        Username:
        		    </label>
        		    <br>
        		    <input type="text" id="login" name = "login" value = "<?php echo $_SESSION['login']; ?>" autofocus>
        	    </p>
                <p>
                    <label for="password">
                        Password:
                    </label>
                    <br>
                    <input type="password" id="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" >
                </p>
        		<input type="submit" name="submit" value="OK" />
            </form>
        </fieldset>
    </body>
</html>
