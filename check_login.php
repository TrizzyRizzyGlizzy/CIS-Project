<?php
    include("connection.php");
    session_start();

    if(!isset($_SESSION['account_id'])) {
        header("Location: login.php");
        die;
    }
?>