<?php
//$dbh = new PDO('mysql:host=localhost;dbname=database;port=3306',
//'root');

$user = "SchoolUser";
$pass = "school";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306', $user, $pass);
    foreach($dbh->query('SELECT * from student') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}