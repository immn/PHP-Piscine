#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	while ($i < $argc)
	{
		$temp = $argv[$i];
		echo "$temp	"."\n";
		$i++;
	}
}
?>