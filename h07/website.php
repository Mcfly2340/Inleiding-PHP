<?php
session_start();
    if (isset($_SESSION["user"])) {
        echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de website</h1>";
        //is goed
    } else {
        //is niet goed
        header('location: login.php');
    }
