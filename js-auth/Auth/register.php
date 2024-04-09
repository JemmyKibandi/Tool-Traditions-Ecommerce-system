<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tool Traditions Power Tools</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">


</head>

<body>
    <header>
        <!-- Page Banner End -->
        <?php if (isset($_SESSION['succ'])) { echo "SUCCESS";
   } ?>
        <?php if (isset($_SESSION['err'])) { echo "ERROR";
   } ?>
    </header>
    <!-- Register Section Start -->
    <div class="section section-padding mt-n2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Register to have an Account</h4>
                        <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                        <form action="server.php" method="post" type="multipart form">
                            <div class="single-form">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Email Address *</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="pword">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="pword">
                            </div>
                            <!-- Inline CSS for the message -->
                            <p id="message" style="color: red; display: none;"></p>
                            <div class="single-form">
                                <button class="btn btn-primary" type="submit" name="register">Register</button>
                            </div>
                        </form>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Register Section End -->

    <!-- footer Start -->
    <?php include_once('footer.php'); ?>

    <!-- footer End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icon-chevron-up"></i>
    </a>
    <script>
    const form = document.getElementById('registrationForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const message = document.getElementById('message');

    function checkPassword() {
        if (password.value === confirmPassword.value) {
            message.style.display = 'none';
            return true;
        } else {
            message.style.display = 'block';
            message.textContent = 'Passwords do not match!';
            return false;
        }
    }
    form.addEventListener('submit', function(event) {
        if (!checkPassword()) {
            event.preventDefault(); // Prevent form submission
        }
    });
    password.addEventListener('input', checkPassword);
    confirmPassword.addEventListener('input', checkPassword);
    </script>
    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>