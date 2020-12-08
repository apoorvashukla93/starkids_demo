<?php include 'include/dbconfig.php'; ?>
<?php include 'include/header.php'; ?>
<div class="inner-page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-title">
                            <h2>Contact Page</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.php">Home /</a> Contact Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->

        <!-- Contact Us page Start Here -->
        <div class="contact-us-page-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-us-page">
                            <h2>Contact Information</h2>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>

                <div class="row contact-box">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-contact-box">
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i></span> 47/2,1111 Dr. Frederik-Philips, Suite 400 St.Laurent, QC,Canada, H4M 2X6</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-contact-box">
                            <ul>
                                <li><span><i class="fa fa-phone"></i></span><a href="tel:+985-2356-14566"> +985-2356-14566</a></li>
                                <li><span><i class="fa fa-envelope-o"></i></span><a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="single-contact-box">
                            <ul>
                                <li><span><i class="fa fa-fax"></i></span><a href="tel:+985-2356-14566"> +985-2356-14566</a></li>
                                <li><span><i class="fa fa-fax"></i></span><a href="tel:+985-2356-14566"> +985-2356-14566</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="contact-section">
                    <div class="leave-comments-area">
                        <h4>Contact Us</h4>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Name*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group"> 
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Email*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="phone" id="phone" type="text" class="form-control" placeholder="Phone*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group"> 
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject*" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comment" id="comment" cols="40" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn-send" name="Submit" type="submit">Send Message <i class="fa fa-angle-right"></i> </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us page end Here -->
<?php include 'include/footer.php';?>