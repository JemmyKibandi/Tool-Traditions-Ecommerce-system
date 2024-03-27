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