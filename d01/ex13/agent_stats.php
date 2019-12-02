#!/usr/bin/php
<?php

	function sAverage($arr)
	{
		$grade = 0;
		$count = 0;
		foreach ($arr as $element)
		{
			$temp = explode(';', $element);
			if ($temp != "moulinette" && $temp[1] != '')
			{
				$grade += $temp[1];
				$count++;
			}
		}
		if ($count > 0)
		{
			$sum = $grade / $count;
			return ($sum);
		}
		return null;	
	}

	function sAverageUser($arr)
	{
		asort($arr);

		foreach ($arr as $elem)
		{
			$temp = explode(";", $elem);
			$list[$temp[0]] = 0;
		}
		foreach ($list as $eleml => $key)
		{
			$count = 0;
			foreach ($arr as $elema)
			{
				$temp = explode(";", $elema);
				if ($temp[0] == $eleml && $temp[1] != '' && $temp[2] != "moulinette")
				{
					$count++;
					$list[$eleml] += $temp[1];
				}
			}
			if ($count != 0)
				$num = $list[$eleml] / $count;
			else
				$num = $list[$eleml];
			if ($num != 0)
				echo "$eleml".":"."$num"."\n";
		}
	}

	if ($argc != 2)
		return (0);

	$arr = file('php://stdin');
	unset($arr[0]);
	
	if ($argv[1] == "average")
	{
		$str = sAverage($arr);
		if ($str != null)
			echo "$str";
		echo "\n";
	}

	if ($argv[1] == "average_user")
	{
		sAverageUser($arr);
	}

	if ($argv[1] == "moulinette_variance")
	{
		asort($arr);
		$count = 0;
		foreach ($arr as $elem)
		{
			$temp = explode(";", $elem);
			$list[$temp[0]] = 0;
		}
		foreach ($list as $user => $key)
		{
			$count = 0;
			$grade = 0;
			$mouli = 0;
			foreach ($arr as $elem)
			{
				$temp = explode(";", $elem);
				if ($temp[1] != '' && $temp[0] == $user && $temp[2] == "moulinette")
					$mouli = $temp[1];
			}
			foreach ($arr as $elem)
			{
				$temp = explode(";", $elem);
				if ($temp[1] != '' && $temp[0] == $user && $temp[2] != "moulinette")
				{
					$grade += $temp[1] - $mouli;;
					$count++;
				}
			}
			if ($count > 0 && $grade != 0)
				echo $user.":".($grade / $count)."\n";
		}
	}
?>