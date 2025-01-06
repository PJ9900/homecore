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



        <!-- user dashboard -->
        <div class="user-area bg pt-50 pb-50">
            <div class="container">
                <div class="row">
                <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="sidebar-top">
                                <div class="sidebar-profile-img">
                                    <img src="assets/img/dummy-profile.png" alt="profile-image">
                                </div>
                                <h3>Antoni Jonson</h3>
                            </div>
                            <ul class="sidebar-list">
                                <li><a href="user-profile.php"><i class="far fa-user"></i> My Profile</a></li>
                                <li><a href="order-list.php"><i class="far fa-shopping-bag"></i> My Order List <span class="badge badge-danger">02</span></a></li>
                                <li><a class="active" href="address-list.php"><i class="far fa-location-dot"></i> Address List</a></li>
                                <li><a href="track-order.php"><i class="far fa-map-location-dot"></i> Track My Order</a></li>
                                <li><a href="#"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="user-card">
                                        <div class="user-card-header">
                                            <h4 class="user-card-title">Add New Address</h4>
                                            <div class="user-card-header-right">
                                                <a href="address-list.php" class="theme-btn"><span class="fas fa-arrow-left"></span>Address List</a>
                                            </div>
                                        </div>
                                        <div class="user-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control" placeholder="Your Full Address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="theme-btn"><span class="far fa-save"></span> Save Address</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user dashboard end -->
        
    </main>


    <?php
    include_once('include/footer.php');
    ?>
    