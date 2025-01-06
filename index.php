<?php
include_once('include/header.php');
?>



    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" class="form-control" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    <main class="main">

        <!-- hero slider -->
        <div class="hero-section hs-3">
            <div class="container-fluid px-0">
                <div class="hero-slider owl-carousel owl-theme">
                    <div class="hero-single">
                        <div class="hero-single-bg" style="background-image: url(assets/img/hero/Premium_banner.webp)">
                        </div>
                    </div>
                    <div class="hero-single">
                        <div class="hero-single-bg" style="background-image: url(assets/img/hero/Premium_banner.webp)">
                        </div>
                    </div>
                    <div class="hero-single">
                        <div class="hero-single-bg" style="background-image: url(assets/img/hero/Premium_banner.webp)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->


        <!-- category area -->
        <div class="category-area3 pt-50 pb-50">
            <div class="container wow fadeInUp" data-wow-delay=".25s">

                <div class="row">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Category</h2>
                        </div>
                    </div>
                </div>
                <div class="category-slider owl-carousel owl-theme">
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/bedshet.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Bedsheets</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/mattress-transparent-background.webp" alt="">
                                </div>
                                <div class="content">
                                    <h4>Mattresses</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/pillow.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Pillows</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/pillow.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Cushions</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/mattress-transparent-background.webp" alt="">
                                </div>
                                <div class="content">
                                    <h4>Mattress Covers</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/pillow.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <h4>Pillow Covers</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- category area end-->


        <!-- trending item -->
        <div class="product-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInDown" data-wow-delay=".25s">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Trending Items</h2>
                        </div>
                    </div>
                </div>
                <div class="product-wrap wow fadeInUp" data-wow-delay=".25s">
                    <div class="product-slider owl-carousel owl-theme">
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type new">New</span>
                                <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                        alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-single.html">PureOrtho CleanTech Mattress</a>
                                </h3>
                                <div class="product-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-bottom">
                                    <div class="product-price">
                                        <span>&#8377;250.00</span>
                                    </div>
                                    <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type hot">Hot</span>
                                <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                        alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-single.html">PureOrtho CleanTech Mattress</a>
                                </h3>
                                <div class="product-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-bottom">
                                    <div class="product-price">
                                        <span>&#8377;250.00</span>
                                    </div>
                                    <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type oos">Out Of Stock</span>
                                <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                        alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-single.html">PureOrtho CleanTech Mattress</a>
                                </h3>
                                <div class="product-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-bottom">
                                    <div class="product-price">
                                        <span>&#8377;250.00</span>
                                    </div>
                                    <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <span class="type discount">10% Off</span>
                                <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                        alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-single.html">PureOrtho CleanTech Mattress</a>
                                </h3>
                                <div class="product-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-bottom">
                                    <div class="product-price">
                                        <del>&#8377;250.00</del>
                                        <span>&#8377;190.00</span>
                                    </div>
                                    <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                        alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-single.html">PureOrtho CleanTech Mattress</a>
                                </h3>
                                <div class="product-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-bottom">
                                    <div class="product-price">
                                        <span>&#8377;250.00</span>
                                    </div>
                                    <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                        alt=""></a>
                                <div class="product-action-wrap">
                                    <div class="product-action">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quickview"
                                            data-tooltip="tooltip" title="Quick View"><i class="far fa-eye"></i></a>
                                        <a href="#" data-tooltip="tooltip" title="Add To Wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="shop-single.html">PureOrtho CleanTech Mattress</a>
                                </h3>
                                <div class="product-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="product-bottom">
                                    <div class="product-price">
                                        <span>&#8377;250.00</span>
                                    </div>
                                    <button type="button" class="product-cart-btn" data-bs-placement="left"
                                        data-tooltip="tooltip" title="Add To Cart">
                                        <i class="far fa-shopping-bag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- trending item end -->


        <!-- about area -->
        <div class="about-area pt-50 pb-100  ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <img class="img-1" src="assets/img/3d-mattress-with-clouds.webp" alt="">
                            </div>
                            <div class="about-shape">
                                <img src="assets/img/shape/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="flaticon-drive"></i> About Us
                                </span>
                                <h2 class="site-title">
                                    We Provide Best <span>Mattresses</span></h2>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quas iure repudiandae
                                dolor nostrum dicta beatae reprehenderit ad! Fugit aliquam necessitatibus magni, natus
                                vero cumque impedit dolorem dicta vitae tempore!
                            </p>
                            <div class="about-list">
                                <ul>
                                    <li><i class="fas fa-check-double"></i> lorem insum vitae dista ipsum</li>
                                    <li><i class="fas fa-check-double"></i> lorem insum vitae dista ipsum</li>
                                    <li><i class="fas fa-check-double"></i> lorem insum vitae dista ipsum</li>
                                    <li><i class="fas fa-check-double"></i> lorem insum vitae dista ipsum</li>
                                </ul>
                            </div>
                            <a href="about.html" class="theme-btn mt-4">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->


        <!-- deal area -->
        <div class="deal-area bg  ">
            <div class="deal-text-shape">Deal</div>
            <div class="container">
                <div class="deal-wrap wow fadeInUp" data-wow-delay=".25s">
                    <div class="deal-slider owl-carousel owl-theme">
                        <div class="deal-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="deal-content">
                                        <div class="deal-info">
                                            <span>This Week Deal</span>
                                            <h1>Best Mattress Deal</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias
                                                consectetur quasi, illo quibusdam aperiam amet quos cum, dolor soluta
                                                sunt cumque recusandae aliquid natus? Repellendus incidunt dolorem rem
                                                est maiores.</p>
                                        </div><br>
                                        <a href="#" class="theme-btn theme-btn2">Shop Now <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="deal-img">
                                        <img src="assets/img/mattress-transparent-background.webp" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="deal-content">
                                        <div class="deal-info">
                                            <span>Get 45% Off</span>
                                            <h1>Best Mattress Deal</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt veniam
                                                dignissimos provident quod dolor! Nostrum voluptatibus delectus illum
                                                quae atque doloribus velit nisi ducimus quidem iure maxime, pariatur
                                                aperiam aut.</p>
                                        </div><br>
                                        <a href="#" class="theme-btn theme-btn2">Shop Now <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="deal-img">
                                        <img src="assets/img/mattress-transparent-background.webp" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="deal-item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="deal-content">
                                        <div class="deal-info">
                                            <span>Get 20% Off</span>
                                            <h1>Best Sofa Furniture Deal</h1>
                                            <p>There are many variations of passages available but the majority have
                                                suffered alteration in some form
                                                by injected humour, or randomised words which don't look even slightly
                                                believable.</p>
                                        </div><br>
                                        <a href="#" class="theme-btn theme-btn2">Shop Now <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="deal-img">
                                        <img src="assets/img/mattress-transparent-background.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- deal area end -->


        <!-- product list -->
        <div class="product-list py-100">
            <div class="container wow fadeInUp" data-wow-delay=".25s">
                <div class="row g-4">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-list-box">
                            <h2 class="product-list-title">On sale</h2>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-list-box">
                            <h2 class="product-list-title">Best Seller</h2>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-list-box">
                            <h2 class="product-list-title">Top Rated</h2>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/3d-mattress-with-clouds.webp"
                                            alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">CleanTech Mattress</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>&#8377;40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip"
                                    title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product list end -->


        <!-- brand area -->
        <div class="brand-area bg pt-50 pb-10">
            <div class="container wow fadeInUp" data-wow-delay=".25s">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h2 class="site-title">Trusted by over <span>3.2k+</span> companies</h2>
                        </div>
                    </div>
                </div>
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <img src="assets/img/brand/01.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/02.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/03.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/04.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/05.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/06.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->
    </main>

    <?php
include_once('include/footer.php');
?>
