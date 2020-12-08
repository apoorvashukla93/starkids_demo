<title>Star Kids | Feedback</title>
<?php 
    session_start();
    //include 'include/dbconfig.php';
    include 'include/header.php'; 
    
    require_once 'Captcha.php';
    $captcha = new Captcha();
?>

<div class="inner-page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="header-page-title">
                    <!-- <h2>Contact Page</h2> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="header-page-locator">
                    <ul>
                        <!-- <li><a href="index.php">Home /</a> Contact Page</li> -->
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
                            <p>We are always open to suggestions and feedback and love to hear from our participants …</p>
                        </div>
                    </div>
                </div>

                <div class="row contact-box">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-contact-box">
                            <ul>
                                <li><span>
                                    <!-- <i class="fa fa-phone"></i> -->
                                    <img src="images/icons_images/white icons/white/contact.png" alt="baby" style="margin-top:5px;background-color:#d32f2f;border-radius:20px;">
                                </span>&nbsp;&nbsp;<a href="tel:+91-9873383242"> +91-9873383242</a></li>
                                <li><span>
                                    <!-- <i class="fa fa-envelope-o"></i> -->
                                    <img src="images/icons_images/white icons/white/contactmail.png" alt="baby" style="margin-top:5px;background-color:#d32f2f;border-radius:20px;">
                                </span>&nbsp;&nbsp;<a href="mailto:Contact@thestarkidz.com">contact@thestarkidz.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="contact-section">
                    <div class="leave-comments-area">
                        <h4>Contact Us</h4>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <?php if(isset($success_message)) { ?>
                                <div class="text-success"><?php echo $success_message; ?></div>
                                <?php } ?>
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
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <span id="error-captcha" class="text-danger"><?php if(isset($error_message)) { echo $error_message; } ?></span>
                                            <input name="captcha_code" type="text" class="form-control" style="background:#dddddd url(captchaImageSource.php) repeat-y left center;padding-left: 85px;" placeholder="Captcha Code" required>
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
<?php include 'include/footer2.php';?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

    <?php  
        if (isset($_SESSION['sts']) && isset($_SESSION['msg'])) 
        {
    ?>
            swal({
              title: '<?php echo $_SESSION['title'];?>',
              text: '<?php echo $_SESSION['msg'];?>',
              icon: '<?php echo strtolower($_SESSION['sts']);?>',
            });

    <?php    
        } 
        unset($_SESSION['sts']);
        unset($_SESSION['title']);
        unset($_SESSION['msg']);
        
    ?>

</script>