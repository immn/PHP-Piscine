<?php
    if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] && $_POST["submit"] === "OK")
    {
        if (!file_exists("../private"))
            mkdir("../private");
        if (!file_exists("../private/passwd")) 
            file_put_contents("../private/passwd", null);
        $users = unserialize(file_get_contents("../private/passwd"));
        if ($users)
        {
            $exist = false;
            foreach ($users as $key => $value)
            {
                if ($value["login"] === $_POST["login"] && $value["passwd"] === hash("whirlpool", $_POST["oldpw"]))
                {
                    $exist = true;
                    $users[$key]["passwd"] =  hash("whirlpool", $_POST["newpw"]);
                }
            }
            if ($exist)
            {
                file_put_contents("../private/passwd", serialize($users));
                echo "OK\n";
            }
            else
                echo "ERROR\n";
        }
        else
            echo "ERROR\n";
    }
    else
        echo "ERROR\n";
?>
