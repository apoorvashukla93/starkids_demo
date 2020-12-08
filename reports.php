<?php //include 'include/dbconfig.php'; ?>
 <title>Star Kids | Sponsorship</title>
<?php include 'include/header.php'; ?><br/><br/><br/><br/>
<div class="">
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

<div class="container jumbotron">
  <!-- <h2>Card Header and Footer</h2> -->
  <div class="card" style="border: transparent;">
    <div class="card-header bg-danger text-white">Registration</div>
    <div class="card-body">
    	<div class="row">
        	<div class="col-lg-5">
            	<form>
                <div class="form-group">
                  <label for="datefrom"><b>Date From:</b></label>
                  <input type="text" name="daterange" class="form-control" id="datefrom" value="01/01/2020" />
                </div>
                <div class="form-group">
                  <label for="dateto"><b>Date To:</b></label>
                  <input type="text" name="daterange" class="form-control" id="dateto" value="01/01/2020" />
                </div>
                <div class="form-group">
                  <label for="registration"><b>Registration Status:</b></label>
                  <select class="form-control" id="registration">
                    <option>Pending</option>
                    <option>Hold</option>
                    <option>Approve</option>
                    <option>Registered</option>
                  </select>
                </div>
                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-danger btn-lg" onclick="viewreport()">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div> 
  </div>
</div>
<!-- <div class="container" id="tablereport" style="display:none;">
  <div style="overflow-x: auto;">
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
</div> -->
<br/>
<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
      format: 'M/DD hh:mm A'
    }
  });
});
</script>


// <script>
// function viewreport() {
//   // console.log("hello world");
//   // document.getElementById("tablereport").style.display = "block";
//   // document.getElementById("hideform").style.display = "none;";
//   header("location: view_registration_report.php");
// }
// </script>

<?php include 'include/footer2.php'; ?>