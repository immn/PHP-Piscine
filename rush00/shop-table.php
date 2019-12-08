<?php
// $str ="<div class=\"post\">
// 			<div class=\"icon\">
// 				<a class=\"iconscale\" href=\"\">
// 				<img width=\"235\" height=\"235\" src=\"img\giphy.gif\" class=\"attachment-full size-full wp-post-image\" alt=\"\">
// 				</a>
// 				<div class=\"catlabel\">
// 					<a href=\"\">Stranger Things</a>
// 				</div>
// 			</div>
// 		</div>";
// 	echo($str);
	$arr = file('db\games.csv');
	unset($arr[0]);
	$i = 0;
	$ln = count($arr);
	$str = "";
	while (++$i <= $ln)
	{
		$arr[$i] = explode(';', $arr[$i]);
		$str .= "<div class=\"post\">
		<div class=\"icon\">
			<a class=\"iconscale\" href=\"\">
			<img width=\"235\" height=\"235\" src=\"".$arr[$i][0]."\" class=\"attachment-full size-full wp-post-image\" alt=\"\">
			</a>
			<div class=\"catlabel\">
				<a href=\"\">".$arr[$i][1]."</a>
				</div>
			</div>
		</div>";
	}
	echo($str);

?>