#!/usr/bin/php
<?php
	function ft_atoi($num)
	{
		$sign = 1;
		$i = 0;
		$res = 0;
		$num = trim($num);
		$len = strlen($num);
		if ($len == 0)
			return null;
		if ($num[0] == "-" && $len >= 2)
		{
			$sign = -1;
			$i++;
		}
		else if ($num[0] == "+" && $len >= 2)
			$i++;
		else if ($num[0] == "+" || $num[0] == "-")
			return null;
		while (is_numeric($num[$i]))
			$res = $res * 10 + $num[$i++];
		return ($res * $sign);
	}

	function is_sign($check)
	{
		if ($check && strchr("+-*/%", $check))
			return (1);
		return (0);
	}

	if ($argc != 2)
	{
		echo "Incorrect Parameters\n";
		return null;
	}
	
	$i = 0;
	$str = trim($argv[1]);
	$str = preg_replace('/ +/', ' ', $str);
	if ($str && is_numeric($str[$i]) ||
	(($str[$i] == '-' || $str[$i] == '+') && is_numeric($str[$i + 1])))
	{
		$a = ft_atoi($str);
		$i++;
	}
	else
	{
		echo "Syntax Error\n";
		return (0);
	}

	if (strlen($a) == 0)
	{
		echo "Syntax Error\n";
		return (0);
	}

	while (is_numeric($str[$i]))
		$i++;

	if ($str[$i] != ' ' && !is_sign($str[$i]))
	{
		echo "Syntax Error\n";
		return (0);
	}

	while ($str[$i] == ' ')
		$i++;

	if (is_sign($str[$i]))
		$op = $str[$i++];
	else
	{
		echo "Syntax Error\n";
		return (0);
	}

	while ($str[$i] == ' ')
		$i++;

	if (is_numeric($str[$i]) ||
	(($str[$i] == '-' || $str[$i] == '+') && is_numeric($str[$i + 1])))
	{
		$b = ft_atoi(substr($str, $i));
		$i++;
	}
	else
	{
		echo "Syntax Error\n";
		return (0);
	}

	while (is_numeric($str[$i]))
		$i++;

	while ($str[$i] == ' ')
		$i++;

	if ($str[$i])
	{
		echo "Syntax Error\n";
		return (0);
	}

	if ($b == 0 && ($op == "/" || $op == "%"))
		echo "0 mustn't be a denominator!\n";
	else if ($op == "+")
		echo $a + $b."\n";
	else if ($op == "-")
		echo $a - $b."\n";
	else if ($op == "/")
		echo $a / $b."\n";
	else if ($op == "*")
		echo $a * $b."\n";
	else if ($op == "%")
		echo $a % $b."\n";
?>