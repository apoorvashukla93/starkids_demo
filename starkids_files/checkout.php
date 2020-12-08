<?php include 'include/dbconfig.php'; ?>
<?php 

    include("header.php");

?>
<div class="inner-page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-title">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home /</a> Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->

        <!-- Cart Page Start Here -->
        <div class="shipping-area section pt-90 pb-100">
            <div class="container">
                <div class="form-area">
                    <h3>Billing Information</h3>
                    <form data-toggle="validator">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>First Name *</label>
                                    <input type="text" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Last Name *</label>
                                    <input type="text" required>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Company Name</label>
                                    <input type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>E-mail Address *</label>
                                    <input type="email" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Phone *</label>
                                    <input type="number" required>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Country</label>
                                    <select>
                                        <option>Select Your Country</option>
                                        <option>Bangladesh</option>
                                        <option>China</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Address</label>
                                    <input type="text">
                                    <input type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Town / City</label>
                                    <input type="text">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>District *</label>
                                    <select required>
                                        <option>Select Your District</option>
                                        <option>Dhaka</option>
                                        <option>Khulna</option>
                                        <option>Bagerhat</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label>Postcode / ZIP</label>
                                    <input type="text">
                                </div>
                            </div>
                        </fieldset>  
                    </form>                                  
                </div>
                <div style="clear: both"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Payment</h3> 
                        <div class="accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="card-title">
                                        <button class="accordion-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                    Direct Bank Tranfeer
                                                </label>
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="card-title">
                                        <button class="accordion-toggle collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                    Check Payments
                                                </label>
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="card-title">
                                        <button class="accordion-toggle collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                    Cash On Delivery
                                                </label>
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="collapseThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                    </div>
                                </div>
                            </div>
                            <div class="next-step text-center">
                                <button>Place Your Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <!-- Cart Page End Here -->
        



<?php include("footer.php")  ?>