<?php
require_once "/Library/WebServer/Documents/covid/functions/functions.php";
$url = 'https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';
$csv_file = file($url);

$csv_func = 'str_getcsv';

$rows = array_map($csv_func, $csv_file);
$header = array_shift($rows);
$csv = array();
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}

$rev = array_reverse($csv, false);
$var = (array)$rev;
$arr = array_slice($rev, 0, 10, false);

$array_10 = (array)$arr;
$rev_2 = array_reverse($array_10, false);
$reverse = (array)$rev_2;