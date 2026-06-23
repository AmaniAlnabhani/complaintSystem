<?php 
session_start();
$title = 'Admin Dashboard';
include "./../includes/header.php";
include "./../config/database.php";
echo 'Welcome to Admin Dashboard, ' . $_SESSION['name'] . '!';

?>

