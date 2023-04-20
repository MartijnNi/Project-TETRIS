<?php
include "dbconfig.php";

// Check if user is logged in and retrieve the username from session data
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];

    // Get the user's ID based on their username
    $query = $database->prepare("SELECT userId FROM users WHERE username = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $userId = $result['userId'];

    // Check if user ID is retrieved successfully
    if ($userId) {
        $target_dir = "../profile/profileImages/";
        // Set the target file name to be the user's ID
        $imageFileType = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));
        $target_file = $target_dir . $userId . '.' . $imageFileType; // You can change the file extension based on the actual file type
        $uploadOk = 1;

        // Check file size
        if ($_FILES["file"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {

                // Update the 'profileImage' column in the database with the new image file name
                $filename = $userId . '.' . $imageFileType;
                $query = $database->prepare("UPDATE users SET profileImage = :filename WHERE userId = :userId");
                $query->bindParam(':filename', $filename);
                $query->bindParam(':userId', $userId);
                $query->execute();
                $_SESSION['profileImage'] = $filename; // $filename is the new image filename
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
