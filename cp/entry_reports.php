<?php include 'includes/dbconfig.php'; ?>
<?php include 'includes/header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-header">Entry's</div>
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="datefrom"><b>Date From:</b></label>
              <input type="text" name="date1" class="form-control datepicker"/>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="dateto"><b>Date To:</b></label>
              <input type="text" name="date2" class="form-control datepicker"/>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="contest"><b>Contest:</b></label>
              <select class="form-control" name="contest">
                <option value="All">All</option>
                <option value="craftsmith">Craftsmith</option>
                <option value="wordsmith">Wordsmith</option>
              </select>
            </div>
          </div>
          <div class="col-lg-3 mt-2"><br>
            <button type="submit" name="submit" class="btn btn-primary" style="width: 50%">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php  
    if (isset($_POST['submit']))
    {
  ?>
      <div class="card">
        <div class="card-header">Entry List</div>
        <div class="card-body">
          <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-striped"> 
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Entry&nbsp;Id</th>
                  <th>Contest&nbsp;Name</th>
                  <th>Contestent&nbsp;Name</th>
                  <th>Email</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
    <?php
    }
  ?>
</div>
<?php include 'includes/footer.php'; ?>
<script type="text/javascript">
  $(function() {

      $('.datepicker').daterangepicker({
          autoUpdateInput: false,
        singleDatePicker: true,
        "autoApply": true,
        showDropdowns: true,
        minDate: moment().subtract(10, 'year'),
          maxDate: moment(),
          locale: 
          {
              cancelLabel: 'Clear'
          }
      });

     $('.datepicker').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('DD/MM/YYYY'));
      });

      $('.datepicker').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
     });

  });
</script>