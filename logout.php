<?php require 'config.php'; 
session_start();
unset($_SESSION['user']);
echo "<script>location='./index.php';</script>";
?>