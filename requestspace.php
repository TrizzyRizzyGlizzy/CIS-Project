<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include('header.php');
  ?>
</header>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Request Space Form</title>
	<link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style_index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<style>
		.container1 {
			border: 2px solid gray;
			padding: 20px;
			margin: auto;
			margin-top: 50px;
			width: 50%;
            text-align: center;
		}
        h1{
            text-align: center;
            color: white;
        }

        body{
          background-color: #038c73;
        }
	</style>
</head>
<body>
    <h1>Request Space Form</h1>
<div class="container1 rounded bg-white border border-gray">
  <form>
    <div class="mb-3">
      <label for="district-select" class="form-label">District</label>
      <select class="form-select" id="district-select" required>
        <option value="">Select a district</option>
        <option value="Corozal">Corozal</option>
        <option value="ow">Orange Walk</option>
        <option value="bz">Belize</option>
        <option value="cy">Cayo</option>
        <option value="Stann Creek">Stann Creek</option>
        <option value="Toledo">Toledo</option>
      </select>
      <div class="invalid-feedback">Please select a district.</div>
    </div>
    <div class="mb-3">
      <label for="email-input" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="email-input" aria-describedby="email-help" placeholder="DaltTech@gmail.com" required>
      <div id="email-help" class="form-text">We'll never share your email with anyone else.</div>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
    <div class="mb-3">
    <div class="container">
    <h2>Amount of Space Needed</h2>
    <form>
      <div class="form-group">
        <label for="rangeSelect">Select a Range for the Amount of Space Needed in Square Feet:</label>
        <select class="form-select" id="rangeSelect">
          <option value="0-100">0-100</option>
          <option value="100-1000">100-1000</option>
          <option value="1000-3000">1000-3000</option>
        </select>
      </div>
      <div class="form-group">
        <input type="range" class="form-range" id="slider">
        <p id="sliderValue">Space Needed: <span id="sliderOutput"></span> sq. ft.</p>
      </div>
    </div>
    <div class="mb-3">
      <label for="notes-input" class="form-label">Extra Specifications</label>
      <textarea class="form-control" id="notes-input" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script>
    const rangeSelect = document.getElementById('rangeSelect');
    const slider = document.getElementById('slider');
    const sliderOutput = document.getElementById('sliderOutput');

    rangeSelect.addEventListener('change', () => {
      const selectedRange = rangeSelect.value.split('-');
      const min = parseInt(selectedRange[0]);
      const max = parseInt(selectedRange[1]);
      const step = (max - min <= 100) ? 10 : 100; // Choose step size based on range
      slider.min = min;
      slider.max = max;
      slider.step = step;
      slider.value = min;
      sliderOutput.textContent = min;
    });

    slider.addEventListener('input', () => {
      sliderOutput.textContent = slider.value;
    });
  </script>
</body>
</html>