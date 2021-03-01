<?php


$r = array(0, 1, 2, 3, 4, 5, 6);

print_r($r);

echo $r[1];

echo "<ul>";
foreach ($r as $r1){
    echo "<li>".$r1."</li>";
}
echo "<ul>";