<?php 

if(isset($_SESSION['role']) && $_SESSION['role'] !== 'user')
    {
        header("location: ./../admin/admin_dashboard.php");
        exit;
    }