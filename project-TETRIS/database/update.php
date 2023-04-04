<?php
include "dbconfig.php";
if(isset($_POST['submit'])){
    $id = $_POST["id"];
    //$id = $_POST["userId"];
    $username = $_POST["username"];
    $voornaam = $_POST["fullname"];
    $email = $_POST["email"];


    $query = "UPDATE users SET voornaam=:voornaam, achternaam=:achternaam, email:=email WHERE id=id";
    $insert = $database->prepare($query);
    $insert->bindParam(':gebruikersnaam', $username);
    $insert->bindParam(':voornaam', $fullname);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':userId', $id);
    $insert->execute();
    header('Location: login.php');


}

?>