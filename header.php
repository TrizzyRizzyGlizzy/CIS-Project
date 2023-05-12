<!DOCTYPE html>
<html>

<head>
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
            <li><a class="dropdown-item" href="login.html">Log Out</a></li>
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
        <div class="user">
          <i class="bi bi-person-fill" ></i>
          <div class="user-info">
            <h3 >User 1</h3>
          </div>
          <a  href="index.php" >
            <button type="button">Switch</button>
          </a>
        </div>
        <br>
        <div class="user">
          <i class="bi bi-person-fill"></i>
          <div class="user-info">
            <h3>User 2</h3>
          </div>
          <a  href="index.php">
            <button type="button">Switch</button>
          </a>
        </div>
        <!-- Add more users as needed -->
      </div>
      <div class="user-info ">
        <a href="signup.php" >
          <h3>Add User</h3>
        </a>
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