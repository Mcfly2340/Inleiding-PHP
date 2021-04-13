<?php
echo 'Hello World';

$x = 50;
$y = 34;
if($x > $y){
    echo $x;
}elseif($x < $y){
    echo $y;
}

$array[] = [];

$array[] = 50;
$array[] = 40;
$array[] = 60;
foreach ($array as $arr){
    echo $arr;
}

if ($x == 2){
    echo $x;
}elseif ($x > 2){
    echo $x;
}