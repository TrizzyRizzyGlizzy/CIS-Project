<?php

// Database connection settings
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

// Start a session
session_start();

// Set the inactivity timeout to 10 minutes (600 seconds)
$timeout = 600;

// List of pages that do not require authentication
$public_pages = array("login.php", "register.php");

// Function to check login
function check_login() 
{
    global $con;

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        $sql = "SELECT * FROM users WHERE User_ID = $user_id";

        $result = $con->query($sql);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        } else {
            echo "error check login";
        }
    } else {
        // Redirect to login if user is not logged in
        header("Location: login.php");
        die;
    }
}

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Update the last activity time
    $_SESSION['last_activity'] = time();

    // Call the check_login function
    check_login();
} else {
    // User is not logged in and the current page requires authentication
    // Redirect to the login page if the current page is not a public page
    if (!in_array(basename($_SERVER['PHP_SELF']), $public_pages)) {
        header("Location: login.php");
        exit();
    }
}

// Check if the user has been inactive for too long
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    // User has been inactive for too long
    // Destroy the session and redirect to the login page
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

?>
