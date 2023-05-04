<?php
/*include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST") {
//check if post from forms was used
//read database
$email = $_POST['email'];
$password = $_POST['password'];
//check email is correct
$query = "select * from users where User_Email = '$email' limit 1";
$result = mysqli_query($con, $query);
//if email correct, check password
if($result) {
if($result && mysqli_num_rows($result) > 0) {
$user_data = mysqli_fetch_assoc($result);
if($user_data['User_Password'] === $password) {
$_SESSION['user_id'] = $user_data['user_id'];
header("Location: index.php");
die;
}
}
}
echo "Invalid email or password!";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Billing Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
  <style>
            @keyframes color-change {
  0% {
    color: #678C5D;
  }
  50% {
    color: #5E8C7B;
  }
  100% {
    color: #088C8C;
  }
}

h3 {
  animation: color-change 5s infinite;
}
  </style>
</head>
<?php
include('header.php');
?>

<body style="background:#038c73">

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="container border border-gray rounded p-4 w-75" style="background-color: white;">
    <form>
      <h3>Billing Address</h3>
      <div class="mb-3 row">
        <div class="col">
          <label for="fname" class="form-label"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" class="form-control" id="fname" name="firstname" placeholder="John M. Doe" readonly>
        </div>
        <div class="col">
          <label for="email" class="form-label"><i class="fa fa-envelope"></i> Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="john@example.com" readonly>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col">
          <label for="adr" class="form-label"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" class="form-control" id="adr" name="address" placeholder="542 W. 15th Street" readonly>
        </div>
        <div class="col">
          <label for="district" class="form-label"><i class="fa fa-institution"></i> District</label>
          <select class="form-select" id="district" name="district" readonly>
            <option selected disabled>Select a district</option>
            <option value="Coro">Corozal</option>
            <option value="OW">Orange Walk</option>
            <option value="Belize">Belize City</option>
            <option value="Cayo">Cayo</option>
            <option value="SC">Stann Creek</option>
          </select>
        </div>
      </div>
      <hr class="text-center">
      <h3>Payment</h3>
      <div class="mb-3">
        <div class="row">
          <div class="col">
            <label for="cname" class="form-label">Name on Card</label>
            <input type="text" class="form-control" id="cname" name="cardname" placeholder="John More Doe" readonly>
          </div>
          <div class="col">
            <label for="ccnum" class="form-label">Credit card number</label>
            <input type="text" class="form-control" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" readonly>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="expiration-month">Expiration Month</label>
          <input type="text" class="form-control" id="expiration-month" placeholder="MM" readonly>
        </div>
        <div class="col-md-4">
          <label for="expiration-year">Expiration Year</label>
          <input type="text" class="form-control" id="expiration-year" placeholder="YY" readonly>
        </div>
        <div class="col-md-4">
          <label for="cvv">CVV</label>
          <input type="text" class="form-control" id="cvv" placeholder="XXX" readonly>
        </div>
  <div class="d-flex justify-content-between mt-3">
  <button type="button" class="btn btn-secondary btn-sm me-2" id="edit-btn">Edit</button>
  <button type="button" class="btn btn-primary btn-sm d-none" id="save-btn">Save</button>
</div>
</div>
<script>
// Get the edit and save buttons
const editBtn = document.getElementById('edit-btn');
const saveBtn = document.getElementById('save-btn');

// Get the form inputs
const inputs = document.querySelectorAll('input, select');

// Disable the district dropdown
const districtDropdown = document.getElementById('district');
districtDropdown.disabled = true;

// Make the email input field read-only
const emailInput = document.getElementById('email');
emailInput.setAttribute('readonly', '');

// Add click event listener to the edit button
editBtn.addEventListener('click', function() {
  // Enable the inputs
  inputs.forEach(input => input.removeAttribute('readonly'));
  
  // Enable the district dropdown
  districtDropdown.disabled = false;
  
  // Show the save button and hide the edit button
  saveBtn.classList.remove('d-none');
  editBtn.classList.add('d-none');
});

// Add click event listener to the save button
saveBtn.addEventListener('click', function() {
  // Disable the inputs
  inputs.forEach(input => input.setAttribute('readonly', ''));
  
  // Disable the district dropdown
  districtDropdown.disabled = true;
  
  // Hide the save button and show the edit button
  saveBtn.classList.add('d-none');
  editBtn.classList.remove('d-none');
});
</script>
</body>
</html>