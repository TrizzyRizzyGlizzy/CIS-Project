<?php
// Assuming a database connection is already established

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the username from the form
  $username = $_POST["username"];

  // Perform any necessary validation or sanitization on the username

  // Check if the username already exists in the database
  $query = "SELECT * FROM users WHERE user_name = '$username'";
  // Assuming you have a valid database connection stored in the $connection variable
  $result = mysqli_query($connection, $query);

  if (mysqli_num_rows($result) > 0) {
    // Username already exists in the database
    echo "Username already exists. Please choose a different username.";
  } else {
    // Insert the username into the database
    $insertQuery = "INSERT INTO users (username) VALUES ('$username')";
    $insertResult = mysqli_query($connection, $insertQuery);

    if ($insertResult) {
      // Username successfully inserted into the database
      echo "New user created successfully!";
    } else {
      // Error occurred while inserting the username
      echo "Error creating user: " . mysqli_error($connection);
    }
  }
}
?>
