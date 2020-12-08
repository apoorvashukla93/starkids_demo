<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['user'])) {
	header("location: index.php");
	exit;
}

include "includes/dbconfig.php";	
include("includes/header.php");
?>
<style type="text/css">
	.bg-color:hover{background: #d32f2f;color: #fff;}
	.activecolor{background: #d32f2f;color: #fff;}
	.pointer{cursor: pointer;}
	.pad{padding: 10px;}
</style>
<div class="card">
	<div class="card-header">
		Help
		<div class="card-header-actions card-header-btn">
			<a href="help_dashboard.php" class="btn btn-primary"></i> Back to Help Dashboard</a>
		</div>
	</div>
	<div class="card-body">
		<div class="col-10 pad pointer addclass1 bg-color" data-toggle="collapse" data-target="#demo1" onclick="addclassfunction('1')">
			<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;How do I participate in the contest?</h6>
		</div>
		<div id="demo1" class="collapse pad col-10 text-justify">

            <p>It is very simple, just click on “Sign In” on the top left hand side on the site and follow the following steps –<p> 
			<strong>Step 1:</strong>&nbsp;&nbsp;See the contests applicable for your child’s age group<br>
			<strong>Step 2:</strong>&nbsp;&nbsp;Let the child work on the entry<br>
			<strong>Step 3:</strong>&nbsp;&nbsp;Take a short video of the child working on the entry<br>
			<strong>Step 4:</strong>&nbsp;&nbsp;Take a picture of child’s work<br>
			<strong>Step 5:</strong>&nbsp;&nbsp;Login to www.thestarkidz.com<br>
			<strong>Step 6:</strong>&nbsp;&nbsp;Select the contest<br>
			<strong>Step 7:</strong>&nbsp;&nbsp;Submit your entry !
		</div>

		<div class="col-10 pad pointer addclass2 bg-color" data-toggle="collapse" data-target="#demo2" onclick="addclassfunction('2')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;What if I forget my login details?</h6>
		</div>
		<div id="demo2" class="collapse pad col-10 text-justify">
			<p>Click on “Username & Forgot Password”, fill up the details and username with password will be mailed to the registered email ID.</p>
		</div>

		<div class="col-10 pad pointer addclass3 bg-color" data-toggle="collapse" data-target="#demo3" onclick="addclassfunction('3')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;How can I change my password?</h6>
		</div>
		<div id="demo3" class="collapse pad col-10 text-justify">
			<p>Password can be changed from “Manage Profile” option by clicking on your username in top Right-Hand-Side of the screen at My StarKidz Lounge.</p>
		</div>

		<div class="col-10 pad pointer addclass4 bg-color" data-toggle="collapse" data-target="#demo4" onclick="addclassfunction('4')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;Can I view my past performances at a place?</h6>
		</div>
		<div id="demo4" class="collapse pad col-10 text-justify">
			<p>It is very simple, just click on “My Old Contests” on the top left hand side.</p>
		</div>

		<div class="col-10 pad pointer addclass5 bg-color" data-toggle="collapse" data-target="#demo5" onclick="addclassfunction('5')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;How will I get to know about the upcoming contests?</h6>
		</div>
		<div id="demo5" class="collapse pad col-10 text-justify">
			<p>Upcoming contests can be viewed on the Home Page of the site.</p>
		</div>

		<div class="col-10 pad pointer addclass6 bg-color" data-toggle="collapse" data-target="#demo6" onclick="addclassfunction('6')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;How can I find about my billing details?</h6>
		</div>
		<div id="demo6" class="collapse pad col-10 text-justify">
			<p>You can view your billing details from “Billing & Payment” option by clicking on your username in top Right-Hand-Side of the screen at My StarKidz Lounge.</p>
		</div>

		<div class="col-10 pad pointer addclass7 bg-color" data-toggle="collapse" data-target="#demo7" onclick="addclassfunction('7')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;If I register but I am not able to submit my entry, will the fees be reimbursed?</h6>
		</div>
		<div id="demo7" class="collapse pad col-10 text-justify">
			<p>Registration at The Star Kidz Lounge is free of cost and the competition fee is charged only when you submit your entry.</p>
		</div>

		<div class="col-10 pad pointer addclass8 bg-color" data-toggle="collapse" data-target="#demo8" onclick="addclassfunction('8')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;Can I send multiple entries for a single competition?</h6>
		</div>
		<div id="demo8" class="collapse pad col-10 text-justify">
			<p>You can send as many entries you like, until the contest is open, however, there will be a contest fee for each of the entry separately.</p>
		</div>

		<div class="col-10 pad pointer addclass9 bg-color" data-toggle="collapse" data-target="#demo9" onclick="addclassfunction('9')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;Can I link “My Gallery” with my social media account to showcase my work?</h6>
		</div>
		<div id="demo9" class="collapse pad col-10 text-justify">
			<p>Yes, a link is provided at My Gallery for sharing the work.</p>
		</div>

		<div class="col-10 pad pointer addclass10 bg-color" data-toggle="collapse" data-target="#demo10" onclick="addclassfunction('10')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;Will the website display winner’s picture also along with the name?</h6>
		</div>
		<div id="demo10" class="collapse pad col-10 text-justify">
			<p>The “Honour Roll” page at the website will have the winners’ details for each type of competition.</p>
		</div>

		<div class="col-10 pad pointer addclass11 bg-color" data-toggle="collapse" data-target="#demo11" onclick="addclassfunction('11')">
		  	<h6><i class="fa fa-child"></i>&nbsp;&nbsp;&nbsp;&nbsp;How does my child gain by participating?</h6>
		</div>
		<div id="demo11" class="collapse pad col-10 text-justify">
			<p>The Star Kidz is the e-platform where a child’s creative aptitude is represented, rewarded & replicated.There will be multidisciplinary contests being held from time to time, which will help the children showcase their potential. Even if the child does not participate in any of the contests, each of the registered children will have their personal gallery where they can showcase their best works, and share with people, totally free of cost.</p>
		</div>
	</div>	
</div>  

<?php include("includes/footer.php"); ?>
<script type="text/javascript">
	var val2 = 'asas';

	function addclassfunction(val1) 
	{
		$('.addclass'+val2).removeClass('activecolor');
		$('#demo'+val2).removeClass('show');
		$('.addclass'+val1).addClass('activecolor');
		val2 = val1;
	}
</script>