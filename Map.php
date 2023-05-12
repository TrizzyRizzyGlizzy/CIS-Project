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
body{
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

        p{
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
          <img id="image" src="images/map.png" usemap="#image_map">
          <map name="image_map">
            <area alt="Coro" title="Coro" href="coro.php" coords="407,7 592,66 557,264 475,231 410,151 359,118 " shape="polygon">
            <area alt="Orange Walk" title="Orange Walk" href="OW.php" coords="91,270 352,125 495,258 376,286 329,424 330,504 93,551 91,471 " shape="polygon">
            <area alt="Belize City" title="Belize City" href="City.php" coords="375,289 553,272 484,668 361,676 374,639 360,618 363,488 341,501 333,435 347,403 373,392 369,363 " shape="polygon">
            <area alt="Toledo" title="Toledo" href="toledo.php" coords="53,1026 229,929 324,889 357,961 433,975 186,1264 40,1259 " shape="polygon">
            <area alt="Stan Creek" title="Stan Creek" href="stanc.php" coords="344,682 484,680 525,754 454,972 368,959 350,904 333,881 261,874 286,833 310,826 322,774 348,743 " shape="polygon">
            <area alt="Cayo" title="Cayo" href="cayo.php" coords="91,574 356,497 364,662 337,682 361,714 314,768 309,801 298,809 309,819 280,828 251,881 236,900 236,916 151,969 143,962 119,980 80,990 61,1016 " shape="polygon">
          </map>
        </div>
      </div>
      <div class="col-md-6">
        <div class="container-fluid p-3 mb-4 bg-white border border-gray">
          <div style="text-align: center;">
            <h3>Select a District</h3>
            <p>
              Click on any district it and it will redirect you to that district's page with the facilities of that district!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>