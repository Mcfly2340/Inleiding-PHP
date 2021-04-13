<?php

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