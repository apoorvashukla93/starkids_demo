<?php include 'include/dbconfig.php'; ?>
<?php include 'include/header.php'; ?>
        <!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="images/slider/slide_2.jpg" alt="" title="#slider-direction-1" />
                    <img src="images/slider/slide_1.jpg" alt="" title="#slider-direction-2" />
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1"><span>Creative Expression</span>Is Every Child’s Birthright</h1>
                            <div class="title2">Give children the platform to express their creativity. </div>
                            <div class="slider-botton">
                                <ul>
                                    <li><a href="registration.html">Join Now <i class="fa fa-angle-right"></i></a></li>
                                    <li class="acitve"><a href="about.php">About Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1"><span>Multiple Contest</span>For every child to express their creative side</h1>
                            <div class="title2">Give children the platform to express their creativity. </div>
                            <div class="slider-botton">
                                <ul>
                                    <li class="acitve"><a href="about.php">Join Now<i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="contact.html">About Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here-->

       

        <!-- Single Photo Contest Start Here -->
        <div class="home-single-contest gray-bg pt-90 pb-90">
            <div class="home-single single-photo-contest-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="section-title">
                                <h2>Our Running <span>Contests</span></h2>
                               <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius.Photograhy HTML is very </p> -->
                            </div>                   
                            <div class="about-content">
                                <h2>Running Contests</h2>
                                <ul class="home-single-slide variation">
                                   <?php
                                        $date = date('Y-m-d');
                                        $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_start_date`, `contest_end_date` FROM `contest_master` WHERE `contest_status` = 'Created' AND `contest_start_date` <= '$date' AND `contest_end_date` >= '$date'";
                                        $res = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) 
                                        {
                                    ?>
                                    <li>
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="../cp/<?php echo $row['contest_image']; ?>" alt="contest_image">
                                                <!-- <div class="overley">
                                                    <h4><a href="#"><?php echo $row['contest_name']; ?></a></h4>
                                                </div> -->
                                            </div>
                                            <div class="about-text">
                                                <h3><a href="#"><?php echo $row['contest_name']; ?></a></h3>
                                                <p><?php echo $row['about_contest']; ?></p>
                                                   <!--  <div class="countdown-section">
                                                        <div class="row">
                                                            <div class="col-sm-12"><div class="CountDownTimer" data-date="<?php echo $row['contest_start_date']; ?> 00:00:00"></div></div>
                                                        </div>
                                                    </div> -->
                                                    <a href="#" style="margin:0px">Read More <i class="fa fa-angle-right"></i></a>
                                            </div>  
                                        </div>                                  
                                    </li>
                                    <?php
                                        }
                                   ?>  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Single Photo Contest End Here -->        
<?php include 'include/footer.php';?>