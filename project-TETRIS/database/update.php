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


if (isset($_POST['userStatus'])) {
    session_start();
    $userStatus = $_POST["userStatus"];
    $query = "UPDATE users SET userStatus=:userStatus WHERE userId=:userId";
    $insert = $database->prepare($query);
    $insert->bindParam(':userStatus', $userStatus);
    $insert->bindParam(':userId', $_SESSION["userId"]);
    $insert->execute();
    $_SESSION['userStatus'] = $userStatus;
    echo "<script>location.href='/project-TETRIS/profile/profile.php'</script>";

}
?>
