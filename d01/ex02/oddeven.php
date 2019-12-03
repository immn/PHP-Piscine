#!/usr/bin/php
<?php
	$str = fopen("php://stdin", "r");
	while ($str && !feof($str))
	{
		echo "Enter a number: ";
		$num = fgets($str);
		if ($num)
		{
			echo "$num";
			$num = str_replace("\n", "", $num);
			if (is_numeric($num))
			{
				if ($num % 2 == 0)
					echo "The number " . $num . " is even\n";
				else
					echo "The number " . $num . " is odd\n";
			}
			else
				echo "'" . $num . "' is not a number\n";
		}
		
	}
?>