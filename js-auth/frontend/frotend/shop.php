<?php session_start();
require_once '../frotend/dbcon.php';?>
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
                <h2 class="page-banner-title">Shop</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
            <!-- Pager Banner End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- PRODUCTS Start -->
    <!-- Shop Section Start -->
    <div class="shop-section section section-padding mt-n10">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">

                    <!-- Shop Top bar Start -->
                    <div class="shop-top-bar">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Shop Top content Start -->
                                <div class="shop-top-content">
                                    <ul class="nav">
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i
                                                    class="fas fa-th"></i></button></li>
                                        <li><button data-bs-toggle="tab" data-bs-target="#list"><i
                                                    class="fas fa-list"></i></button></li>
                                    </ul>
                                    <p class="shop-text">There are 13 products.</p>
                                </div>
                                <!-- Shop Top content End -->
                            </div>

                        </div>
                    </div>
                    <!-- Shop Top bar End -->

                    <!-- Tab Content Start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid">
                            <!-- Shop Grid Start -->
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
                                                        <span
                                                            class="sale-price"><?php echo htmlspecialchars($row['name']); ?></span>
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
                            <!-- Shop Grid End -->
                        </div>
                    </div>
                    <!-- Tab Content End -->

                    <!-- Bottom bar End -->
                    <div
                        class="bottom-bar d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center">
                        <!-- shop showing Start -->
                        <div class="shop-showing">
                            <p>Showing 1-12 of 09 item(s)</p>
                        </div>
                        <!-- shop showing End -->

                        <!-- Page Pagination Start -->
                        <div class="page-pagination">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="icon-chevron-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="icon-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Page Pagination End -->
                    </div>
                    <!-- Bottom bar End -->



                </div>
                <div class="col-lg-3">
                    <!-- Sidebar Start -->
                    <div class="sidebar-widget">
                        <!-- Widget Tags Start -->
                        <div class="widget-tags">
                            <h5 class="widget-title">Tags :</h5>

                            <div class="widget-tags-items">
                                <a href="#">Drills</a>
                                <a href="#">Saws</a>
                                <a href="#">Sanders</a>
                                <a href="#">Grinders</a>
                                <a href="#">Welders</a>
                                <a href="#">Air Compressors</a>
                                <a href="#">Power Tool Sets</a>

                            </div>
                        </div>
                        <!-- Widget Tags End -->


                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->
    <!-- PRODUCTS End -->

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