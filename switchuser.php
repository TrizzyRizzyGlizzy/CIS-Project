<!DOCTYPE html>
<html>
<head>
	<title>Switch User</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <style>
        
        h3{
            text-decoration: none;
            font-size: 15px;
            
            
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        
    .modal {
  display:flex;
  
  z-index: 1;
  left: 0;
  top: 0;
  width: 200px;
  height: 200px;
  

}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: auto;
  font-size: 12px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

    </style>
   
</head>
<body>
	<!-- Trigger the modal -->
<button onclick="document.getElementById('user-modal').style.display='block'">Switch User</button>

<!-- The Modal -->
<div id="user-modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" role="document">
    <span class="close">&times;</span>
    <div class="container">
      <h1>Switch User</h1>
      <div class="user-list">
        <div class="user">
          <i class="bi bi-person-fill" ></i>
          <div class="user-info">
            <h3>User 1</h3>
          </div>
          <a href="index.php">
            <button type="button">Switch</button>
          </a>
        </div>
        <br>
        <div class="user">
          <i class="bi bi-person-fill"></i>
          <div class="user-info">
            <h3>User 2</h3>
          </div>
          <a href="index.php">
            <button type="button">Switch</button>
          </a>
        </div>
        <!-- Add more users as needed -->
      </div>
      <div>
        <a href="signup.html">Add User</a>
        </a>
      </div>
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
</body>
</html>