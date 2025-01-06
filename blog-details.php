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
                    <h4 class="breadcrumb-title">Blog Details</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- blog area -->
        <div class="blog-area py-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-single-wrap">
                            <div class="blog-single-content">
                                <div class="blog-thumb-img">
                                    <img src="assets/img/3d-mattress-with-clouds.webp" alt="thumb">
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="blog-meta-left">
                                            <ul>
                                                <li><i class="far fa-user"></i><a href="#">Jean R Gunter</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">It is a long established fact that a reader
                                        </h3>
                                        <p class="mb-10">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                            porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                            dolore magnam aliquam quaerat voluptatem.
                                        </p>
                                        <p class="mb-10">
                                            But I must explain to you how all this mistaken idea of denouncing pleasure
                                            and praising pain was born and I will give you a complete account of the
                                            system, and expound the actual teachings of the great explorer of the truth,
                                            the master-builder of human happiness. No one rejects, dislikes, or avoids
                                            pleasure itself, because it is pleasure, but because those who do not know
                                            how to pursue pleasure rationally encounter consequences that are extremely
                                            painful.
                                        </p>
                                        <p class="mb-20">
                                            In a free hour when our power of choice is untrammelled and when nothing
                                            prevents our being able to do what we like best, every pleasure is to be
                                            welcomed and every pain avoided. But in certain circumstances and owing to
                                            the claims of duty or the obligations of business it will frequently occur
                                            that pleasures have to be repudiated and annoyances accepted. The wise man
                                            therefore always holds in these matters to this principle of selection.
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <!-- recent post -->
                            <div class="widget recent-post">
                                <h5 class="widget-title">Recent Post</h5>
                                <div class="recent-post-item">
                                    <div class="recent-post-img">
                                        <img src="assets/img/3d-mattress-with-clouds.webp" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h6><a href="#">How to Enjoy Your Favorite Things Every Day</a></h6>
                                        <span><i class="far fa-clock"></i>August 20, 2024</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-img">
                                        <img src="assets/img/3d-mattress-with-clouds.webp" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h6><a href="#">How to Enjoy Your Favorite Things Every Day</a></h6>
                                        <span><i class="far fa-clock"></i>August 20, 2024</span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="recent-post-img">
                                        <img src="assets/img/3d-mattress-with-clouds.webp" alt="thumb">
                                    </div>
                                    <div class="recent-post-bio">
                                        <h6><a href="#">How to Enjoy Your Favorite Things Every Day</a></h6>
                                        <span><i class="far fa-clock"></i>August 20, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

    </main>


    <?php
    include_once('include/footer.php');
    ?>
    