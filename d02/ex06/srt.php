#!/usr/bin/php
<?php

	function ft_is_time($a) 
	{
		return preg_match("/^[0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9] --> [0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9]$/", $a);
	}

	function is_sort($a, $b)
	{
		return strcmp($a, $b);
	}

	if ($argc != 2 || !file_exists($argv[1]))
		exit();

	$read = fopen($argv[1], 'r');
	while ($read && !feof($read))
		$array[] = fgets($read);

	foreach($array as $k => $v)
	{
		if (ft_is_time($v))
		{
			$time[$k] = $v;
		}
	}
	sort($time);
	$index = 0;
	$i = 0;
	$len = count($array);
	while ($i < $len)
	{
		if (ft_is_time($array[$i])) 
		{
			echo $time[$index];
			$n = array_search($time[$index], $array) + 1;
			echo "$array[$n]";
			$i++;
			$index++;
		} 
		else 
		{
			echo $array[$i];
		}
		$i++;
	}