#!/usr/bin/php
<?php
	$l = 0;
	$arr = array();
	foreach ($argv as $elem)
	{
		if ($l++ > 0)
		{
			$elem = trim($elem);
			$temp = preg_split("/ +/", $elem);
			if ($temp[0] != "")
				$arr = array_merge($arr, $temp);
		}
	}
	sort($arr);
	foreach ($arr as $elem)
		echo "$elem"."\n";
?>