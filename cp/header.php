<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['user'])) {
	header("location: index.php");
	exit;
}

include "includes/dbconfig.php";

$user_login = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Star Kids</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="Photo Competition">
		<meta name="author" content="Bhola">
		<meta name="keyword" content="Photo,Dashboard">
		<link rel="shortcut icon" href="img/mob-logo.jpg">
		<!-- Icons-->
		<link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
		<link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
		<!-- Main styles for this application-->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<link href="plugin/select2/css/select2.min.css" rel="stylesheet">
		<link rel="stylesheet" href="plugin/fullcalendar/css/fullcalendar.min.css">
    	<link rel="stylesheet" href="plugin/fullcalendar/css/fullcalendar.print.min.css" media='print'>
    	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    	<link href="plugin/jquery-validation/css/validation.css" rel="stylesheet">
    	<link href="plugin/editable-select/dist/jquery-editable-select.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="plugin/toast/css/jquery.toast.css">
    	<link href="plugin/jquery-confirm/css/jquery-confirm.css" rel="stylesheet">
    	<!-- fancybox CSS library -->
    	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
		<link rel="stylesheet" type="text/css" href="plugin/fancybox/css/jquery.fancybox.css">
		<link rel="stylesheet" href="plugin/clockpicker/css/jquery-clockpicker.min.css">
	</head>
	<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
		<header class="app-header navbar">
			<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			/*$cpqry = mysqli_query($conn, "SELECT `co_big_logo` FROM `company_master` WHERE (`co_big_logo` != '' AND `co_big_logo` IS NOT NULL)");
			if (mysqli_num_rows($cpqry) > 0) {
				$cprow = mysqli_fetch_assoc($cpqry);
				?>
				<a class="navbar-brand" href="#">
					<img class="navbar-brand-full" src="documents/<?php echo $co_id; ?>/<?php echo $cprow['co_big_logo']; ?>" width="89" height="25" alt="SCPL Logo">
					<img class="navbar-brand-minimized" src="documents/<?php echo $co_id; ?>/<?php echo $cprow['co_big_logo']; ?>" width="30" height="30" alt="SCPL Logo">
				</a>
				<?php
			} else {*/
				?>
				<a class="navbar-brand" href="#">
					<img class="navbar-brand-full" src="img/logo.jpg" width="89" height="25" alt="Logo">
					<img class="navbar-brand-minimized" src="img/mob-logo.jpg" width="30" height="30" alt="Logo">
				</a>
				<?php
			// }
			?>
			<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- <ul class="nav navbar-nav d-md-down-none">
				<li class="nav-item px-3">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item px-3">
					<a class="nav-link" href="#">Users</a>
				</li>
				<li class="nav-item px-3">
					<a class="nav-link" href="#">Settings</a>
				</li>
			</ul> -->
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<?php
							$qry = mysqli_query($conn, "SELECT `user_fname`, `user_lname`, `user_pic` FROM `user_master` WHERE `user_login` = '$user_login'");
							$row = mysqli_fetch_assoc($qry);
							if ($row['user_pic'] != '') {
								$src = $row['user_pic'];
							} else{
								$src = "img/avatars/user.png";
							}
							echo '<img class="img-avatar" src="'.$src.'" alt="employee pic">&nbsp;<strong>'.$row['user_fname'].'&nbsp;'.$row['user_lname'].'&nbsp;&nbsp;&nbsp;&nbsp;</strong>';
						?>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!-- <div class="dropdown-header text-center">
							<strong><?php echo $_SESSION['user_fname']; ?></strong>
						</div> -->
						<?php
							if ($_SESSION['desig_id'] == 1) {
								$acc_qry = mysqli_query($conn, "SELECT `profile_function`, `profile_function_filename`, `profile_function_font_icon` FROM `profile_master` WHERE `profile_function_is_active` = '1' ORDER BY `profile_function_order_no`");
							
							} else{
								$acc_qry = mysqli_query($conn, "SELECT `profile_function`, `profile_function_filename`, `profile_function_font_icon` FROM `profile_master` WHERE `profile_function_is_active` = '1' AND `profile_type` = 'Admin' ORDER BY `profile_function_order_no`");	
							}
							
							while ($acc_row = mysqli_fetch_assoc($acc_qry)) {
						?>

							<a class="dropdown-item" href="<?php echo $acc_row['profile_function_filename']; ?>">
								<?php echo $acc_row['profile_function_font_icon'].' '.$acc_row['profile_function']; ?>
							</a>
						<?php
						}
						?>
						<a class="dropdown-item" href="logout.php">
							<i class="fa fa-lock"></i> Logout
						</a>
					</div>
				</li>
			</ul>
			<!-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
				<span class="navbar-toggler-icon"></span>
			</button> -->
		</header>
		<div class="app-body">
			<div class="sidebar">
				<?php include("sidebar.php"); ?>
			</div>
			<main class="main">
				<!-- Breadcrumb-->
				<!-- <ol class="breadcrumb">
					<?php //include("breadcrumb.php"); ?>
				</ol> -->
				<div class="container-fluid">
					<div class="animated fadeIn">
					