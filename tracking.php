<!-- HEADER -->
<?php
  include "header.php";
 ?>

<!-- START OF TRACKING PAGE-->

<!-- TRACKING TABLE -->
<div class="row mx-5 d-flex text-center align-items-stretch" style="padding-top:70px">
    <div class="card shadow rounded border_color" style="width:100%">
      <div class="card-body">
        <h1 class="card-title">Tracking</h1>
          <table class="table text-center">
            <thead class="thead-cerulean">
              <tr>
                <th>Tracking Number</th>
                <th>Date Shipped</th>
                <th>Shipped From</th>
                <th>Date Received</th>
                <th>Received By</th>
                <th>Weight</th>
                <th>Delivery Type</th>
                <th>Delivered</th>
              </tr>
              <tbody>

                <!-- PHP code to pull tracking information from the database -->
                <?php

                // Checks if user presses track button
                if (isset($_GET['trackSubmit']) OR @$_GET['trackNum']) {

                  // Connects to the database using db_connectphph and sets the GET variables
                  require 'db_connect.php';

                  $trackingNumber = $_GET['trackNum'];

                  // Checks if tracking is empty
                  if (empty($trackingNumber)) {
                    header("Location: ../index.php?error=noTrackingNumberEntered");
                    exit();
                  }

                  // Prepares the query for information being pulled
                  else {
                    $sql = 'SELECT * FROM parcel WHERE tn=?';
                    $stmt = mysqli_stmt_init($connection);

                    // Checks to see if the SQL query is properly prepared
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                      header("Location: ../index.php?error=sqlPrepareError");
                      exit();
                    }

                    // Binds the tracking number and executes the prepared query
                    else {
                      mysqli_stmt_bind_param($stmt, "s", $trackingNumber);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);

                      // Checks if there's something in the row from the query
                      if ($row = mysqli_fetch_assoc($result)) {

                        // If there is something in the row, prepare sql query for tracking number
                        $sql = 'SELECT warehouse.w_id, customer.c_id, warehouse.address AS w_address, customer.address AS c_address, tn, date_shipped, date_received
                        , weight, delivered, dev_type FROM parcel, warehouse, customer
                        WHERE parcel.w_id = warehouse.w_id AND parcel.c_id = customer.c_id AND tn = ' . $trackingNumber;
                        $query = mysqli_query($connection, $sql);
                        $result = mysqli_num_rows($query);

                        // Checks if there is something in the row
                        if ($result < 1) {
                          echo '<h1>No Tracking Information Available For: ' . $trackingNumber . '</h1>';
                          exit();
                        }
                        else {

                          // Iterates through the rows and displays them in the tabe
                          while ($tracking = mysqli_fetch_assoc($query)) {
                            if ($tracking['delivered'] == 0) {
                              $delivery = '<span class="badge badge-pill badge-secondary">In Transit</span>';
                            }
                            else {
                              $delivery = '<span class="badge badge-pill badge-success">Delivered</span>';
                            }
                            echo '<tr>';
                            echo '<td>' . $tracking['tn'] . '</td>';
                            echo '<td>' . $tracking['date_shipped'] . '</td>';
                            echo '<td>' . $tracking['c_address'] . '</td>';
                            echo '<td>' . $tracking['date_received'] . '</td>';
                            echo '<td>' . $tracking['w_address'] . '</td>';
                            echo '<td>' . $tracking['weight'] . ' lbs</td>';
                            echo '<td>' . $tracking['dev_type'] . '</td>';
                            echo '<td>' . $delivery . '</td>';
                            echo '</tr>';
                          }
                        }
                      }
                    }
                  }
                }
              ?>
                <!-- END OF PHP CODE -->

              </tbody>
          </table>
      </div>
    </div>
</div>
<!--END OF TABLE -->


<!-- TRACKING INPUT BAR -->
<div class="col-lg-6 trackingNumber2">
  <form action="tracking.php" method="GET">
    <div class="form-row py-4">
      <div class="col-9">
        <input type="tracking" name ="trackNum" class="form-control form-control-lg" id="trackingNumber2" placeholder="Tracking ID">
      </div>
        <button type="submit" name="trackSubmit" class="btn btn-secondary buttonColor">Track</button>
    </div>
  </form>
</div>

<!-- FOOTER -->
<?php
include_once "footer.php";
?>
