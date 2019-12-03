#!/usr/bin/php
<?php
	if ($argc != 4)
		echo "Format: number sign number\n";
	else
	{
		$a = trim($argv[1]);
		$sign = trim($argv[2]);
		$b = trim($argv[3]);
		if ($sign == "+")
			echo $a + $b."\n";
		else if ($sign == "-")
			echo $a - $b."\n";
		else if ($sign == "/")
			echo $a / $b."\n";
		else if ($sign == "%")
			echo $a % $b."\n";
		else if ($sign == "*")
			echo $a * $b."\n";
	}
?>
