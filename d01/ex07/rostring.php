#!/usr/bin/php
<?php

	function ft_preg_explode($str)
	{
		$arr = preg_split("/ +/", trim($str));
		$retarray = array_filter($arr, "strlen");
		return ($retarray);
	}	
	if ($argc > 1)
	{
		$i = 0;
		$arr = ft_preg_explode($argv[1]);
		$ct = count($arr);
		$arr[$ct] = $arr[0];
		unset($arr[0]);
		foreach ($arr as $elem)
		{
			$i++;
			echo "$elem";
			if ($i < $ct)
				echo " ";
			else
				echo "\n";
		}
	}
?>