<?php
	$arr = file('db\games.csv');
	unset($arr[0]);
	$i = 0;
	$ln = count($arr);
	$str = "";
	while (++$i <= $ln)
	{
		$arr[$i] = explode(';', $arr[$i]);
		$str = "<div class=\"post\">
					<div class=\"icon\">
						<a class=\"iconscale\" href=\"".$arr[$i][2]."\">
						<img width=\"235\" height=\"235\" src=\"".$arr[$i][0]."\" class=\"attachment-full size-full wp-post-image\" alt=\"\">
						</a>
						<div class=\"catlabel\">
							<a href=\"".$arr[$i][2]."\">".$arr[$i][1]."</a>
						</div>
						<div class=\"adm\">
							<a href=\""."delete.php"."\">"."X"."</a>
						</div>
					</div>
				</div>";
				//echo($_GET['category']);
				//echo($arr[$i][4]);
		if (array_search("category", array_keys($_GET)) !== false)
		{
			if ($_GET['category'] == $arr[$i][4])
				echo($str);
		}
		else
			echo($str);
		
	}

?>