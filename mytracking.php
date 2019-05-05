<!-- HEADER -->
<?php
  include "header.php";
 ?>

<!-- START OF TRACKING PAGE-->

<!-- TRACKING TABLE -->
<div class="row mx-5 d-flex text-center align-items-stretch" style="padding-top:70px">
    <div class="card shadow rounded border_color" style="width:100%">
      <div class="card-body">
        <h1 class="card-title">My Tracking Numbers</h1>
          <table class="table text-center">
            <thead class="thead-cerulean">
              <tr>
                <th>Tracking Number</th>
                <th>Date Shipped</th>
                <th>Date Received</th>
                <th>Weight</th>
                <th>Delivery Type</th>
                <th>Status</th>
                <th>Comments</th>
              </tr>
              <tbody>

                <!-- PHP code to pull tracking information from the database -->
                <?php
                require 'db_connect.php';

                // Prepares the query for information being pulled
                $sql = 'SELECT parcel.c_id, parcel.w_id, tn, date_shipped, date_received, weight, delivered, dev_type, comments
                        FROM parcel
                        INNER JOIN customer
                        ON parcel.c_id = customer.c_id
                        WHERE parcel.c_id = ' . $_SESSION['c_id'];
                $query = mysqli_query($connection, $sql);
                $result = mysqli_num_rows($query);

                // Checks if there is something in the row
                if ($result < 1 ) {
                  echo '<h1>No Tracking Information Available!</h1>';
                  exit();
                }
                else {

                  //Iterates through the rows and displays them in the table
                  while ($tracking = mysqli_fetch_assoc($query)) {
                    if ($tracking['delivered'] == "In Transit") {
                        $delivery = '<span class="badge badge-pill badge-secondary">In Transit</span>';
                    }
                    elseif ($tracking['delivered'] == "In Delivery") {
                        $delivery = '<span class="badge badge-pill badge-info">In Delivery</span>';
                    }
                    elseif ($tracking['delivered'] == "Delivered") {
                        $delivery = '<span class="badge badge-pill badge-success">Delivered</span>';
                    }
                    else {
                        $delivery = '<span class="badge badge-pill badge-alert">Processing</span>';
                    }
                    echo '<tr>';
                    echo '<td><a href="tracking.php?trackNum='. $tracking['tn'] . '" name="trackSubmit" type="submit" class="btn btn-sml anchorColor">' . $tracking['tn'] . '</a></td>';
                    echo '<td>' . $tracking['date_shipped'] . '</td>';
                    echo '<td>' . $tracking['date_received'] . '</td>';
                    echo '<td>' . $tracking['weight'] . ' lbs</td>';
                    echo '<td>' . $tracking['dev_type'] . '</td>';
                    echo '<td>' . $delivery . '</td>';
                    echo '<td>' . $tracking['comments'] . '</td>';
                    echo '</tr>';
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

<!-- FOOTER -->
<?php
include_once "footer.php";
?>
