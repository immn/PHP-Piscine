#!/usr/bin/php
<?php
	function ft_compare($a, $b)
	{
		$line = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		$i = 0;
		while ($i < strlen($a) && $i < strlen($b))
		{
			$ai = stripos($line, $a[$i]);
			$bi = stripos($line, $b[$i]);
			if ($ai > $bi)
				return (1);
			else if ($ai < $bi)
				return (-1);
			else
				$i++;
		}
	}
	$arg = 1;
	$arr = array();
	foreach($argv as $elem)
	{
		if ($arg++ > 1)
		{
			$elem = trim($elem);
			$temp = preg_split("/ +/", $elem);
			if ($temp[0] != "")
				$arr = array_merge($arr, $temp);
		}
	}
	usort($arr, "ft_compare");
	foreach ($arr as $elem)
		echo "$elem"."\n";
?>