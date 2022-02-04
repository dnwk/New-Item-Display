<?php
/*
* Setup and Configuration for the New Item Display
*/

$host = '' ;//hostname or IP address for MySQL database
$dbname = '' ;//name of the database
$username = '' ;//MySQL username
$password = '' ;//password for MySQL database
$apikey = '' ;//API key for Alma. Analytics permission needed
try {
    $db = new PDO('mysql:host=$host;dbname=$dbname;charset=utf8', $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
