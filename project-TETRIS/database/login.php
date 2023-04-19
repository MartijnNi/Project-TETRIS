<?php
include "dbconfig.php";

if(isset($_POST['submit'])){
    $username= $_POST["username"];
    $wachtwoord = $_POST["userpassword"];
    $query = $database->prepare('select * from users where username = :username');
    $query->bindParam(":username", $username);
    $query->execute();

    $account = $query->fetch(PDO::FETCH_OBJ);
    if($account != NULL) {
        //Check of wachtwoord juist is
        if (password_verify($wachtwoord, $account->userpassword)){
            session_start();
            $_SESSION["inlog"] = 'true';
            $_SESSION["username"] = $account->username;
            $_SESSION["firstname"] = $account->firstname;
            $_SESSION["email"] = $account->email;
            $_SESSION["userId"] = $account->userId;
            $_SESSION["profileImage"] = $account->profileImage;
            $_SESSION["userStatus"] = $account->userStatus;

            header('Location: /project-tetris/gamepage/games.php');
        } else {
            header("Location: /project-tetris/login/login.php");
        }
    } else {
        header("Location: /project-tetris/login/login.php");
    }
}






?>