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
                    <div class="about-content">
                       <?php
                            $contest_id = $_GET['contest_id']; 
                            $date = date("d-m-Y");
                            $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_type`, `contest_start_date`, `contest_end_date` `result_date`, `contest_terms`  FROM `contest_master` WHERE `contest_id` = $contest_id";
                            $res = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($res);   
                        ?>            
                        <div class="media-body">
                            <div class="about-text">
                                <h3><a href="#" style="color:red;"><?php echo $row['contest_name']; ?></a></h3>
                                <p><?php echo $row['about_contest']; ?></p>
                                <p><strong style="font-weight: 600; font-size: 16px;">CONTEST TYPE :</strong>&nbsp;<?php echo $row['contest_type']; ?></p>
                                <p><strong style="font-weight: 600; font-size: 16px;">CONTEST START DATE :</strong>&nbsp;<?php echo $row['contest_start_date']; ?></p>
                                <p><strong style="font-weight: 600; font-size: 16px;">CONTEST END DATE :</strong>&nbsp;<?php echo $row['contest_end_date']; ?></p>
                                <p><strong style="font-weight: 600; font-size: 16px;">RESULT DATE :</strong>&nbsp;<?php echo $row['result_date']; ?></p>
                            </div>  
                        </div>                                          
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                       <?php
                            $date = date('Y-m-d');
                            $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_start_date`, `contest_end_date` FROM `contest_master` WHERE `contest_id` = $contest_id";
                            $res = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($res)) 
                            {
                        ?>  
                        <div class="item">
                            <div class="about-image">
                                <img src="cp/<?php echo $row['contest_image']; ?>" alt="contest_image">
                            </div>  
                        </div>                                  
                        
                        <?php
                            }
                       ?>  
                        
                    </div>
                </div>
            </div><br/>
            <div class="row">
                <?php
                    $contest_id = $_GET['contest_id']; 
                    $date = date('Y-m-d');
                    $sql = "SELECT `contest_id`, `contest_name`, `about_contest`, `contest_image`, `contest_type`, `contest_start_date`, `contest_end_date` `result_date`, `contest_terms`  FROM `contest_master` WHERE `contest_id` = $contest_id";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($res)
                    
                ?>
                <div class="media-body">
                    <h4 class="media-heading">
                        <p  style="font-size: 15px;font-weight: 200;">
                            <strong style="font-weight: 600; font-size: 16px;">TERMS OF THE CONTEST :</strong>&nbsp;<font style="font-size: 15px;font-weight: 200;"><?php echo $row['contest_terms']; ?><br/><br/>
                        </p>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Single Photo Contest End Here -->

<?php include 'include/footer.php'; ?>