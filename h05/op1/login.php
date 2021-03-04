<?php



//een($_POST);
//
//function een($input){
//    echo "<pre>";
//    echo $_POST['voornaam '];
//    echo $_POST['wachtwoord'];
//    echo "</pre>";
//}

if($_POST['voornaam'] == "") {
    include("formulier.html");
    echo "<br> naam mist nog!";
};
if($_POST['email'] == "") {
    echo "<br> mail mist nog!";
};
if($_POST['adres'] == "") {
    echo "<br> adres mist nog!";
};
if($_POST['wachtwoord'] == "") {
    echo "<br> wachtwoord mist nog!";
};