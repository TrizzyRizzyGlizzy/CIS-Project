<!DOCTYPE html>
<html>

<head>
  <title>Map</title>
  <link ref="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
  <?php
  include('header.php');
  ?>
  <style>
    body {
      background-color: #038c73;
    }

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

    .navbar {
      margin-bottom: 20px;
    }

    #image-container {
      margin-bottom: 20px;
    }

    .container-fluid {
      margin-top: 20px;
    }

    p {
      font-size: 20px;
    }

    .center-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="center-container">
    <div class="container rounded">
      <div class="row">
        <div class="col-md-6">
          <div id="image-container" style="margin: auto;">
            <img src="images/map.png" usemap="#image_map">
            <map name="image_map">
              <area alt="Facility Corozal" title="Facility Corozal" href="facility.php" coords="461,61,28" shape="circle">
              <area alt="Facility Orange Walk" title="Facility Orange Walk" href="facility.php" coords="270,224,24" shape="circle">
              <area alt="Facilty Belize" title="Facilty Belize" href="facility.php" coords="371,273,28" shape="circle">
              <area alt="Facility Belize Empty" title="Facility Belize Empty" href="emptyfacility.php" coords="481,349,26" shape="circle">
              <area alt="Facility Cayo" title="Facility Cayo" href="facility.php" coords="174,450,31" shape="circle">
              <area alt="Facility Cayo Empty" title="Facility Cayo Empty" href="emptyfacility.php" coords="98,661,28" shape="circle">
              <area alt="Facility Stan Creek" title="Facility Stan Creek" href="facility.php" coords="348,577,27" shape="circle">
              <area alt="Facility Toledo" title="Facility Toledo" href="facility.php" coords="250,734,28" shape="circle">
              <area alt="Facility Toledo Empty" title="Facility Toledo Empty" href="emptyfacility.php" coords="192,844,28" shape="circle">
            </map>
          </div>
        </div>
        <div class="col-md-6">
          <div class="container-fluid p-3 mb-4 bg-white border border-gray">
            <div style="text-align: center;">
              <h3>Select a Facilty</h3>
              <p>
                Click on any pin within any district to be taken to that specific facility.  
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>