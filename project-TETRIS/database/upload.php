<?php
include "dbconfig.php";

// check of de user is ingelogd en haal zijn data op
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];

    // pak de userId die aan de username gekoppeld is
    $query = $database->prepare("SELECT userId FROM users WHERE username = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $userId = $result['userId'];

    // check of de userId succesvol is binnengekomen
    if ($userId) {
        $target_dir = "../profile/profileImages/";
        // zet de file naam naar de userId van de ingelogde user
        $imageFileType = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));
        $target_file = $target_dir . $userId . '.' . $imageFileType; // je kan de file type aanpassen naar wat je zelf wil
        $uploadOk = 1;

        // Check file grootte
        if ($_FILES["file"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // file goedkeuring
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Ccheck of er geen error is
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // als alles goed is, upload de file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

                // update de profile image in de database
                $filename = $userId . '.' . $imageFileType;
                $query = $database->prepare("UPDATE users SET profileImage = :filename WHERE userId = :userId");
                $query->bindParam(':filename', $filename);
                $query->bindParam(':userId', $userId);
                $query->execute();
                $_SESSION['profileImage'] = $filename; // $filename is nu de nieuwe profileimage name
                echo"<script>location.href='/project-TETRIS/profile/profile.php'</script>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Failed to retrieve user ID.";
    }
} else {
    echo "User not logged in.";
}
?>
