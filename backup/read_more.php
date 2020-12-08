<?php include 'include/dbconfig.php'; ?>
<?php include 'include/header.php'; ?>

<div class="inner-page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- <div class="header-page-title">
                    <h2 class="title1">About</h2>
                </div> -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="header-page-locator">
                    <!-- <ul>
                        <li><a href="index.html" class="title1">Home /</a> About</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Photo Contest Start Here -->
        <div class="home-single-contest gray-bg pt-90 pb-90">
            <div class="home-single single-photo-contest-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section-title" style="margin:0 auto;">
                                <h2>Running<span>Contests</span></h2>
                            </div>                  
                            <div class="about-content">
                                <!-- <h2 class="section-title">Running Contests</h2> -->
                                
                                   <?php
                                        $date = date('Y-m-d');
                                        $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_start_date`, `contest_end_date` FROM `contest_master` WHERE `contest_status` = 'Created' AND `contest_start_date` <= '$date' AND `contest_end_date` >= '$date'";
                                        $res = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) 
                                        {
                                    ?>
                                    
                                        <div class="item">
                                            <div class="about-text">
                                                <h3><a href="#" style="color:red;"><?php echo $row['contest_name']; ?></a></h3>
                                                <p><?php echo $row['about_contest']; ?></p>
                                            </div>  
                                        </div>                                  
                                    
                                    <?php
                                        }
                                   ?>  
                                <a href="#">
                                                <i class="fa fa-circle"></i>
                                                </a>&nbsp;&nbsp;Theme of the contest by age group<br/>                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Eligibility criterion<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Specification of the entries<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                </a>&nbsp;&nbsp;Last date of submission<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Result Date<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Awards<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Rules of the contest<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;How to apply for the contest<br/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">                   
                            <div class="about-content">
                                <!--<h2>Running Contests</h2>-->
                                
                                   <?php
                                        $date = date('Y-m-d');
                                        $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_start_date`, `contest_end_date` FROM `contest_master` WHERE `contest_status` = 'Created' AND `contest_start_date` <= '$date' AND `contest_end_date` >= '$date'";
                                        $res = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) 
                                        {
                                    ?>
                                    
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="cp/<?php echo $row['contest_image']; ?>" alt="contest_image">
                                                <!-- <div class="overley">
                                                    <h4><a href="#"><?php echo $row['contest_name']; ?></a></h4>
                                                </div> -->
                                            </div>  
                                        </div>                                  
                                    
                                    <?php
                                        }
                                   ?>  
                                
                            </div>
                        </div>
                    </div><br/><br/>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section-title">
                                <h2>Upcoming<span>Contests</span></h2>
                            </div>                   
                            <div class="about-content">
                            
                                   <?php
                                        $date = date('Y-m-d');
                                        $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_start_date`, `contest_end_date` FROM `contest_master` WHERE `contest_status` = 'Created' AND `contest_start_date` >= '$date' AND `contest_end_date` >= '$date'";
                                        $res = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) 
                                        {
                                    ?>
                                    
                                        <div class="item">
                                            <div class="about-text">
                                                <h3><a href="#" style="color:red;"><?php echo $row['contest_name']; ?></a></h3>
                                                <p><?php echo $row['about_contest']; ?></p>
                                            </div>  
                                        </div>                                  
                                    
                                    <?php
                                        }
                                   ?>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                </a>&nbsp;&nbsp;Theme of the contest by age group<br/>                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Eligibility criterion<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Specification of the entries<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                </a>&nbsp;&nbsp;Last date of submission<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Result Date<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Awards<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;Rules of the contest<br/>
                                                    <a href="#">
                                                <i class="fa fa-circle"></i>
                                                    </a>&nbsp;&nbsp;How to apply for the contest<br/>  
                                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="about-content">
                                <!--<h2>Running Contests</h2>-->
                                
                                   <?php
                                        $date = date('Y-m-d');
                                        $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_start_date`, `contest_end_date` FROM `contest_master` WHERE `contest_status` = 'Created' AND `contest_start_date` >= '$date' AND `contest_end_date` >= '$date'";
                                        $res = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($res)) 
                                        {
                                    ?>
                                    
                                        <div class="item">
                                            <div class="about-image">
                                                <img src="cp/<?php echo $row['contest_image']; ?>" alt="contest_image">
                                            </div>
                                            <!-- <div class="about-text">
                                                <h3><a href="#"><?php echo $row['contest_name']; ?></a></h3>
                                                <p><?php echo $row['about_contest']; ?></p>
                                                    <div class="countdown-section">
                                                        <div class="row">
                                                            <div class="col-sm-12"><div class="CountDownTimer" data-date="<?php echo $row['contest_start_date']; ?> 00:00:00"></div></div>
                                                        </div>
                                                    </div>
                                                    <a href="read_more.php" style="margin:0px">Click to Participate<i class="fa fa-angle-right"></i></a>
                                            </div> -->  
                                        </div>                                  
                                    
                                    <?php
                                        }
                                   ?>  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Photo Contest End Here -->

<?php include 'include/footer.php'; ?>