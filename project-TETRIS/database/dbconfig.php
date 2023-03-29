<?php

$dbhost = "172.17.0.3";
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

function checkInLog() {
    session_start();
    if($_SESSION["inlog"] != 'true'){
        header("Location: /project-tetris/login/login.php");
    }
}

function showUserInlog() {
    "Welkom " . $_SESSION['username'] . "";
}
//session_start();
//echo "inlog:" . $_SESSION["inlog"];

?>