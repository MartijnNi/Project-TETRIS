<?php

$dbhost = "127.0.0.1";
$dbname = "retrogen";
$user = "root";
$pass = "a3b6c9";

try {
    $database = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
    $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo $e->getMessage();
}


?>