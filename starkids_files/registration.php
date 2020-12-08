<?php include 'include/dbconfig.php'; ?>
<?php 

    include("header.php");

?>
<div class="inner-page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-title">
                            <h2>Login and Registration</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home /</a> Login and Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->

        <!-- Login and Registration start Here -->
        <div class="loginregistration-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-30">
                        <div class="login-area">
                            <h2>Login</h2>
                            <form>
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>User Name *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="connected-area">
                                                <p>Connect With:</p>
                                                <div class="social-media">
                                                    <ul>
                                                        <li><img src="images/facebook.png" alt=""></li>
                                                        <li><img src="images/google.png" alt=""></li>
                                                    </ul>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Remember me
                                                    </label>
                                                    <p><a href="#">Lost your password?</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Login</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="registration-area">
                            <h2>Registration</h2>
                            <form>
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>User Name *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label> Confirm Password</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label> E-mail</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Sign Up!</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login and Registration End Here -->



<?php include("footer.php")  ?>