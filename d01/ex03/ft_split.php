<?php
	function ft_split($str)
	{
		$str = trim($str);
		$arr = preg_split("/ +/", $str);
		if (!count($arr))
			return (NULL);
		if (!$arr[0])
			return (NULL);
		return ($arr);
	}
?>