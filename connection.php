<?php

// Database connection sssettings
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "greenhouse_tracker";

// Create a database connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
