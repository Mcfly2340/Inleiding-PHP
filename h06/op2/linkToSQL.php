<?php
//$dbh = new PDO('mysql:host=localhost;dbname=database;port=3306',
//'root');

//$user = "root";
//$pass = "";

//try {
//    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306', $user, $pass);
//    foreach($dbh->query('SELECT * from student') as $row) {
//        print_r($row);
//    }
//    $dbh = null;
//} catch (PDOException $e) {
//    print "Error!: " . $e->getMessage() . "<br/>";
//    die();
//}

//foreach($_POST['invulformulier'] as $img){
//    echo $_POST['voornaam'];
//}

if ($_POST['email'] === "piet@worldonline.nl" & $_POST['wachtwoord'] === "doetje123" || $_POST['email'] === "klaas@carpets.nl" & $_POST['wachtwoord'] === "snoepje777" || $_POST['email'] === "truushendriks@wegweg.nl" & $_POST['wachtwoord'] === "arkiearkie201"){
    echo "Welkom";
} else {
    echo "Sorry, geen toegang!";
}
//if ($_POST['email'] === "klaas@carpets.nl" & $_POST['wachtwoord'] === "snoepje777"){
//    echo "yes";
//} else {
//    echo "no";
//}
//if ($_POST['email'] === "truushendriks@wegweg.nl" & $_POST['wachtwoord'] === "arkiearkie201"){
//    echo "yes";
//} else {
//    echo "no";
//}