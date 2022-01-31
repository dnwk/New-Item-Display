<?php
$host=;
$dbname=;
$username=;
$password=;
$apikey=;
try {
        $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $password);
   
} catch (PDOException $e) {
       print "Error!: " . $e->getMessage() . "<br/>";
       die();
}
?>