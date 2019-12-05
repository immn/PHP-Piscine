#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		exit(0);
	}
	date_default_timezone_set('Europe/Berlin');
	$err = 0;
	$str = ucwords($argv[1]);
	if (substr_count($str,' ') == 4)
		$arr = explode(" ", "$str");
	else
		exit(-1);

	$days = array("Monday" => "Lundi", "Tuesday" => "Mardi","Wednesday" => "Mercredi","Thursday"  => "Jeudi","Friday"	=> "Vendredi",
	"Saturday"  => "Samedi","Sunday"	=> "Dimanche");

	$months = array("1"	 => "Janvier","2"=> "Fevrier","3"=> "Mars","4"=> "Avril","5"=> "Mai","6"=> "Juin","7"=> "Juillet","8"=> "Aout",
	"9"=> "Septembre","10"=> "Octobre",	"11"=> "Novembre","12"=> "Decembre");

	if (array_search($arr[0], $days) == false)
		$err += 1;
	if (preg_match("/^(([1-9]){1})|([0-3]){1}([0-9]){1}$/", $arr[1]) == 0 ||
		$arr[1] <= 0 || $arr[1] >= 32)
		$err += 1;
	if (array_search($arr[2], $months) == false)
		$err += 1;
	if (preg_match("/^([0-9]){4}$/", $arr[3]) == 0 || $arr[3] <= 1969)
		$err += 1;
	$time = explode(":", "$arr[4]");
	if (count($time) != 3)
		exit(-1);
	if ((preg_match("/^0[0-9]|1[0-9]|2[0-3]$/", $time[0]) == 0) ||
		(preg_match("/^[0-5][0-9]$/", $time[1]) == 0) ||
		(preg_match("/^[0-5][0-9]$/", $time[2]) == 0))
		$err += 1;
	if ($err > 0)
		exit(-1);
	$juliandate = cal_to_jd(CAL_GREGORIAN, array_search($arr[2], $months), $arr[1], $arr[3]);
	if (jddayofweek($juliandate, 1) == array_search($arr[0], $days))
	{
		$temp .= $arr[3].'-'.array_search($arr[2], $months).'-'.$arr[1].' '.$arr[4];
		$timefin = strtotime($temp);
		echo "$timefin\n";
	}
	else
		exit(-1);
?>