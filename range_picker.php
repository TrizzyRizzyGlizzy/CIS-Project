<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
  <title>Range Slider Example</title>
</head>
<body>
  <div class="container">
    <h1>Range Slider Example</h1>
    <form>
      <div class="form-group">
        <label for="rangeSelect">Select a Range:</label>
        <select class="form-select" id="rangeSelect">
          <option value="0-100">0-100</option>
          <option value="100-1000">100-1000</option>
          <option value="1000-3000">1000-3000</option>
        </select>
      </div>
      <div class="form-group">
        <label for="slider">Slider:</label>
        <input type="range" class="form-range" id="slider">
        <p id="sliderValue">Slider Value: <span id="sliderOutput"></span></p>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
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
