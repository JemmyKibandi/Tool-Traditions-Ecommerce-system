<?php session_start();
$servername = "localhost"; // Replace with your database server name
$username = "root";       // Replace with your database username
$password = "";       // Replace with your database password
$dbname = "tool_traditions";    // Replace with your database name

// Create a connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
                <h2 class="page-banner-title">Shop Single</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="shop-grid-left-sidebar.html">Shop</a>
                    </li>
                    <li class="breadcrumb-item active">Shop Single</li>
                </ul>
            </div>
            <!-- Pager Banner End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Shop Single Section Start -->
    <div class="shop-section section section-padding-02 mt-n10">
        <div class="container">
            <div class="row gx-10">
                <div class="col-lg-6">
                    <!-- Shop Gallery image Start -->
                    <div class="vertical-slider-wrap">
                        <div class="swiper-container pd-vertical-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-img zoom">
                                        <img src="../../Admin/img/ICON.jpg" alt="Product Image" />
                                        <div class="inner-stuff">
                                            <div class="gallery-item" data-bs-src="../../../Admin/img/ICON.jpg">
                                                <a href="javascript:void(0)">
                                                    <i class="lastudioicon-full-screen"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-label">
                                <span class="new">New</span>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Gallery image End -->
                </div>
                <div class="col-lg-6">
                    <!-- Shop Single Start -->

                    <?php
                    $query = "SELECT * FROM product WHERE product_id=$_GET[view]";
                    $result = mysqli_query($db, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $productId = $row['product_id']; // Assuming 'id' is a column in your 'product' table
                    ?>
                    <form method="post" action="server.php" enctype="multipart/form-data">
                        <div class="shop-single-content">
                            <h3 class="product-name">
                                <?php echo  $row['name']; ?> </h3>
                            <div class="product-prices">
                                <span class="sale-price"><?php echo  $row['amount']; ?></span>
                                <span class="discount-percentage">Save 20%</span>
                            </div>
                            <div class="product-description">
                                <?php echo  $row['description']; ?>
                                <br><b>Want the <?php echo  $row['name']; ?>? Inquire Now !</b>
                                <input type="hidden" name="productId" value="<?php echo $_GET['view']; ?>">
                                <div class="mb-3">
                                    <label for="clientName" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="clientName" name="clientName"
                                        placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="clientPhone" class="form-label">Phone:</label>
                                    <input type="tel" class="form-control" id="clientPhone" name="clientPhone"
                                        placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="clientEmail" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="clientEmail" name="clientEmail"
                                        placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="clientMessage" class="form-label">Message:</label>
                                    <textarea class="form-control" id="clientMessage" name="clientMessage" rows="3"
                                        placeholder="Enter your message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php }
                    } ?>
                    <!-- Shop Single End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Single Section End -->

    <!-- footer Start -->
    <?php include_once('footer.php'); ?>
    <!-- footer End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icon-chevron-up"></i>
    </a>
    <!--Back To End-->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>