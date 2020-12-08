<?php
session_start();

if(isset($_SESSION['user'])) {
	header("location: dashboard.php");
	exit;
}

include "includes/dbconfig.php";
include("class.phpmailer.php");
include("class.smtp.php");
$error = '';
if(isset($_POST['login'])) {
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	
	$qry = mysqli_query($conn, "SELECT `user_id`, `user_fname`, `user_lname`, `user_dob`, `section_id`, `desig_id`, `user_login`, `user_paswrd`, `user_reports_to`, `user_is_active`, `user_per_email` FROM `user_master` WHERE `user_login` = '$uname' AND `user_paswrd` = '$pass'");
	
	if ($qry) {
		$row = mysqli_fetch_assoc($qry);
		$num = mysqli_num_rows($qry);
		if($num == 1 && $row['user_paswrd'] == $pass) {
			if($row['user_is_active'] == 1) {
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_fname'] = $row['user_fname'];
				$_SESSION['user_lname'] = $row['user_lname'];
				$_SESSION['user_dob'] = $row['user_dob'];

				$d1 = strtotime(date('Y-m-d'));
				$d2 = strtotime($row['user_dob']);
				$diff = abs($d1 - $d2);
				$_SESSION['years'] = round(($diff / (365*60*60*24)), 0);
				
				$_SESSION['section_id'] = $row['section_id'];
				$_SESSION['desig_id'] = $row['desig_id'];
				$_SESSION['user'] = $row['user_login'];
				$_SESSION['user_reports_to'] = $row['user_reports_to'];
				$_SESSION['user_active'] = $row['user_is_active'];
				$_SESSION['user_email'] = $row['user_per_email'];
				header("location: dashboard.php");
				/* script for remember me start */
				if(!userty($_POST["remember"])) {
					setcookie("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
					setcookie("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
				} else {
					if(isset($_COOKIE["username"])) {
						setcookie("username","");
					}
					if(isset($_COOKIE["password"])) {
						setcookie("password","");
					}
				}
			} else {
				$error = "You have not permission to access...Contact to administrator";
			}
		} else {
			$error = "<b>Wrong login credentials</b>...please try again";
		}
	} else {
		$error = "Please contact to administrator";
	}
}
if (isset($_POST['btn_signup'])) {

	$exp_date = explode('/', $_POST['ct_dob']);
	$imp_date = implode('-', array_reverse($exp_date));
	$date = date('Y-m-d');

	$imgstr = 'img/dob_proof_imgae/'.$_FILES['ct_dob_prof']['name'];
	$state = explode('_', $_POST['ct_state']);
	$statename = $state[1];
	$ct_address = addslashes($_POST['ct_address']);
	$school = addslashes($_POST['ct_school']);

	$schstate = explode('_', $_POST['ct_school_state']);
	$schstatename = $state[1];

	$check_sql = "SELECT `ct_first_name`, `ct_last_name`, `ct_phone`, `ct_status` FROM `contestant_master` WHERE `ct_first_name` = '$_POST[ct_fname]' AND `ct_last_name` = '$_POST[ct_lname]' AND  (`ct_email_id` = '$_POST[ct_email]' AND  `ct_phone` = '$_POST[ct_mob]') AND `ct_status` != 'Rejected'";
	
	$check_res = mysqli_query($conn, $check_sql);

	if (mysqli_num_rows($check_res) > 0) {
		$check_row = mysqli_fetch_assoc($check_res);
		$msg = "You are already exit. Your registration has been '".$check_row['ct_status']."'.";
	} else{

		$email = $_POST['ct_email'];
		$sql = "INSERT INTO `contestant_master`(`ct_first_name`, `ct_last_name`, `ct_dob`, `ct_address`, `ct_city`, `ct_pin`, `ct_state`,	 `ct_country`, `ct_dob_proof`, `ct_email_id`, `ct_phone`, `ct_father_name`, `ct_mother_name`, `ct_school_name`, `ct_school_city`, `ct_school_state`, `ct_registration_date`, `ct_birth_proof_type`) VALUES ('$_POST[ct_fname]', '$_POST[ct_lname]', '$imp_date', '$ct_address', '$_POST[ct_city]', '$_POST[ct_pin_no]', '$statename', '$_POST[ct_country]', '$imgstr', '$email', '$_POST[ct_mob]', '$_POST[ct_fatherName]', '$_POST[ct_motherName]', '$school', '$_POST[ct_school_city]', '$schstatename', '$date', '$_POST[dob_prof_type]')";
		if (move_uploaded_file($_FILES['ct_dob_prof']['tmp_name'], $imgstr))
		{
			if (mysqli_query($conn, $sql)) {
				
				$mail_body = '<body><b>Hello!</b><br><br><p>We have received your registration request.</p><p>TheStarKidzTeam thank you for your interest and taking the next step to motivate children in developing their creative side.</p><p>The Creative Counsellor at The StarKidz Lounge will confirm if the registration is complete in all respects.Your username and login ID will be shared on the email ID provided by you during registration.</p><br><br>Wishing Joy&Creativity,<br><br>The Star Kidz Team</body>';

				$mail = new PHPMailer(); 
				$mail->IsSMTP();
				$mail->Host = "host.rezolpos.com"; 
				$mail->Port = 465;
				$mail->SMTPAuth = true;    
				$mail->Username = "ashutosh@rezolpos.com"; 
				$mail->Password = "bgt56yhnmj@";   
				$mail->SMTPSecure = 'ssl';
				$mail->From = "support@thestarkidz.com";
				$mail->FromName = "Support - The Star Kidz";
				//$mail->Sender = "administrator@score.solutionzconsulting.com";
				$mail->IsHTML(true);
				$mail->Subject = "The Star Kidz acknowledgement - Registration Request Received";
				$mail->Body    = $mail_body; 
				$mail->AddAddress($email);
				// $mail->AddAddress('munishmalik292@gmail.com');
				if(!$mail->send()) {
					$mail_msg = 'Mail could not be sent.';
				} else {
					$mail_msg = 'Mail has been sent';
				}
				$msg = "Thank you for registring with The Star Kidz. Our verification team will check the details and successful registrants will be sent the login details by email within the next 2 days.";
			} else{
				$msg = "Your registration has failed. Please try again!";
			}
		}
	}

} 
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<meta name="description" content="Photo Competition" />
		<meta name="author" content="Melon" />
		<meta name="keyword" content="Photo" />
		<link rel="shortcut icon" href="img/mob-logo.jpg">
		<!-- Icons-->
		<link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" />
		<link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		<link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" />
		<!-- Main styles for this application-->
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/custom.css" rel="stylesheet" />
		<link href="css/header.css" rel="stylesheet" />
		<link href="plugin/jquery-confirm/css/jquery-confirm.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
		<title>The Star Kids</title>
		<style type="text/css">
			.form-control[readonly] {
				background: #fff;
			}
			
		</style>
	</head>
	<body>
		<div class="header-top-area hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fa fa-phone"></i><a href="tel:+91-9873383242">+91-9873383242</a></li>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:contact@thestarkidz.com">contact@thestarkidz.com</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="right-side-tool text-right">
                            <div class="header-top-right">
                                <ul>
                                    <li><a href="http://fb.me/thestarkidzhome" target="blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://m.me/thestarkidzhome" target="blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle-area" id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area pt-0">
                            <a href="http://thestarkidz.com/index.php"><img src="../demo/images/logo.jpg" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="main-menu">
                            <nav>
                                <ul class="text-right">
                                    <li><a href="http://thestarkidz.com/index.php">Home</a></li>
                                     <li><a href="http://thestarkidz.com/about.php">About</i></a></li> 
                                        <li><a href="#">Contest<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="http://thestarkidz.com/coloursmith.php">THE COLOURSMITH</a></li>
                                               <!-- <li><a href="movesmith.php">THE MOVESMITH</a></li>-->
                                                <li><a href="http://thestarkidz.com/notesmith.php">THE NOTESMITH</a></li>
                                                <li><a href="http://thestarkidz.com/wordsmith.php">THE WORDSMITH</a></li>
                                                <li><a href="http://thestarkidz.com/craftsmith.php">THE CRAFTSMITH</a></li>
                                            </ul>
                                        </li>                                     <li><a href="http://thestarkidz.com/gallery.php">Gallery</i></a></li> 
                                     <li><a href="http://thestarkidz.com/about.php">Sponsorship</i></a></li> 
                                        <li><a href="#">Contact Us<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="http://thestarkidz.com/feedback.php">Feedback</a></li>
                                                <li><a href="http://thestarkidz.com/join_team.php">Join Our Team</a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="cart-area sign-in">
                            <a href="#">Register Now <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="app flex-row align-items-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7" style="padding-top: 100px;">
						<div class="card-group">
							<div class="card p-4">
								<div class="card-body">
									<div class="text-danger"><?php echo $error; ?></div>
									<div class="login-details">
										<form action="" method="post">
											<h1 class="mb-0">My Star Kidz Lounge</h1>
											<p class="text-muted">Sign In to your account</p>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="icon-user"></i>
													</span>
												</div>
												<input type="text" class="form-control" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
											</div>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="icon-lock"></i>
													</span>
												</div>
												<input type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
											</div>
											<div class="input-group mb-3">
											    <div class="form-check form-check-inline mr-1">
													<input class="form-check-input" type="checkbox" name="remember" <?php if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])) { ?> checked <?php } ?>>
													<label class="form-check-label">Remember me</label>
												</div>
											</div>
											<div class="row">
												<div class="col-3">
													<button type="submit" class="btn btn-primary px-4" name="login">Login</button>
												</div>
												<div class="col-4">
													<button type="button" class="btn btn-primary px-4" id="btn-signup">Signup</button>
												</div>
												<div class="col-5 text-right">
													<button type="button" class="btn btn-link-primary px-0" id="rec-password">Forgot password?</button>
												</div>
											</div>
										</form>
										<!-- <div class="pow-logo text-right mt-0">
								        	<span>Powered By</span>
								        	<a href="http://www.solutionzconsulting.com/" target="_blank" class="img-responsive btn-link-primary">SCPL</a>
								      	</div> -->
									</div>
									<div class="password-recover">
										<h1>Password Assistance</h1>
										<p class="text-muted">Enter the name and email address associated with your account and click Submit.</p>
										<div class="row">
											<div class="col-6">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="icon-user"></i>
														</span>
													</div>
													<input type="text" class="form-control" name="f_name" placeholder="First Name" id="f_name">
												</div>
											</div>
											<div class="col-6">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="icon-user"></i>
														</span>
													</div>
													<input type="text" class="form-control" name="l_nmae" placeholder="Last Name" id="l_nmae">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="icon-envelope-open"></i>
														</span>
													</div>
													<input type="text" class="form-control" name="email" placeholder="Email" id="email">
												</div>
											</div>
										</div>
										<div class="row">
											<!-- <div class="col-4">
												<button type="button" class="btn btn-primary px-4" name="btn_login" id="btn-login">Login</button>
											</div> -->
											<div class="col-4">
												<button type="button" class="btn btn-primary px-4" name="btn_submit" id="btn-submit" onclick="forget_Password(document.getElementById('f_name').value, document.getElementById('l_nmae').value, document.getElementById('email').value)">Submit</button>
											</div>
											<div class="col-3">
												<button type="button" class="btn btn-primary px-4" id="btn-cancel">Cancel</button>
											</div>
										</div>
									</div>
									<div class="sing-up">
										<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
											<h2 class="mb-0">The Star Kidz Registration</h2>
											<p class="text-muted">Signup your new account</p>
											<div class="form-group row">
												<div class="col-6">
													<input type="text" class="form-control" name="ct_fname" id="fname" placeholder="Child's First Name" required maxlength="50" onblur="checkletters(this.value, 'fname')">
												</div>
												<div class="col-6">
													<input type="text" class="form-control" name="ct_lname" id="lname" placeholder="Child's Last Name" required maxlength="50" onblur="checkletters(this.value, 'lname')">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-6">
													<input type="text" class="form-control" name="ct_fatherName" id="fathername" placeholder="Father's Name" maxlength="100" onblur="checkletters(this.value, 'fathername')" required>
												</div>
												<div class="col-6">
													<input type="text" class="form-control" name="ct_motherName" id="mothername" placeholder="Mother's Name" maxlength="100" onblur="checkletters(this.value, 'mothername')" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-6">
													<input type="text" class="form-control date" name="ct_dob" placeholder="Date of Birth" maxlength="10" required readonly>
												</div>
												<div class="col-6">
													<input type="text" class="form-control" name="ct_mob" id="mobNo" onblur="checknumber(this.value,'mobNo')" placeholder="Mobile No" maxlength="10" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-6">
													<select name="dob_prof_type" class="form-control">
														<option value="">Select Birth Proof Document Type</option>
														<?php  
															$res = mysqli_query($conn, "SELECT `proof` FROM `proof_master`");
															while ($row = mysqli_fetch_assoc($res)) 
															{
																echo '<option value="'.$row['proof'].'">'.$row['proof'].'</option>';
															}
														?>
													</select>
												</div>
												<div class="col-6">
													<input type="file" class="form-control" id="ct_dob_prof" name="ct_dob_prof" required>
												</div>
												<div class="col-12">
													<span>Upload document in PDF or JPG format for proof of date of birth. (File size should be less than 300 KB.)</span>
												</div>
											</div>
											
											<div class="form-group row">
												<div class="col-12">
													<textarea type="text" class="form-control" name="ct_address" placeholder="Address" maxlength="255" required></textarea> 
												</div>
											</div>
											<div class="form-group row">
												<div class="col-6">
													<select class="form-control" name="ct_state" onchange="selectCity(this.value, 'city')">
														<option value="">Select State</option>
														<?php  
															$sql = "SELECT `state_id`, `state_name` FROM `state_master` ORDER BY `state_name`";
															$res = mysqli_query($conn, $sql);
															while ($row = mysqli_fetch_assoc($res)) 
															{
																echo '<option value="'.$row['state_id'].'_'.$row['state_name'].'">'.$row['state_name'].'</option>';
															}
														?>
													</select>
												</div>
												<div class="col-6">
													<input type="text" class="form-control" name="ct_city" placeholder="Select / Enter District Name" list="city" maxlength="50" required>
													<datalist id="city"></datalist>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-6">
													<input type="text" class="form-control" name="ct_pin_no" id="pin" placeholder="Pin Code" onblur="checknumber(this.value, 'pin')" maxlength="6" required>
												</div>
												<div class="col-6">
													<input type="text" class="form-control" name="ct_country" placeholder="Country Name" value="India" maxlength="30" required>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-12">
													<input type="email" class="form-control" name="ct_email" placeholder="Email" required maxlength="100" required>
												</div>
											</div>

											<div class="form-group row">
												<div class="col-12">
													<input type="text" class="form-control" name="ct_school" placeholder="School or College Name" maxlength="100" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-6">
													<select class="form-control" name="ct_school_state" onchange="selectCity(this.value, 'school_city')">
														<option value="">Select School's State</option>
														<?php  
															$sql = "SELECT `state_id`, `state_name` FROM `state_master` ORDER BY `state_name`";
															$res = mysqli_query($conn, $sql);
															while ($row = mysqli_fetch_assoc($res)) 
															{
																echo '<option value="'.$row['state_id'].'_'.$row['state_name'].'">'.$row['state_name'].'</option>';
															}
														?>
													</select>
												</div>
												<div class="col-6">
													<input type="text" class="form-control" name="ct_school_city" placeholder=" Select / Enter School's District Name" list="school_city" maxlength="50" required>
													<datalist id="school_city"></datalist>
												</div>
											</div>
											<div class="form-group row">	
												<div class="col-4">
													<button type="submit" class="btn btn-primary px-4" name="btn_signup" value="Contest Registration">Signup</button>
												</div>
												<!-- <div class="col-4">
													<button type="button" class="btn btn-primary px-4" name="btn_login" id="btn-login">Login</button>
												</div> -->
											</div>
										</form>
									</div>
									<div class="submit-msg" >
										<div class="card-body">
											<div class="text-center">
												<h2 class="mb-2">The Star Kidz Registration</h2>
												<h6 class="text-muted mb-2 msg"><?php if(isset($msg)) { echo $msg; } ?></h6>
												<a href="index.php" class="btn btn-login btn-primary">Ok</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap and necessary plugins-->
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="node_modules/pace-progress/pace.min.js"></script>
		<script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
		<script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
		<script src="plugin/jquery-confirm/js/jquery-confirm.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<script src="plugin/toast/js/jquery.toast.js"></script>
		<script src="js/validation.js"></script>
		<script type="text/javascript">
			function forget_Password(fname, lname, email) {
				$.ajax({
					url: 'score_data_ws.php?act=getRecEmail&email='+email+'&fname='+fname+'&lname='+lname,
					success : function(data) {
						console.log(data);
						var bns = JSON.parse(data);
						$.alert(bns.msg);
						/*if (bns.sts == 'pass') {
							window.setTimeout(function(){window.location.href = "index.php";}, 3000);
						} else if (bns.sts == 'fail') {
							$.alert(bns.msg);
						}*/
					}
				});
			}
      	</script>
      	<?php  
			if(isset($msg)) {
		?>
			<script type="text/javascript">
			 	$(".login-details").hide();
			    $(".password-recover").hide();
			    $(".sing-up").hide();
			    $(".submit-msg").show();
			    // $(".msg").html();
			</script>
		<?php
			}
		?>
	</body>
</html>

<script type="text/javascript">
	 $(window).on('scroll', function() {
        if ($(window).scrollTop() > 100) {
            $('#sticky').addClass('stick');
        } else {
            $('#sticky').removeClass('stick');
        }

    });
</script>