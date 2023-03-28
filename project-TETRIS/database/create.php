<?php
include "dbconfig.php";

if(isset($_POST['submit'])){
    $username = $_POST ['username'];
    $voornaam = $_POST ['fullname'];
    $email = $_POST ['email'];
    $wachtwoord = $_POST ['userpassword'];

    //wachtwoord encrypten

$hash = password_hash($wachtwoord, PASSWORD_BCRYPT);

$query = "INSERT INTO users (firstname, username, userpassword, email) values (:firstname, :username, :userpassword, :email)";
$insert = $database->prepare($query);
$insert->bindParam(':firstname', $voornaam);
$insert->bindParam(':username', $username);
$insert->bindParam(':userpassword', $hash);
$insert->bindParam(':email', $email);
$insert->execute();



header('Location: /project-tetris/login/loginsucces.php');
}

?>