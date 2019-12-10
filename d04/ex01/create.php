<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK") 
	{
		if (!file_exists('../private')) 
			mkdir('../private');
		if (!file_exists('../private/passwd')) 
			touch('../private/passwd');
		$users = array();
		if (file_get_contents('../private/passwd'))
		    $users = unserialize(file_get_contents('../private/passwd'));
		$exist = false;
		if (count($users) > 0)
    		foreach ($users as $user) 
    		{
    			if ($user['login'] === $_POST['login']) 
    				$exist = true;
    		}
		if ($exist) 
			echo "ERROR\n";
		else 
		{
			$users_db[] = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
			file_put_contents('../private/passwd', serialize($users_db));
			echo "OK\n";
		}
	} 
	else
		echo "ERROR\n";
?>