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

        <!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
            <div class="container">
                <div class="site-breadcrumb-wrap">
                    <h4 class="breadcrumb-title">Our Blog</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Our Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <div class="blog-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Blog</span>
                            <h2 class="site-title">Our Latest News & <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="assets/img/3d-mattress-with-clouds.webp" alt="Thumb">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 12, 2024</span>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="blog-details.php"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.php">There are many variations of passage available majority suffered.</a>
                                </h4>
                                <a class="theme-btn" href="blog-details.php">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInDown" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="assets/img/3d-mattress-with-clouds.webp" alt="Thumb">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 15, 2024</span>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="blog-details.php"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.php">Contrary to popular belief making simply random text piece classical
                                        latin.</a>
                                </h4>
                                <a class="theme-btn" href="blog-details.php">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="blog-item-img">
                                <img src="assets/img/3d-mattress-with-clouds.webp" alt="Thumb">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> Aug 18, 2024</span>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="blog-details.php"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="blog-details.php"> If you are going use passage you need sure there anything middle
                                        text.</a>
                                </h4>
                                <a class="theme-btn" href="blog-details.php">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <?php
    include_once('include/footer.php');
    ?>
    