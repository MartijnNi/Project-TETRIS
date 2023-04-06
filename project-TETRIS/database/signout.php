<?php
session_start();
session_unset();
session_destroy();
header('Location: /project-tetris/login/login.php');
?>
