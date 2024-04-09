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
                    style="background-image: url(assets/img/slider/slider-01.jpg);">
                    <div class="container">
                        <!-- Slider Content Start -->
                        <div class="slider-content">
                            <h5 class="sub-title">Sale Offer 20% Off This Week</h5>
                            <h2 class="main-title">2020 Amazing <br> Barber Shop</h2>
                            <p>Light knit upper adapts to the shape of your foot for flexible and natural movement.</p>
                            <a href="shop-list.html" class="btn btn-primary btn-hover-dark">Shopping Now</a>
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
                            <p>Light knit upper adapts to the shape of your foot for flexible and natural movement.</p>
                            <a href="shop-list.html" class="btn btn-primary btn-hover-dark">Shopping Now</a>
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
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-text">
                        <div class="about-text-wrapper">
                            <h4 class="title">About us</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                                the more obscure Latin words, consectetur. <br><br> Lorem Ipsum passage, and going
                                through the cites of the word in classical literature, discovered the undoubtable
                                source. Lorem Ipsum comes from sections Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Facilis distinctio sunt exercitationem. <a href="#">Learn More</a></p>
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
                <p>Consequat magna, massa vel suspendisse morbi aliquam faucibus <br> ligula ante ipsum ac nulla.</p>
            </div>
            <!-- Section Title End -->

            <!-- Product Wrapper Start -->
            <div class="product-wrapper product-active mt-n1">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Product Item Start -->
                            <div class="product-item">
                                <div class="image-block">
                                    <a href="shop-single.html">
                                        <img src="assets/img/product/prduct-13.jpg" alt="">
                                        <img class="image-hover" src="assets/img/product/prduct-12.jpg" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span class="new">New</span>
                                        <span class="discount-percentage">-20%</span>
                                    </div>
                                    <div class="product-action">
                                        <a class="action-btn add-cart" href="#"><i class="icon-shopping-bag2"></i></a>
                                        <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                        <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                        <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                            data-bs-target="#quickView"><i class="icon-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-features-reviews">
                                        <a href="#" class="features">Studio Design</a>

                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h4 class="product-name"><a href="shop-single.html">Originals Kaval Windbreaker
                                            Winter Jacket</a></h4>
                                    <div class="product-price">
                                        <span class="sale-price">$19.12</span>
                                        <span class="old-price">$23.90</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Item End -->
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

    <!-- Banner Start -->
    <div class="section mt-n6">
        <div class="container">
            <!-- Banner Wrapper Start -->
            <div class="banner-wrapper section-margin-02">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Banner Box Start -->
                        <div class="banner-box">
                            <a href="shop-grid-left-sidebar.html">
                                <img src="assets/img/banner/banner-01.jpg" alt="">
                            </a>
                        </div>
                        <!-- Banner Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Banner Box Start -->
                        <div class="banner-box">
                            <a href="shop-grid-left-sidebar.html">
                                <img src="assets/img/banner/banner-02.jpg" alt="">
                            </a>
                        </div>
                        <!-- Banner Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Banner Box Start -->
                        <div class="banner-box">
                            <a href="shop-grid-left-sidebar.html">
                                <img src="assets/img/banner/banner-03.jpg" alt="">
                            </a>
                        </div>
                        <!-- Banner Box End -->
                    </div>
                </div>
            </div>
            <!-- Banner Wrapper End -->
        </div>
    </div>
    <!-- Banner End -->

    <!-- Best Seller Start -->
    <div class="section section-padding-02 mt-n3">
        <div class="container">
            <!-- Product Tabs Start -->
            <div class="product-tabs">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="active" data-bs-toggle="tab" href="#tab1">Best Seller</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab2">Trending</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab3">Top Sale</a></li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1">
                        <!-- Product Wrapper Start -->
                        <div class="product-wrapper product-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Product Item Start -->
                                        <div class="product-item">
                                            <div class="image-block">
                                                <a href="shop-single.html">
                                                    <img src="assets/img/product/prduct-13.jpg" alt="">
                                                    <img class="image-hover" src="assets/img/product/prduct-12.jpg"
                                                        alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                    <span class="discount-percentage">-20%</span>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-btn add-cart" href="#"><i
                                                            class="icon-shopping-bag2"></i></a>
                                                    <a class="action-btn wishlist " href="#"><i
                                                            class="icon-heart"></i></a>
                                                    <a class="action-btn compare" href="#"><i
                                                            class="icon-sliders"></i></a>
                                                    <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quickView"><i class="icon-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-features-reviews">
                                                    <a href="#" class="features">Studio Design</a>

                                                    <div class="review-star">
                                                        <div class="star" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Originals Kaval
                                                        Windbreaker Winter Jacket</a></h4>
                                                <div class="product-price">
                                                    <span class="sale-price">$19.12</span>
                                                    <span class="old-price">$23.90</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Item End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Product Wrapper End -->
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <!-- Product Wrapper Start -->
                        <div class="product-wrapper product-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Product Item Start -->
                                        <div class="product-item">
                                            <div class="image-block">
                                                <a href="shop-single.html">
                                                    <img src="assets/img/product/prduct-13.jpg" alt="">
                                                    <img class="image-hover" src="assets/img/product/prduct-12.jpg"
                                                        alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                    <span class="discount-percentage">-20%</span>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-btn add-cart" href="#"><i
                                                            class="icon-shopping-bag2"></i></a>
                                                    <a class="action-btn wishlist " href="#"><i
                                                            class="icon-heart"></i></a>
                                                    <a class="action-btn compare" href="#"><i
                                                            class="icon-sliders"></i></a>
                                                    <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quickView"><i class="icon-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-features-reviews">
                                                    <a href="#" class="features">Studio Design</a>

                                                    <div class="review-star">
                                                        <div class="star" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Water and Wind
                                                        Resistant Insulated Jacket</a></h4>
                                                <div class="product-price">
                                                    <span class="sale-price">$19.12</span>
                                                    <span class="old-price">$23.90</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Item End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!-- Product Wrapper End -->
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <!-- Product Wrapper Start -->
                        <div class="product-wrapper product-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Product Item Start -->
                                        <div class="product-item">
                                            <div class="image-block">
                                                <a href="shop-single.html">
                                                    <img src="assets/img/product/prduct-13.jpg" alt="">
                                                    <img class="image-hover" src="assets/img/product/prduct-12.jpg"
                                                        alt="">
                                                </a>
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                    <span class="discount-percentage">-20%</span>
                                                </div>
                                                <div class="product-action">
                                                    <a class="action-btn add-cart" href="#"><i
                                                            class="icon-shopping-bag2"></i></a>
                                                    <a class="action-btn wishlist " href="#"><i
                                                            class="icon-heart"></i></a>
                                                    <a class="action-btn compare" href="#"><i
                                                            class="icon-sliders"></i></a>
                                                    <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#quickView"><i class="icon-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-features-reviews">
                                                    <a href="#" class="features">Studio Design</a>

                                                    <div class="review-star">
                                                        <div class="star" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="shop-single.html">Juicy Couture Solid
                                                        Sleeve Puffer Jacket Solid...</a></h4>
                                                <div class="product-price">
                                                    <span class="sale-price">$19.12</span>
                                                    <span class="old-price">$23.90</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Item End -->
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
            </div>
            <!-- Product Tabs End -->
        </div>
    </div>
    <!-- Best Seller End -->

    <!-- footer Start -->
    <?php include_once('footer.php'); ?>
    <!-- footer End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icon-chevron-up"></i>
    </a>
    <!--Back To End-->

    <!-- Quick View Start -->
    <div class="modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Shop Gallery image Start -->
                            <div class="quick-view-image vertical-slider-wrap">
                                <div class="swiper-container quick-view-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/img/shop-single/shop-single-01.jpg"
                                                    alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/img/shop-single/shop-single-02.jpg"
                                                    alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/img/shop-single/shop-single-03.jpg"
                                                    alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/img/shop-single/shop-single-04.jpg"
                                                    alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/img/shop-single/shop-single-05.jpg"
                                                    alt="Product Image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-label">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="quick-view-slider-nav swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/img/shop-single/shop-single-01.jpg"
                                                alt="Product Thumnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/shop-single/shop-single-02.jpg"
                                                alt="Product Thumnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/shop-single/shop-single-03.jpg"
                                                alt="Product Thumnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/shop-single/shop-single-04.jpg"
                                                alt="Product Thumnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/img/shop-single/shop-single-05.jpg"
                                                alt="Product Thumnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shop Gallery image End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Shop Single Start -->
                            <div class="shop-single-content quick-view-content">
                                <h3 class="product-name">Juicy Couture Juicy Quilted Terry Track Jacket</h3>
                                <p class="reference">Reference: Demo</p>
                                <ul class="shop-rating-content">
                                    <li>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="fal fa-comment-dots"></i> Read reviews
                                            <span>(3)</span></a></li>
                                    <li><a href="#"><i class="fal fa-edit"></i> Write a review</a></li>
                                </ul>
                                <div class="product-prices">
                                    <span class="old-price">$35.90</span>
                                    <span class="sale-price">$28.72</span>
                                    <span class="discount-percentage">Save 20%</span>
                                </div>
                                <div class="product-description">
                                    <ul>
                                        <li>Score extra points when it comes to your sporty look with the Juicy Couture™
                                            Juicy Quilted Terry Track Jacket.</li>
                                        <li>Soft terry construction in a quilted design.</li>
                                        <li>Front zipper closure.</li>
                                        <li>61% cotton, 39% polyester;</li>
                                        <li>Lining: 58% cotton, 42% polyester.</li>
                                    </ul>
                                </div>
                                <div class="product-size">
                                    <span class="label">Size</span>
                                    <div class="size-select">
                                        <select>
                                            <option value="0">S</option>
                                            <option value="0">M</option>
                                            <option value="0">L</option>
                                            <option value="0">XL</option>
                                        </select>
                                        <i class="icon-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="product-quantity-cart">
                                    <span class="label">Quantity</span>
                                    <div class="product-quantity-cart-wrapper d-flex">
                                        <div class="product-quantity d-inline-flex">
                                            <button type="button" class="sub"><i class="icon-chevron-down"></i></button>
                                            <input type="text" value="1" />
                                            <button type="button" class="add"><i class="icon-chevron-up"></i></button>
                                        </div>
                                        <div class="product-cart">
                                            <button class="btn btn-dark btn-hover-primary">+ Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-additional-info">
                                    <ul class="social-sharing">
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook-square"></i>
                                                Share</a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i> Tweet</a></li>
                                        <li><a class="google" href="#"><i class="fab fa-google-plus-g"></i> Google+</a>
                                        </li>
                                        <li><a class="pinterest" href="#"><i class="fab fa-pinterest-square"></i>
                                                Pinterest</a></li>
                                    </ul>
                                    <p class="panel-product-actions"><a href="#" class="action-btn wishlist"><i
                                                class="icon-heart"></i> Add to wishlist </a></p>
                                    <p class="panel-product-actions"><button class="action-btn wishlist"><i
                                                class="icon-sliders"></i> Add to compare</button></p>
                                </div>
                            </div>
                            <!-- Shop Single End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View End -->


    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <script src="assets/js/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</html>