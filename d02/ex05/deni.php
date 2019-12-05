#!/usr/bin/php
<?php
    if ($argc != 3)
        exit();
    if (!file_exists($argv[1]))
        exit();
    $rc = fopen($argv[1], 'r');
    while ($rc && !feof($rc))
        $farray[] = explode(";", fgets($rc));

    $aKeys = $farray[0];
    unset($farray[0]);
    foreach ($aKeys as $key => $value)
        $aKeys[$key] = trim($value);

    $index = array_search($argv[2], $aKeys);
    if ($index === false)
        exit();
    foreach ($aKeys as $aKeys_key => $aKeys_value)
    {
        $temp = array();
        foreach ($farray as $fvalue)
        {
            if (isset($fvalue[$index]))
                $temp[trim($fvalue[$index])] = trim($fvalue[$aKeys_key]);
        }
        $$aKeys_value = $temp;
    }

    $stdin = fopen("php://stdin", "r");
    while ($stdin && !feof($stdin))
    {
        echo "Entrez votre commande: ";
        $order = fgets($stdin);
        if ($order)
            eval($order);
    }
    fclose($stdin);
    echo "\n";