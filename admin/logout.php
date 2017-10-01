<?php session_start();
unset($_SESSION['student_id']);
unset($_SESSION['community_id']);
session_destroy();
header("Location:loginpage.php");
?>
