<?php

$var = @file_get_contents('count_rar.txt');
$date = date('Y-m-d H:i:s') . ';' . $_SERVER['REMOTE_ADDR']; 
$file="count_rar.txt";
$linecount = 0;
$handle = fopen($file, "r");

while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}
$linecount++;
$var = $var ."\n". $linecount . ';' . $date;

@file_put_contents('count_rar.txt', $var);
header('Location: http://www.do-exp.com/files/Do-Exp1.0.rar');
?>