<?php include 'include/dbconfig.php'; ?>
<?php 

    include("header.php");

?>
<div class="inner-page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-title">
                            <h2>Cart</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home /</a> Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->

        <!-- Cart Page Start Here -->
        <div class="shipping-area section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mr-b30">
                        <div class="button-area row">                        
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Cart</h3>
                            </div>
                                                     
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-list">
                            <table>
                                <tr>
                                    <td><i class="fa fa-times"></i></td>
                                    <td><img src="images/cart/1.jpg" alt=""/></td>
                                    <td>
                                        <div class="des-pro">
                                            <h4>Camera Lence</h4><p>Shooter</p>
                                        </div>
                                    </td>
                                    <td><strong>$99</strong></td>
                                    <td>
                                        <div class="order-pro order1">
                                            <input type="number" value="01" />
                                           
                                        </div>
                                    </td>
                                    <td><span class="prize">$99.00</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><i class="fa fa-times"></i></td>
                                    <td><img src="images/cart/3.jpg" alt=""/></td>
                                    <td>
                                        <div class="des-pro">
                                            <h4>Camera Lence</h4><p>Shooter</p>
                                        </div>
                                    </td>
                                    <td><strong>$99</strong></td>
                                    <td>
                                        <div class="order-pro order1">
                                            <input type="number" value="01" />
                                           
                                        </div>
                                    </td>
                                    <td><span class="prize">$99.00</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><i class="fa fa-times"></i></td>
                                    <td><img src="images/cart/2.jpg" alt=""/></td>
                                    <td>
                                        <div class="des-pro">
                                            <h4>Camera Lence</h4><p>Shooter</p>
                                        </div>
                                    </td>
                                    <td><strong>$99</strong></td>
                                    <td>
                                        <div class="order-pro order1">
                                            <input type="number" value="01" />
                                           
                                        </div>
                                    </td>
                                    <td><span class="prize">$99.00</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="order-list">
                            <h3>Have A Coupon Code?</h3>
                            <div class="coupon-fields">

								<input name="coupon_code" class="input-text required" id="coupon_code" value="" placeholder="Coupon code" type="text">
								<input class="apply-coupon button button-default button-default-size button" name="apply_coupon" value="Apply Coupon" type="submit">

                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6 col-md-12">
                        <div class="order-list">
                            <h3>Your Order</h3>
                            <table>
                                <tr>
                                    <td><b>Product</b></td>
                                    <td><b>Total</b></td>
                                </tr>
                                <tr class="row-bold">
                                    <td>Subtotal</td>
                                    <td>$ 158.00</td>
                                </tr>
                                <tr class="row-bold">
                                    <td>Total</td>
                                    <td>$ 158.00</td>
                                </tr>
                            </table>
                            <div class="next-step">
                        		<a href="checkout.html"><button class="radius-30">Proceeed to Checkout</button></a>
                    		</div>
                        </div>
                    </div>                           
                </div>
            </div> 
        </div>
     
        <!-- Cart Page End Here -->
        


<?php include("footer.php")  ?>