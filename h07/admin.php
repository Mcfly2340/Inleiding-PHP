<?php
session_start();

if (null !==$_SESSION["user"] && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de admin website </h1>";
    echo "<a href='login.php'</a>login";
} else {
    header('location: login.php');
}
