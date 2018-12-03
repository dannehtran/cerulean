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
                <th>Date Received</th>
                <th>Date Shipped</th>
                <th>Weight</th>
                <th>Delivery Type</th>
                <th>Delivered</th>
              </tr>
              <tbody>

                <!-- PHP code to pull tracking information from the database -->
                <?php
                require 'db_connect.php';

                // Prepares the query for information being pulled
                $sql = 'SELECT parcel.c_id, parcel.w_id, tn, date_shipped, date_received, weight, delivered, dev_type
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
                    if ($tracking['delivered'] == 0) {
                        $delivery = '<span class="badge badge-pill badge-secondary">In Transit</span>';
                    }
                    else {
                      $delivery = '<span class="badge badge-pill badge-success">Delivered</span>';
                    }
                    echo '<tr>';
                    echo '<td>' . $tracking['tn'] . '</td>';
                    echo '<td>' . $tracking['date_received'] . '</td>';
                    echo '<td>' . $tracking['date_shipped'] . '</td>';
                    echo '<td>' . $tracking['weight'] . ' lbs</td>';
                    echo '<td>' . $tracking['dev_type'] . '</td>';
                    echo '<td>' . $delivery . '</td>';
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


<!-- TRACKING INPUT BAR -->
<div class="col-lg-6 trackingNumber2">
  <form>
    <div class="form-row py-4">
      <div class="col-9">
        <input type="tracking" class="form-control form-control-lg" id="trackingNumber2" placeholder="Tracking ID">
      </div>
        <button type="submit" class="btn btn-secondary buttonColor">Track</button>
    </div>
  </form>
</div>

<!-- FOOTER -->
<?php
include_once "footer.php";
?>
