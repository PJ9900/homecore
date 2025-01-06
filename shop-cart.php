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
                    <h4 class="breadcrumb-title">Shop Cart</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php"><i class="far fa-home"></i> Home</a></li>
                        <li class="active">Shop Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- shop cart -->
        <div class="shop-cart pt-100 pb-50">
            <div class="container">
                <div class="shop-cart-wrap">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Sub Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="shop-cart-img">
                                                        <a href="#"><img src="assets/img/3d-mattress-with-clouds.webp" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-content">
                                                        <h5 class="shop-cart-name"><a href="#">Simple Denim Chair</a></h5>
                                                        <div class="shop-cart-info">
                                                            <p><span>Type:</span>Armchair</p>
                                                            <p><span>Color:</span>Orange</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-price">
                                                        <span>&#8377;1,500</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-qty">
                                                        <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                                        <input class="quantity" type="text" value="1" disabled="">
                                                        <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-subtotal">
                                                        <span>&#8377;1,500</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="shop-cart-remove"><i class="far fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="shop-cart-img">
                                                        <a href="#"><img src="assets/img/3d-mattress-with-clouds.webp" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-content">
                                                        <h5 class="shop-cart-name"><a href="#">Simple Denim Chair</a></h5>
                                                        <div class="shop-cart-info">
                                                            <p><span>Type:</span>Armchair</p>
                                                            <p><span>Color:</span>Orange</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-price">
                                                        <span>&#8377;1,500</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-qty">
                                                        <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                                        <input class="quantity" type="text" value="1" disabled="">
                                                        <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-subtotal">
                                                        <span>&#8377;1,500</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="shop-cart-remove"><i class="far fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="shop-cart-img">
                                                        <a href="#"><img src="assets/img/3d-mattress-with-clouds.webp" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-content">
                                                        <h5 class="shop-cart-name"><a href="#">Simple Denim Chair</a></h5>
                                                        <div class="shop-cart-info">
                                                            <p><span>Type:</span>Armchair</p>
                                                            <p><span>Color:</span>Orange</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-price">
                                                        <span>&#8377;1,500</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-qty">
                                                        <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                                        <input class="quantity" type="text" value="1" disabled="">
                                                        <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="shop-cart-subtotal">
                                                        <span>&#8377;1,500</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="shop-cart-remove"><i class="far fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- <div class="shop-cart-footer">
                                <div class="row">
                                    <div class="col-md-2 col-lg-6">
                                        <div class="shop-cart-btn text-md-end">
                                            <a href="#" class="theme-btn"><span class="fas fa-arrow-left"></span> Continue Shopping</a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-lg-6">
                                        <div class="shop-cart-coupon">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Coupon Code">
                                                <button class="theme-btn" type="submit">Apply Coupon</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-4">
                            <div class="shop-cart-summary">
                                <h5>Cart Summary</h5>
                                <ul>
                                    <li><strong>Sub Total:</strong> <span>&#8377;4,500.00</span></li>
                                    <li><strong>Discount:</strong> <span>&#8377;5.00</span></li>
                                    <li><strong>Shipping:</strong> <span>Free</span></li>
                                    <li><strong>Taxes:</strong> <span>&#8377;25.00</span></li>
                                    <li class="shop-cart-total"><strong>Total:</strong> <span>&#8377;4,520.00</span></li>
                                </ul>
                                <div class="text-end mt-40">
                                    <a href="#" class="theme-btn">Checkout Now<i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop cart end -->

    </main>


    <?php
    include_once('include/footer.php');
    ?>
    