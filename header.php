<?php include('check_login.php'); 
      // Retrieve the account_id from the session
      $account_id = $_SESSION['account_id'];

      // Retrieve the user_id and user_name from the database
      $query = "SELECT user_id, user_name FROM users WHERE account_id = '$account_id'";
      $result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <style>
    @media (max-width: 575.98px) {
      .navbar .navbar-brand {
        font-size: 1.5rem;
      }
      .navbar .nav-link {
        font-size: 1.25rem;
      }
    }
    .h1{
        color: darkgray;
       }
       

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }


    .modal-content {
      background-color: white;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      border-radius: 10px;
      width: 80%;
      max-width: 600px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }


    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      font-weight: bold;
      color: #888;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .user i {
      font-size: 48px;
      color: #888;
    }

    .user button {
      background-color: #1a73e8;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    .user button:hover {
      background-color: #0d47a1;
    }

    .user-info a {
      color: #1a73e8;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.2s ease;
    }

    .user-info a:hover {
      color: #0d47a1;
    }
  </style>
</head>
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <div class="container">
    <a class="navbar-brand fs-4" href="index.php">Dalt Tech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active fs-4" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-4" href="Map.php">Map</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active fs-4" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i>Account</a>
          <ul class="dropdown-menu" aria-labelledby="accountDropdown">
            <li><a class="dropdown-item" href="billing.php">Billing Info</a></li>
            <li><a class="dropdown-item" href="requestspace.php">Request Space</a></li>
            <li><a class="dropdown-item" onclick="document.getElementById('user-modal').style.display='block'">Switch User</a></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- The Modal -->
<div id="user-modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="text-center">
      <h1 class="h1" >Switch User</h1>
      <div class="user-list ">
        <?php
if (mysqli_num_rows($result) > 0) {
  // Iterate through each row and display the user_name as a button
  while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    
    // Display the user_name as a button
    echo "<div class='user'>";
    echo "<i class='bi bi-person-fill' ></i>";
    echo "<button onclick=\"setUserID($user_id)\">$user_name</button>";
    echo "</div>";
    echo "<br>";
  }
} else {
  echo "No users found.";
}
?>
      </div>
      <div class="user-info ">
        <a onclick="document.getElementById('switch-modal').style.display='block'" >
          <h3>Add User</h3>
        </a>
      </div>
    </div>
  </div>
</div>

<div id="switch-modal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
    <h1>Create New User</h1>
    <form action="create_user.php" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <button type="submit" class="btn btn-primary">Create New User</button>
    </form>
  </div>
  </div>
</div>
<!-- JavaScript to close the modal when the user clicks outside of it or on the close button -->
<script>
var modal = document.getElementById('user-modal');
var closeBtn = document.getElementsByClassName("close")[0];

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

closeBtn.onclick = function() {
  modal.style.display = "none";
}
</script>
</header>