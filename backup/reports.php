<?php include 'includes/dbconfig.php'; ?>
<?php include 'includes/header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-header">Registration</div>
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
              <label for="registration"><b>Registration Status:</b></label>
              <select class="form-control" name="reg_status">
                <option value="Pending">Pending</option>
                <option value="Hold">Hold</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
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
      $d1 = explode('/', $_POST['date1']);
      $date1 = implode('-', array_reverse($d1)); 
      $d2 = explode('/', $_POST['date2']); 
      $date2 = implode('-', array_reverse($d2));
      $status = $_POST['reg_status'];

      $sql = "SELECT `ct_id`, CONCAT(`ct_first_name`, ' ', `ct_last_name`) AS `ct_name`, `ct_dob`, `ct_address`, `ct_city`, `ct_pin`, `ct_state`, `ct_country`, `ct_dob_proof`, `ct_email_id`, `ct_phone`, `ct_father_name`, `ct_mother_name`, `ct_school_name`, `ct_school_city`, `ct_school_state`, `ct_status`, `action_reason`, `ct_registration_date`, `ct_birth_proof_type`, `action_by_name` FROM `contestant_master` WHERE `ct_registration_date`>= '$date1' AND `ct_registration_date`<= '$date2' AND `ct_status` = '$status'";
      $res = mysqli_query($conn, $sql);
  ?>  
      <div class="card">
        <div class="card-header">Registration List <?php echo date('d/m/Y', strtotime($date1)).' to '.date('d/m/Y', strtotime($date2)).' of '.$status.' Contestant'?></div>
        <div class="card-body">
          <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-striped"> 
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Child's&nbsp;Name</th>
                  <th>Father's&nbsp;Name</th>
                  <th>Mother's&nbsp;Name</th>
                  <th>Date&nbsp;of&nbsp;Birth</th>
                  <th>Age</th>
                  <th>Age&nbsp;Proof</th>
                  <th>District</th>
                  <th>State</th>
                  <th>School&nbsp;Name</th>
                  <th>Parent's&nbsp;Phone</th>
                  <th>Parent's&nbsp;Email</th>
                  <th>Date&nbsp;of&nbsp;Reg.</th>
                  <!-- <th>Registration&nbsp;Last&nbsp;Verified&nbsp;by</th>
                  <th>Date&nbsp;of&nbsp;Verification</th>
                  <th>Time&nbsp;of&nbsp;Verification</th> -->
                </tr>
              </thead>
              <tbody>
                <?php  
                  $sn = 1;
                  while ($row = mysqli_fetch_assoc($res)) 
                  {
                    $child_dob = strtotime($row['ct_dob']); 
                    $ct_date = strtotime(date('Y-m-d'));  
                    $diff = abs($ct_date - $child_dob);  
                    $years = floor($diff / (365*60*60*24)); 
                    $months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24));

                    $ext = explode('.',$row['ct_dob_proof']);
                    $file_ext = strtolower(end($ext));
                    if ($file_ext == 'png' || $file_ext == 'jpg'|| $file_ext == 'jpeg') {
                      $src = $row['ct_dob_proof'];
                    } else {
                      $src = 'img/doc_type_img/'.$file_ext.'.png';
                    }
                    echo '<tr>';
                      echo '<td>'.$sn.'</td>';
                      echo '<td>'.$row['ct_name'].'</td>';
                      echo '<td>'.$row['ct_father_name'].'</td>';
                      echo '<td>'.$row['ct_mother_name'].'</td>';
                      echo '<td>'.date('d/m/Y', strtotime($row['ct_dob'])).'</td>';
                      echo '<td>'.$years.'&nbsp;Years&nbsp;&nbsp;&nbsp;'.$months.'&nbsp;Months</td>';
                      echo '<td>';
                      if ($row['ct_dob_proof'] != '') 
                      {
                        echo '<a href="'.$row['ct_dob_proof'].'" data-fancybox="group" data-caption="'.$row['ct_name'].' Birth Proof"><img src="'.$src.'" class="img-avatar-nu" style="width: 40px; height: 40px;"></a>';
                      }
                      echo '</td>';
                      echo '<td>'.$row['ct_city'].'</td>';
                      echo '<td>'.$row['ct_state'].'</td>';
                      echo '<td>'.$row['ct_school_name'].'</td>';
                      echo '<td>'.$row['ct_phone'].'</td>';
                      echo '<td>'.$row['ct_email_id'].'</td>';
                      echo '<td>'.date('d/m/Y', strtotime($row['ct_registration_date'])).'</td>';
                    echo '</tr>';
                    $sn++;
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
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