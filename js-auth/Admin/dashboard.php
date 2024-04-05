<?php session_start(); 
require_once '../frontend/frotend/dbcon.php';
if (!isset($_SESSION['user_id'])) {
    header('location: ../Auth/login.php
    ');
    exit();
}
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

<body
    style="background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(top,  #ffffff 0%, #d7b9ff 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ffffff 0%,#d7b9ff 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #ffffff 0%,#d7b9ff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */">
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

    <!-- ACTIVITIES Section Start -->
    <div class="section section-padding mt-n6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-item"
                        style="background: linear-gradient(135deg, #a2f78d, #58f7bb); padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="blog-image">
                            <a href="sales.php">
                                <img src="https://media.istockphoto.com/id/1305901780/vector/business-plan-concept-illustration-business-concept-two-people-are-planning-a-business-based.jpg?s=612x612&w=0&k=20&c=WOTJKiJlZOWZwCs4HIKfAts-h-X4k0ZYQduz9ME6uP0="
                                    alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title" style="text-align:center"><a
                                    href="blog-details-left-sidebar.html">View sales
                                </a></h4>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-item"
                        style="background: linear-gradient(135deg, #a2f78d, #58f7bb); padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="blog-image">
                            <a href="inquiries.php">
                                <img src="https://media.istockphoto.com/id/1355324434/vector/young-woman-doubts-and-questioning-everything.jpg?s=612x612&w=0&k=20&c=uaHcMDfj3I07LFRMcWbdxgItl2ogAXW9T3AS1-Ijojg="
                                    alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title" style="text-align:center"><a
                                    href="blog-details-left-sidebar.html">Inquiries
                                </a></h4>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Single Blog Item Start -->
                    <div class="single-blog-item"
                        style="background: linear-gradient(135deg, #a2f78d, #58f7bb); padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="blog-image">
                            <a href="products.php">
                                <img src="https://media.istockphoto.com/id/1184713126/video/a-home-tool-appears-on-a-wooden-table-logo-intro-animation-stop-motion.jpg?s=640x640&k=20&c=YZ9kaQK44lCgGHTIgGnV-HNV79BNqDadJ7cWa7bHHdw="
                                    alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h4 class="post-title" style="text-align:center"><a
                                    href="blog-details-left-sidebar.html">View Products
                                </a></h4>
                        </div>
                    </div>
                    <!-- Single Blog Item End -->
                </div>
            </div>

        </div>
    </div>
    <!-- ACTIVITIES Section End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icon-chevron-up"></i>
    </a>

    <!-- Modernizer & jQuery JS -->
    <script src="../frontend/frotend/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="../frontend/frotend/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="../frontend/frotend/assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="../frontend/frotend/assets/js/main.js"></script>


</body>

</html>