#!/usr/bin/php
<?php
if ($argc == 2)
{
	$folder = str_replace('https://', '', $argv[1]);
	$folder = str_replace('http://', '', $folder);
	$url = $argv[1];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FAILONERROR, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	$str = curl_exec($ch);
	$arr = array();
	preg_match_all("/<img[^>]+.svg/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.png/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.jpeg/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.jpg/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.gif/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.ico/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.apng/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);
	preg_match_all("/<img[^>]+.bmp/i", $str, $matches);
	$arr = array_merge($arr, $matches[0]);

	if (count($arr) == 0)
		return null;
	foreach ($arr as $pic)
	{
		$temp[] = substr($pic, strrpos($pic, '"') + 1);
	}
	if (count($temp) == 0)
		return null;
	foreach ($temp as $link)
	{
		if ($link[0] == '/' && $link != "")
			$final[] = $argv[1].$link;
		else if ($link != "")
			$final[] = $link;
	}
	if (count($final) == 0)
		return null;
	else
	{
		if (!file_exists($folder))
		{
			mkdir($folder, 0755, true);
		}
		foreach ($final as $image)
		{
			$ch = curl_init ($image);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 2);
			$rawdata=curl_exec($ch);
			curl_close ($ch);
			$name = substr($image, strrpos($image, '/') + 1);
			if (!file_exists("$folder/$name"))
			{
				$fp = fopen("$folder/$name",'x');
				fwrite($fp, $rawdata);
				fclose($fp);
			}
		}
	}
}
else
	return null;
?>