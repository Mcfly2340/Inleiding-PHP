<?php



//echo $_POST['namen[]'];
//print_r($_POST['namen']);

foreach($_POST['namen'] as $img){
//    echo $naam."<br>";
    echo "<img src='".$img.".png'>";
}