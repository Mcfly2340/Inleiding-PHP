<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hoeveelheden</title>
</head>
<body>

<?php
include("hoeveelheden.html");

$antwoord = berekening($_POST["HoeveelheidInCelcius"], 1.8, 32);

echo "dit is ".$antwoord."º in Farenheid";

    function berekening($a, $b, $c){
        $HoeveelheidInFarenheid = ($a * $b) + $c;
        return $HoeveelheidInFarenheid;
    }

?>

</body>
</html>