<?php
include "dbconfig.php";
if(isset($_POST['submit'])){
    $id = $_POST["id"];
    $username = $_POST["username"];
    $voornaam = $_POST["fullname"];
    $email = $_POST["email"];


    $query = "UPDATE users SET voornaam=:voornaam, achternaam=:achternaam, email:=email WHERE id=id";
    $insert = $database->prepare($query);
    $insert->bindParam(':firstname', $voornaam);
    $insert->bindParam(':username', $username);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':id', $id);
    $insert->execute();
    header('Location: /project-tetris/profile/profile.php');


}

?>