<?php
include_once('include/header.php');
?>


<main class="main">



    <!-- login area -->
    <div class="login-area pt-30 pb-50" style="background-color: #cbdcf6b0;">
        <div class="container">
            <div class="col-md-7 col-lg-5 mx-auto">
                <div class="login-form">
                    <div class="login-header">
                        <h3>Login</h3>
                    </div>
                    <form action="#">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" >
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>
                            <!-- <a href="forgot-password.php" class="forgot-pass">Forgot Password?</a> -->
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="theme-btn theme-btn2"><i class="far fa-sign-in"></i> Login</button>
                        </div>
                    </form>
                    <div class="login-footer">
                        <p>Don't have an account? <a href="register.php">Register.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->

</main>


<?php
include_once('include/footer.php');
?>