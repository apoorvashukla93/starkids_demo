<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['user'])) {
	header("location: index.php");
	exit;
}

include "includes/dbconfig.php";

$desig_id = $_SESSION['desig_id'];
if ($desig_id == 1) 
{
	$class = 'open';
}
else
{
	$class = '';
}
?>				
				<nav class="sidebar-nav">
					<ul class="nav">
						<?php
						$qry = mysqli_query($conn, "SELECT DISTINCT(`section_name`), `section_id` FROM `access_master` WHERE `desig_id` = '$desig_id' ORDER BY `section_order_no`");
						while ($row = mysqli_fetch_assoc($qry)) {
							$section_id = $row['section_id'];
							?>
							<li class="nav-item nav-dropdown <?php echo $class;?>">
								<a class="nav-link nav-dropdown-toggle" href="#">
									<i class="nav-icon icon-puzzle"></i> <?php echo $row['section_name']; ?>
								</a>
								<ul class="nav-dropdown-items">
									<?php
									$qry1 = mysqli_query($conn, "SELECT `module_name`, `module_filename` FROM `access_master` WHERE `section_id` = '$section_id' and `desig_id` = '$desig_id' ORDER BY `module_order_no`");
									while ($row1 = mysqli_fetch_assoc($qry1)) {
										?>
										<li class="nav-item">
											<a class="nav-link pl-4-5" href="<?php echo $row1['module_filename']; ?>">
												<i class="nav-icon icon-energy"></i> <?php echo $row1['module_name']; ?>
											</a>
										</li>
										<?php
									}
									?>
								</ul>
							</li>
							<?php
						}
						?>
					</ul>
				</nav>
				<button class="sidebar-minimizer brand-minimizer" type="button"></button>
