<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include('header.php');
  ?>
</header>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plant Information</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
	<style>
		.container {
			border: 2px solid gray;
			padding: 20px;
			margin: auto;
			margin-top: 50px;
			width: 50%;
            text-align: center;
		}
        h1{
            text-align: center;
        }

        body{
          background-color: #038c73;
        }
	</style>
</head>
<body>
    <h1>Request Space Form</h1>
<div class="container">
  <form>
    <div class="mb-3">
      <label for="district-select" class="form-label">District</label>
      <select class="form-select" id="district-select" required>
        <option value="">Select a district</option>
        <option value="Belize">Belize</option>
        <option value="Orange Walk">Orange Walk</option>
        <option value="Cayo">Cayo</option>
        <option value="Toledo">Toledo</option>
        <option value="Stann Creek">Stann Creek</option>
        <option value="Corozal">Corozal</option>
      </select>
      <div class="invalid-feedback">Please select a district.</div>
    </div>
    <div class="mb-3">
      <label for="email-input" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email-input" aria-describedby="email-help" placeholder="DaltTech@gmail.com" required>
      <div id="email-help" class="form-text">We'll never share your email with anyone else.</div>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
    <div class="mb-3">
      <label for="space-input" class="form-label">Space required</label>
      <div class="input-group">
        <input type="number" class="form-control" id="space-input" min="1" max="1000" required>
        <span class="input-group-text">sq. ft.</span>
      </div>
      <div class="invalid-feedback">Please enter a number between 1 and 1000.</div>
    </div>
    <div class="mb-3">
      <label for="notes-input" class="form-label">Extra Specifications</label>
      <textarea class="form-control" id="notes-input" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</html>