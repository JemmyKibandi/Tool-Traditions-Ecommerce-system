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
                            <div class="col-md-6">
                                <!-- Shop Top content Start -->
                                <div class="shop-top-content justify-content-md-end">
                                    <p class="shop-sort">Sort by:</p>
                                    <select>
                                        <option value="0">Relevance</option>
                                        <option value="1">Name, A to Z</option>
                                        <option value="2">Name, Z to A</option>
                                        <option value="3">Price, low to high</option>
                                        <option value="4">Price, high to low</option>
                                    </select>
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
                            <div class="shop-grid-items">
                                <div class="row g-0">
                                    <div class="col-lg-4 col-sm-6">
                                        <!-- Product Item Start -->
                                        <div class="product-item">
                                            <div class="image-block">
                                                <a href="shop-single.html">
                                                    <img src="assets/images/product/prduct-13.jpg" alt="">
                                                    <img class="image-hover" src="assets/images/product/prduct-12.jpg"
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
                            <!-- Shop Grid End -->
                        </div>
                        <div class="tab-pane fade" id="list">
                            <!-- Product Item Start -->
                            <div class="shop-list-items">
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-13.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-12.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Originals Kaval Windbreaker
                                                Winter Jacket</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-12.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-07.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Juicy Couture Juicy Quilted
                                                Terry Track Jacket</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-07.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-12.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Brixton Patrol All Terrain
                                                Anorak Jacket...</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-06.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-09.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">New Balance Arishi Sport v1
                                                New Balance</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-09.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-08.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Calvin Klein Jeans
                                                Reflective Logo Full Zip</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-08.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-11.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Madden by Steve Madden Cale
                                                6 Handsome Madden</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-11.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-03.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Trans-Weight Hooded Wind and
                                                Water Resistant Shell</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-03.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Water and Wind Resistant
                                                Insulated Jacket</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-02.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-01.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">New Balance Fresh Foam
                                                Kaymin Cushioning...</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                                <!-- Product Item Start -->
                                <div class="product-item product-list-item">
                                    <div class="image-block">
                                        <a href="shop-single.html">
                                            <img src="assets/images/product/prduct-05.jpg" alt="">
                                            <img class="image-hover" src="assets/images/product/prduct-04.jpg" alt="">
                                        </a>
                                        <div class="product-label">
                                            <span class="new">New</span>
                                            <span class="discount-percentage">-20%</span>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-btn add-cart" href="#"><i
                                                    class="icon-shopping-bag2"></i></a>
                                            <a class="action-btn wishlist " href="#"><i class="icon-heart"></i></a>
                                            <a class="action-btn compare" href="#"><i class="icon-sliders"></i></a>
                                            <a class="action-btn quick-view" href="#" data-bs-toggle="modal"
                                                data-bs-target="#quickView"><i class="icon-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-features-reviews">
                                            <a href="#" class="features">Studio Design</a>
                                        </div>
                                        <h4 class="product-name"><a href="shop-single.html">Juicy Couture Solid Sleeve
                                                Puffer Jacket Solid...</a></h4>
                                        <div class="review-star">
                                            <div class="star" style="width: 80%;"></div>
                                        </div>
                                        <div class="product-price">
                                            <span class="sale-price">$19.12</span>
                                            <span class="old-price">$23.90</span>
                                        </div>
                                        <div class="desc-text">
                                            <p>Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket. <br> Part of the Kaval Collection <br> Regular fit is eased, but
                                                not sloppy, and perfect for any activity. <br> Plain-woven jacket
                                                specifically constructed for freedom of movement.</p>
                                        </div>
                                        <div class="availability">
                                            <p>Availability: <span>299 In Stock</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Item End -->
                            </div>
                            <!-- Product Item End -->
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

                        <!-- Category Menu Start -->
                        <div class="categories-widget">
                            <ul class="category-top-menu">
                                <li><a href="#">Clothing</a></li>
                                <li>
                                    <ul class="category-sub-menu">
                                        <li>
                                            <a href="#">Bottoms</a>
                                            <div class="category-toggle collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#category01">
                                                <i class="icon-plus2 add"></i>
                                                <i class="icon-minus remove"></i>
                                            </div>
                                            <div class="collapse" id="category01">
                                                <ul class="category-sub-menu">
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Leggings</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Pants & Capris</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Outerwear & Jackets</a>
                                            <div class="category-toggle collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#category02">
                                                <i class="icon-plus2 add"></i>
                                                <i class="icon-minus remove"></i>
                                            </div>
                                            <div class="collapse" id="category02">
                                                <ul class="category-sub-menu">
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Leggings</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Pants & Capris</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Underwear & Loungewear</a>
                                            <div class="category-toggle collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#category03">
                                                <i class="icon-plus2 add"></i>
                                                <i class="icon-minus remove"></i>
                                            </div>
                                            <div class="collapse" id="category03">
                                                <ul class="category-sub-menu">
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Leggings</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Pants & Capris</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Category Menu End -->


                        <!-- Filter Widget Start -->
                        <div class="filter-widget">
                            <h4 class="filter-title">Filter By</h4>
                            <!-- Widget Item Start -->
                            <div class="widget-item">
                                <h5 class="widget-title">Brand</h5>

                                <ul class="widget-brand">
                                    <li>
                                        <label>
                                            <span class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </span>
                                            <a href="#">Studio Design <span>(8)</span></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <span class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </span>
                                            <a href="#">Graphic Corner <span>(5)</span></a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Widget Item End -->

                            <!-- Widget Item Start -->
                            <div class="widget-item">
                                <h5 class="widget-title">Price</h5>

                                <div class="widget-price">
                                    <input type="text" disabled id="amount">
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <!-- Widget Item End -->

                        </div>
                        <!-- Filter Widget End -->


                        <!-- Widget Tags Start -->
                        <div class="widget-tags">
                            <h5 class="widget-title">Tags :</h5>

                            <div class="widget-tags-items">
                                <a href="#">Men’s</a>
                                <a href="#">Shoes</a>
                                <a href="#">Clothing</a>
                                <a href="#">Sunglasses</a>
                                <a href="#">Accessories</a>
                                <a href="#">Trending</a>
                                <a href="#">Barber</a>
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