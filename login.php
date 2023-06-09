<?php
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //check if post from forms was used
        //read database
        $email = $_POST['email'];
        $password = $_POST['password'];

        //check email is correct
        $query = "SELECT * FROM account WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        //if email correct, check password
        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password) {
                // Start a new session
                session_start();
                $_SESSION['account_id'] = $user_data['account_id'];
                $_SESSION['f_name'] = $user_data['f_name'];
                header("Location: index.php");
                die;
            } else {
                // Incorrect password
                $error = "Incorrect password. Please try again.";
            }
        } else {
            // Email not found in database
            $error = "Incorrect email. Please try again.";
        }
    }
?>

<!-- Display error message if login fails -->
<?php if(isset($error)): ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        /* Media queries */
        @media (max-width: 768px) {
            .card {
                margin: 0;
            }
            .vh-100 {
                height: 100%;
            }
        }
        @media (max-width: 576px) {
            .card {
                border-radius: 0;
            }
            .card-body {
                padding: 20px;
            }
            .form-control {
                margin-bottom: 20px;
            }
            .d-grid {
                margin-top: 20px;
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

h2 {
  animation: color-change 5s infinite;
}

    </style>
</head>

<body>

    <section>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card bg-white shadow-lg">
                            <div class="card-body p-5">
                                <div class="text-center">
                                    <img src="images/logo_clear.png" class="mx-auto d-block mb-4 img-fluid" alt="Dalt Tech Logo">

                                </div>
                                <form class="mb-3 mt-md-4" action="login.php" method="post">
                                    <h2 class="animate__animated animate__bounce"><br>Greenhouse Tracker</h2>
                                    <p class=" mb-5">Enter your login and password!</p>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required
                                            placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label ">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required
                                            placeholder="******">
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                    <p class="small"><a href="forgotpassword.html">Forgot password?</a></p>
                                        <div class="d-grid">
                                          <button class="btn btn-outline-dark" type="submit">Login</button>                                   
                                </form>
                                <div>
                                    <p class="mb-0  text-center">Don't have an account? <a href="signup.html">Sign
                                            Up</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    // Get the elements for the password fields and the eye icons
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    // Add event listener to the toggle password eye icon
    togglePassword.addEventListener('click', () => {
        // Toggle the password field type attribute between 'password' and 'text'
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // Toggle the eye icons between the closed and open eye icons
        togglePassword.classList.toggle('bi-eye-slash');
        togglePassword.classList.toggle('bi-eye');
    });
</script>
<!-- Popper.js library for Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"></script>
<!-- Bootstrap 5 alpha JavaScript library -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"></script>

</html>