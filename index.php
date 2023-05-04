<header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php
  include('header.php');
  ?>
</header>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <style>
.fade-in-h{
  font-family: 'Courier Newk';
  opacity: 0;
  transition: opacity 3s ease-in-out;
  color: white;
  text-shadow:
  -1px -1px 0 #000,
  1px -1px 0 #000,
  -1px 1px 0 #000,
  1px 1px 0 #000;  
}

.fade-in {
  opacity: 1;
}

    section {
   background-size: cover;
   background-position: center;
   background-attachment: scroll;
   margin: 0;
   padding: 0;
    }

    .square-box {
    width: 500px;
    height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #038c73;
    color: white;
  }

  .footer {
  background-color: #f8f9fa;
  border-top: 1px solid #e9ecef;
  font-size: 14px;
  text-align: center;
  padding: 20px;
}

.footer p {
  margin-bottom: 5px;
}

.footer i {
  font-size: 16px;
}

@media only screen and (max-width: 600px) {
			nav li {
				display: block;
				margin: 10px;
			}
			
			nav {
				padding: 5px;
			}
			
			header {
				padding: 10px;
			}
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

h5 {
  animation: color-change 5s infinite;
}
  </style>
</head>



<body>

  <div class="container-fluid-lg">
    <section class="vh-100 d-flex justify-content-center align-items-center" style="background-image: url('images/home-page.png');">
      <div class="text-center">
        <h1 class = "fade-in-h">GREENHOUSE TRACKER</h1>
      </div>
    </section>

    <section class="vh-100 d-flex justify-content-center align-items-center" >
  <div class="p-5 bg-#038c73 border border-gray rounded-0 square-box" style="background-color: #038c73;">
    <h1>About Us</h1>
    <p>
      Dalt Tech is a cutting-edge greenhouse tracking company that leverages the latest technology to help farmers optimize their greenhouse operations.
      Our team of experts is dedicated to providing innovative solutions that enable growers to monitor and analyze critical data points such as temperature, humidity, and CO2 levels.
      With our state-of-the-art sensors and intuitive software, farmers can make informed decisions to futher manage their greenhouses.
      At Dalt Tech, we are committed to promoting sustainable agriculture practices and empowering farmers with the tools they need to succeed in an ever-changing industry.
    </p>
  </div>
</section>

<section class="vh-100 d-flex justify-content-center align-items-center" style="background-color: #038c73;">
  <div class="p-5 bg-#038c73 border border-gray rounded-0 square-box" style="background-color: white; color: black;">
    <h1>Map</h1>
    <p class="text-md-left">
      This is an interactive map which shows your current facilities in all the districts, which you have requested.
      With just one click you can see the status of all your greenhouses scattered across Belize.
    </p>
    <h5>Click the Map!</h5>
    <a href="Map.php">
      <img class="rounded float-right" src="images/map.png" width="150px">
    </a>
  </div>
</section>

  </body>
  <footer class="footer py-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <i class="fa fa-align-center" aria-hidden="true">
          <p>© 2023 DALT Tech. All rights reserved. Address: Princess Margrett Drive, Belize City, Belize.</p> 
          <p>Phone: 456-7890  Email: DaltTech@gmail.com</p>
        </i>
      </div>
    </div>
  </div>
</footer>
<script>
  const headings = document.querySelectorAll('.fade-in-h');

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-in');
    }
  });
});

headings.forEach((heading) => {
  observer.observe(heading);
});
</script>
</html>