<?php
session_start();
require 'config.php'; 
unset($_SESSION['user']);
echo "<script>location='./index.php';</script>";
?>