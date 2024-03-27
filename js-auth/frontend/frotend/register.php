<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ubani- Barber Shop Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">


</head>

<body>
    <!-- Header Start -->
    <?php include_once('headerNormal.php'); ?>

    <!-- Header End -->
    <!-- Header Mobile Start -->
    <?php include_once('headerPhone.php'); ?>
    <!-- Header Mobile End -->
    <!-- off Canvas Start -->
    <?php include_once('topPart.php'); ?>
    <!-- off Canvas End -->

    <div class="menu-overlay"></div>
    <!-- Page Banner Start -->
    <div class="page-banner-section section">
        <div class="container">
            <!-- Pager Banner Start -->
            <div class="page-banner-content text-center">
                <h2 class="page-banner-title">Register</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Register</li>
                </ul>
            </div>
            <!-- Pager Banner End -->
        </div>
    </div>
    <!-- Page Banner End -->

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
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="fname">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lname">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Email Address *</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Username *</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="pword">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="pword">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="newsletter">
                                <label class="form-check-label" for="newsletter">Sign Up For Our Newsletter <br>
                                    Subscribe To Our Newsletters Now And Stay Up-To-Date With New Collections, The
                                    Latest Lookbooks And Exclusive Offers.</label>
                            </div>
                            <div class="single-form">
                                <button class="btn btn-primary" type="submit" name="">Register</button>
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

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>