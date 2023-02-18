<?php
$user="root";
$pass="";
$dbname="projeto";
$host="localhost";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);    
    
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}