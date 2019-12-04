#!/usr/bin/php
<?php
	date_default_timezone_set('Europe/Paris');
	$file = fopen("/var/run/utmpx", "r");
	$str = file_get_contents("/var/run/utmpx");
	$size = filesize("/var/run/utmpx");
	while ($utmpx = fread($file, 628))
	{
		$unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
		$array[$unpack['c']] = $unpack;
	}
	ksort($array);
	foreach ($array as $aElem)
	{
		if ($aElem['e'] == 7)
		{
			echo $aElem['a']." ";
			echo $aElem['c']." ";
			echo date("M", $aElem["f1"])," ";
			echo date("j", $aElem["f1"])," ",date("H:i", $aElem["f1"]);
			echo "\n";
		}
	}
?>
