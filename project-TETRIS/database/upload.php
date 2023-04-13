<?php
include "dbconfig.php";

    $target_dir = "../profile/profileImages/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
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
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
            
          } else {
            echo "Sorry, there was an error uploading your file.";
          }
    }

       $query = $database->prepare("SELECT userId FROM users WHERE username = :username");
       $query->bindParam(':username', $username);
       $query->execute();
       $filename = '';
       

       $user = $query->fetch();
       
       if ($username !== false) {
           $filename = uniqid() . '-' . $user['userId'] . '.' . $imageFileType;
           // ... the rest of your code for validating and moving the uploaded file ...
       } else {
           echo "No user found with that email address.";
       }
       
       // Use the $filename variable here
       echo "The uploaded file was saved as: " . $filename;
       
?>