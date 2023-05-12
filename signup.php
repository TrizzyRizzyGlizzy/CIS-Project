<?php
  include("connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data and sanitize inputs
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  // Insert data into table
  $sql = "INSERT INTO account (f_name, l_name, email, phone, password)
          VALUES ('$first_name', '$last_name', '$email', '$phone', '$password')";
  if ($con->query($sql) === TRUE) {
    // Redirect to home page
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
}

?>