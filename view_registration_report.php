<?php //include 'include/dbconfig.php'; ?>
 <title>Star Kids | Sponsorship</title>
<?php include 'include/header.php'; ?><br/><br/><br/><br/>

<div class="container jumbotron" id="hideform">
  <!-- <h2>Card Header and Footer</h2> -->
	<div class="card" style="border: transparent;">
		<div class="card-header bg-danger text-white">Registration
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<form>
		            <div class="form-group col-lg-3" style="float:left;">
		              <label for="datefrom"><b>Date From:</b></label>
		              <input type="text" name="daterange" class="form-control" id="datefrom" value="01/01/2020" />
		            </div>
		            <div class="form-group col-lg-3" style="float:left;">
		              <label for="dateto"><b>Date To:</b></label>
		              <input type="text" name="daterange" class="form-control" id="dateto" value="01/01/2020" />
		            </div>
		            <div class="form-group col-lg-3 mr-4" style="float:left;">
		              <label for="registration"><b>Registration Status:</b></label>
		              <select class="form-control" id="registration">
		                <option>Pending</option>
		                <option>Hold</option>
		                <option>Approve</option>
		                <option>Registered</option>
		              </select>
		            </div>
		            <div class="form-group col-lg-2 col-md-2 mt-4 l-4" style="float:left;">
		              <button type="submit" name="submit" class="btn btn-danger btn-md">Submit</button>
		            </div>
		        </div>
		    </div>
		</div>
	</div><br/><br/>

	<div class="card" style="border: transparent;">
		<div class="card-header bg-danger text-white">Registration Report
		</div>
		<div class="card-body">
			<div style="overflow-x: auto;" class="table-responsive">
			    <table class="table table-striped table-bordered">
			      <thead>
			        <tr>
			          <th>SN</th>
			          <th>Child's&nbsp;Name</th>
			          <th>Father's&nbsp;Name</th>
			          <th>Mother's&nbsp;Name</th>
			          <th>Date&nbsp;of&nbsp;Birth</th>
			          <th>Age</th>
			          <th>Age&nbsp;Proof</th>
			          <th>School&nbsp;Name</th>
			          <th>State</th>
			          <th>District</th>
			          <th>Parent's&nbsp;Email</th>
			          <th>Phone</th>
			          <th>Date&nbsp;of&nbsp;Reg.</th>
			          <th>Registration&nbsp;Status</th>
			          <th>Registration&nbsp;Last&nbsp;Verified&nbsp;by</th>
			          <th>Date&nbsp;of&nbsp;Verification</th>
			          <th>Time&nbsp;of&nbsp;Verification</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td>John</td>
			          <td>Doe</td>
			          <td>john@example.com</td>
			        </tr>
			      </tbody>
			    </table>
	  		</div>
		</div>
	</div><br/><br/>
</div>
<?php include 'include/footer2.php'; ?>