<?php

$var = @file_get_contents('count_msi.txt');
$date = date('Y-m-d H:i:s') . ';' . $_SERVER['REMOTE_ADDR']; 
$file="count_msi.txt";
$linecount = 0;
$lines_arr = preg_split('/\n|\r/',$var);
$linecount = count($lines_arr); 

$linecount++;
$var = $var ."\n". $linecount . ';' . $date;

@file_put_contents('count_msi.txt', $var);
header('Location: http://www.do-exp.com/files/Do-Exp1.0.msi');
?>