<?php
	$arr = file('db\games.csv');
	unset($arr[0]);
	$i = 0;
	$ln = count($arr);
	$str = "";
	$summ = 0.0;
	while (++$i <= $ln)
	{
		$arr[$i] = explode(';', $arr[$i]);
		$str = $i.". ".$arr[$i][1]." x 1"." - ".$arr[$i][3]."$";
		$summ += $arr[$i][3];
		if (array_search("category", array_keys($_GET)) !== false)
		{
			if ($_GET['category'] == $arr[$i][4])
				echo($str);
		}
		else
			echo($str),"<br>---------------------------------------------------------------------<br>";
		
	}
	echo "<h1>Summary: ".$summ."$</h1>";

?>