#!/usr/bin/php
<?php

	function getName($img)
	{
		preg_match("/^.*?([^\/]+)$/", $img, $matches);
		if (substr($matches[1], -1) === "\"" || substr($matches[1], -1) === "'")
			return (substr($matches[1], 0, -1));
		return ($matches[1]);
	}

	if ($argc == 2)
	{
		$folder = str_replace('https://', '', $argv[1]);
		$folder = str_replace('http://', '', $folder);
		$url = $argv[1];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
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
		{
			echo"Error\n";
			exit();
		}
		print_r($arr);
		foreach ($arr as $pic)
			$temp[] = substr($pic, strrpos($pic, '"') + 1);
		print_r($temp);
		if (count($temp) == 0)
		{
			echo"Error\n";
			exit();
		}

		foreach ($temp as $link)
		{
			if ($link[0] == '/' && $link != "")
				$final[] = $argv[1].$link;
			else if ($link != "")
				$final[] = $link;
		}
		print_r($final);
		if (count($final) == 0)
		{
			echo"Error\n";
			exit();
		}
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
				$fp = fopen($folder."/".getName($image),'x');
				fwrite($fp, $rawdata);
				fclose($fp);
				// $name = substr($image, strrpos($image, '/') + 1);
				// if (!file_exists("$folder/$name"))
				// {
				// 	$fp = fopen("$folder/$name",'x');
				// 	fwrite($fp, $rawdata);
				// 	fclose($fp);
				// }
			}
		}
	}
	else
	{
		echo"Error\n";
		exit();
	}
?>