<?php

$dbhost = "host.docker.internal";
$dbname = "retrogen";
$user = "root";
$pass = "a3b6c9";

//$dbhost = "localhost";
//$dbname = "rhdtsgzq_retrogen";
//$user = "rhdtsgzq_database";
//$pass = "1234";

try {
    $database = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$pass);
    $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
    echo $e->getMessage();
}

function checkInLog() {
    session_start();
    if(!isset($_SESSION["inlog"]) || $_SESSION["inlog"] != 'true'){
        echo"<script>location.href='/project-TETRIS/login/login.php'</script>";
        die;
    }
}

//session_start();
//echo "inlog:" . $_SESSION["inlog"];

?>