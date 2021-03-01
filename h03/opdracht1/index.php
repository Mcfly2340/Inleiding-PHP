

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 1</title>
    <style>

    </style>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 3){
    $bedrag = 0;
}

echo $bedrag;
?>
</body>
</html>