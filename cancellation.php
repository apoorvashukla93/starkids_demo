<?php include 'include/header.php'; ?><br/><br/><br/><br/>
<div class="container">
  <div class="card">
    <div class="card-header">Cancellation Form</div>
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="outlet"><b>Outlet :</b></label>
              <select class="form-control" name="outlet">
                <option value="outlet1">BBK dwarka</option>
                <option value="outlet2">BBK noida</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="orderid"><b>Order Id :</b></label>
              <input type="text" name="orderid" class="form-control"/>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="reasons"><b>Reason :</b></label>
              <input type="text" name="reason" class="form-control"/>
            </div>
          </div>
          <div class="col-lg-3 mt-2"><br>
            <button type="submit" name="submit" class="btn btn-primary" style="width: 50%">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div><br/>


<?php include 'include/footer.php'; ?>