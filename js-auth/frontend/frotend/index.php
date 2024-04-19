<?php session_start();
require_once '../frotend/dbcon.php';
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


    <!-- Slider Start -->
    <div class="section">
        <div class="swiper-container slider-active">
            <div class="swiper-wrapper">
                <!-- Single Slider Start -->
                <div class="single-slider swiper-slide animation-style-01"
                    style="background-image: url(../../Admin/img/here.png);">
                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <h5 class="sub-title">Sale Offer 20% Off This Week</h5>
                            <h2 class="main-title">2020 Amazing <br> Barber Shop</h2>
                            <p>The home for all types of Power tools </p>
                            <a href="shop.php" class="btn btn-primary btn-hover-dark">Shopping Now</a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>
                <!-- Single Slider End -->
                <!-- Single Slider Start -->
                <div class="single-slider swiper-slide animation-style-01"
                    style="background-image: url(assets/img/slider/slider-02.jpg);">
                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <h5 class="sub-title">Sale Offer 20% Off This Week</h5>
                            <h2 class="main-title">2020 Amazing <br> Barber Shop</h2>
                            <p>The home for all types of Power tools </p>
                            <a href="shop.php" class="btn btn-primary btn-hover-dark">Shopping Now</a>
                        </div>
                        <!-- Slider Content End -->
                    </div>
                </div>
                <!-- Single Slider End -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next d-none"></div>
            <div class="swiper-button-prev d-none"></div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- About Start -->
    <div class="section section-padding-02">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="about-image">
                        <img src="../../Admin/img/here2-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-text">
                        <div class="about-text-wrapper">
                            <h4 class="title">About us</h4>
                            <p>At Tool Traditions, we believe in innovation, reliability, and customer satisfaction. Our
                                range includes everything from drills and saws to advanced machinery for specialized
                                tasks, each designed to offer precision and robust performance. Whether you're building
                                a backyard deck or constructing a skyscraper, our tools are designed to deliver optimal
                                results.

                                Our commitment goes beyond just supplying tools. We are partners in your projects,
                                offering expert advice, demonstrations, and responsive support. With Tool Traditions,
                                you're not just buying a tool; you're gaining a partner who supports your passion and
                                contributes to your success.

                                Our tools are crafted to endure, incorporating the latest technology and adhering to the
                                strictest safety standards. They are rigorously tested under the toughest conditions to
                                ensure they live up to the demands of your work environments.</p>
                        </div>
                        <img src="assets/img/about-text.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- New Product Start -->
    <div class="section section-padding-02 mt-n2">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title">New Arrivals</h2>
            </div>
            <!-- Section Title End -->

            <!-- Product Wrapper Start -->
            <div class="product-wrapper product-active mt-n1">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        $query = "SELECT * FROM product";
                        $result = mysqli_query($db, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="image-block">
                                    <a href="display.php?view=<?php echo $row['product_id']; ?>">
                                        <img src="../../Admin/img/ICON.jpg" alt="Product Image">
                                        <img class="image-hover" src="assets/img/product/prduct-12.jpg"
                                            alt="Product Image Hover">
                                    </a>
                                    <div class="product-label">
                                        <span class="new">New</span>
                                        <span class="discount-percentage">-20%</span>
                                    </div>

                                </div>
                                <div class="product-desc">
                                    <div class="product-features-reviews">
                                        <a href="#" class="features"><b>Category:</b>
                                            <?php echo htmlspecialchars($row['category']); ?></a>
                                    </div>
                                    <h4 class="product-name"><a
                                            href="display.php"><?php echo htmlspecialchars($row['amount']); ?></a>
                                    </h4>
                                    <div class="product-price">
                                        <span class="sale-price"><?php echo htmlspecialchars($row['name']); ?></span>
                                    </div>
                                    <a class="btn btn-dark btn-hover-primary my-4"
                                        href="display.php?view=<?php echo $row['product_id']; ?>">
                                        View Product </a>
                                </div>
                            </div>
                        </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- Product Wrapper End -->
    </div>
    </div>
    <!-- New Product End -->
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

    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>

</body>

</html>