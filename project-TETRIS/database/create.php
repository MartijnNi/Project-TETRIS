<?php
include "dbconfig.php";

if(isset($_POST['submit'])){
    $username = $_POST ['username'];
    $voornaam = $_POST ['fullname'];
    $email = $_POST ['email'];
    $wachtwoord = $_POST ['userpassword'];

    //wachtwoord encrypten

$hash = password_hash($password, PASSWORD_BCRYPT);

$query = "INSERT INTO users (username, fullname, email, userpassword) values (:username, :fullname, :email, :userpassword)";
$insert = $database->prepare($query);
$insert->bindParam(':gebruikersnaam', $username);
$insert->bindParam(':voornaam', $fullname);
$insert->bindParam(':email', $email);
$insert->bindParam(':wachtwoord', $hash);
$insert->execute();

header('Location: login.html');
}

?>