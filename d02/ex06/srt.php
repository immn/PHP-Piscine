#!/usr/bin/php
<?php

    function ft_is_time($a) {
        return preg_match("/^[0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9] --> [0-9][0-9]:[0-9][0-9]:[0-9][0-9],[0-9][0-9][0-9]$/", $a);
    }

    function is_sort($a, $b) {
        return strcmp($a, $b);
    }

    // function swap($time, $a, $b) {
    //     $tmp = $time[$a];
    //     $time[$a] = $time[$b];
    //     $time[$b] = $tmp;
    // }

    if ($argc != 2 || !file_exists($argv[1]))
        exit();

    $read = fopen($argv[1], 'r');
    while ($read && !feof($read))
        $array[] = fgets($read);

    foreach($array as $k => $v){
        if (ft_is_time($v)) {
            $time[$k] = $v;
        }
    }
    //print_r($time);
    sort($time);
    //print_r($time);
    $index = 0;
   // print_r($array);
    // foreach($array as $k => $v){
    //    // echo"!!!! ".$k."\n";
    //    // echo"!!!! ".$v."\n";
    //     if (ft_is_time($v)) {
    //         echo $time[$index]."!!!\n";
    //         $index++;
    //     } else {
    //         echo $v."!\n";
    //     }
    // }
    $i = 0;
    $len = count($array);
    //echo"$len\n";
    
    while ($i < $len)
    {   //echo"$len\n";
        if (ft_is_time($array[$i])) 
        {
            echo $time[$index];
            $n = array_search($time[$index], $array) + 1;
            echo "$array[$n]";
            $i++;
            $index++;
        } 
        else 
        {
            echo $array[$i];
        }
        $i++;
    }