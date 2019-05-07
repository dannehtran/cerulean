<!-- HEADER -->
<?php
  include "header.php";

  // Checks to see if no checkmarks are checked, if so display an alert
  if (@$_GET['error'] == 'noCheckedTracking') {
   echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
           <strong>You did not select a delivery to update!</strong>
           Select a delivery to update the information.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }

  // Checks to see if the employee successfully updated delivery information, if so display an alert
  if (@$_GET['update'] == 'success') {
   echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
           <strong>Your delivery information has been successfully updated!</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }
 ?>

<!-- START OF MANAGE DELIVERY PAGE-->

<!-- MANAGE DELIVERY TABLE -->
<div class="row mx-5 d-flex text-center align-items-stretch" style="padding-top:70px">
    <div class="card shadow rounded border_color" style="width:100%">
      <div class="card-body">
        <h1 class="card-title">Manage Deliveries</h1>
          <table class="table text-center align-items-stretch">
            <thead class="thead-cerulean">
              <div class="col-xs-12 col-sm-6 col-md-8">
              <tr>
                <th></th>
                <th>Tracking Number</th>
                <th>Date Shipped</th>
                <th>Date Received</th>
                <th>Weight</th>
                <th>Delivery Type</th>
                <th>Comments</th>
                <th>Status</th>
              </tr>
              </div>
              <tbody>
                <form method="POST" action="handlers/manageHandler.php">
                  <div class="form-check">

                <!-- PHP code to pull tracking information from the database -->
                <?php
                require 'db_connect.php';

                // Prepares the query for information being pulled
                $sql = 'SELECT parcel.emp_id, parcel.w_id, tn, date_received, delivered, date_shipped, weight, dev_type, comments
                        FROM parcel
                        INNER JOIN employee
                        ON parcel.emp_id = employee.emp_id
                        WHERE parcel.emp_id = ' . $_SESSION['emp_id'];
                $query = mysqli_query($connection, $sql);
                $result = mysqli_num_rows($query);

                // Checks if there is something in the row
                if ($result < 1 ) {
                  echo '<h1>No Delivery Information Available!</h1>';
                  exit();
                }
                else {

                  // Iterates through the rows and displays them in the table
                  while ($tracking = mysqli_fetch_assoc($query)) {

                    // Created arrays to display the drop down options
                    $delivery_array = array("Processing", "In Transit", "In Delivery", "Delivered");
                    $dev_array = array("Air", "Ground", "Drone", "Freight");

                    // Created variables to make the options dynamic
                    $delivery = "";
                    $dev_type = "";

                    // Loop that iterates over an array and displays current delivery status
                    foreach ($delivery_array as $deliver) {
                      if ($deliver == $tracking['delivered']) {
                        $delivery .= '<option selected value="' . $deliver . '">' . $deliver . '</option>';
                      }
                      else {
                        $delivery .= '<option value="' . $deliver . '">' . $deliver . '</option>';
                      }
                    }

                    // Loop that iterates over an array and displays current dev_type
                    foreach ($dev_array as $dev) {
                      if ($dev == $tracking['dev_type']) {
                        $dev_type .= '<option selected value="' . $dev . '">' . $dev . '</option>';
                      }
                      else {
                        $dev_type .= '<option value="' . $dev . '">' . $dev . '</option>';
                      }
                    }

                    echo '<div class="row"><div class="col-xs-12 col-sm-6 col-md-8"><tr>';
                    echo '<td><input class="form-check-input" type="checkbox" name="trackCheck[]" value="' . $tracking['tn'] . '"></td>';
                    echo '<td><a href="tracking.php?trackNum='. $tracking['tn'] . '" name="trackSubmit" type="submit" class="btn btn-sml anchorColor">' . $tracking['tn'] . '</a></td>';
                    echo '<td><input type="date" name="shipped" value="' . $tracking['date_shipped'] . '"></input></td>';
                    echo '<td><input type="date" name="received" value="' . $tracking['date_received'] . '"></input></td>';
                    echo '<td><input type="number" name="weight" value="' . $tracking['weight'] . '"></input>lbs</td>';
                    echo '<td><select class="custom-select" name="dev_type" id="inputGroupSelect02">' . $dev_type . '</select></td>';
                    echo '<td><input type="text" class="commentId" name="comments" value="' . $tracking['comments'] . '"></input></td>';
                    echo '<td><select class="custom-select" name="delivery" id="inputGroupSelect01">' . $delivery . '</select></td>';
                    echo '</tr></div></div>';
                  }
                }
                ?>
                <!-- END OF PHP CODE -->

              </tbody>
          </table>
          <div class="form-group text-center">
            <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="submit" action="handlers/manageHandler.php" name="update">Update Delivery</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="py-5">
  </div>
</div>
<!--END OF TABLE -->

<!-- FOOTER -->
<?php
include_once "footer.php";
?>
