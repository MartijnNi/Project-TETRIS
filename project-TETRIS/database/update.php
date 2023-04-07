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
    echo "<script>location.href='/project-TETRIS/profile/profile.php'</script>";

    }

    if (isset($_FILES['file'])) {
        // Get file details
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
    
        // Read file contents
        $file_content = file_get_contents($file_tmp);
    
        // Update database
        $query = "UPDATE users SET profilePicture=:profilePicture WHERE userId=:userId";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $file_content, $userId);
        $stmt->execute();
        $stmt->close();
    }
    

?>