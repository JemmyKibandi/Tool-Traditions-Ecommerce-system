<?php session_start(); 
require_once 'dbcon.php';
?>
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
    <link rel="shortcut icon" type="image/x-icon" href="../frontend/frotend/assets/images/favicon.png">
    <link rel="stylesheet" href="../frontend/frotend/assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="../frontend/frotend/assets/css/style.min.css">

</head>

<body>
    <!-- Login Section Start -->
    <?php
            if (isset($_SESSION['succ'])) { ?>
    <div class="alert alert--outline scheme-success  " role="alert">
        <div class="flex gap-5"><i data-icon="feather__alertTriangle"></i>
            <span class="flex-1 mt-1"><strong>Success.</strong> <?php echo $_SESSION['succ'];
                                                              unset($_SESSION['succ']); ?></span>
        </div>
    </div> <?php } ?>
    <?php if (isset($_SESSION['err'])) { ?>
    <div class="alert alert--outline scheme-danger" role="alert">
        <div class="flex gap-5"><i data-icon="feather__alertTriangle"></i>
            <span class="flex-1 mt-1"><strong>Error.</strong> <?php echo $_SESSION['err'];
                                                            unset($_SESSION['err']); ?> </span>
        </div>
    </div> <?php } ?>
    <div class="section section-padding mt-n2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Login to Your Account</h4>
                        <form action="server.php" method="post" type="multipart form">
                            <div class="single-form">
                                <label class="form-label">Email *</label>
                                <input type="text" class="form-control" name="emailadd">
                            </div>
                            <div class="single-form">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="pass">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <div class="single-form">
                                <button class="btn btn-primary" type="submit" name="login">Login</button>
                            </div>
                        </form>
                        <p>No account? <a class="btn" href="register.php">Create one here.</a></p>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icon-chevron-up"></i>
    </a>
    <!--Back To End-->
    <!-- Modernizer & jQuery JS -->
    <script src="../frontend/frotend/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="../frontend/frotend/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../frontend/frotend/assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="../frontend/frotend/assets/js/main.js"></script>

</body>

</html>