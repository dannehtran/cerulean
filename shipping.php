<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/shipping.css">
	
  <title>SHIPPING</title>
</head>

<!--Header-->
<?php
include "header.php"
?>
<!--header end -->

<!--Accordion Start -->
    <div class="accordion" id="accordionExample"> 
      <div class="card"> <!-- Ground Card -->
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Ground Shipping
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <img src="images/shipments.png" alt="truck" class="shippingImg">
            <p>Standard Shipping Choice.</p>
            <p>Features most average delivery times for low prices.</p>
            <div>
              <table class="accordionTable">
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
                <tr>
                  <td>5-7 Days</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>3-4 Days</td>
                  <td>$40</td>
                </tr>
                <tr>
                  <td>1-2 Days</td>
                  <td>$75</td>
                </tr>
              </table>
            </div>
                <a href="shippingForm.php" class="shippingLink">Shipping Form</a>
          </div>
        </div>
      </div>

      <div class="card"> <!-- Drone Card -->
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Drone Shipping
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <img src="images/drone.png" alt="drone" class="shippingImg">
            <p>Drone Shipping is for quick local deliveries</p>
            <p>*MAX weight capacity 10lb</p>
            <div>
              <table class="accordionTable">
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
                <tr>
                  <td>2-3 hours</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>1 hour</td>
                  <td>$40</td>
                </tr>
                <tr>
                  <td>EXPRESS 15-20 minutes</td>
                  <td>$75</td>
                </tr>
              </table>
            </div>
            <a href="shippingForm.php" class="shippingLink">Shipping Form</a>
          </div>
        </div>
      </div>
      <div class="card"> <!-- Air Shipping Card -->
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Air Mail
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <img src="images/plane.png" alt="plane" class="shippingImg">
            <p>Quick Air Deliveries</p>
            <p>*Best method for fast intercontinental pckages. </p>
            <div>
              <table class="accordionTable">
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
                <tr>
                  <td>2 Days</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>1 day</td>
                  <td>$40</td>
                </tr>
                <tr>
                  <td>EXPRESS Overnight</td>
                  <td>$75</td>
                </tr>
              </table>
            </div>
            <a href="shippingForm.php" class="shippingLink">Shipping Form</a>
          </div>
        </div>
      </div>

      <div class="card"> <!-- Freight Card -->
        <div class="card-header" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Freight Shipping
            </button>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <img src="images/ship.png" alt="boat" class="shippingImg">
            <p>Most optimal for the Largest of packages.</p>
            <p>*No maximum weight capacity</p>
            <div>
              <table class="accordionTable">
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
                <tr>
                  <td>1-2 Weeks</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>1 Week</td>
                  <td>$40</td>
                </tr>
              </table>
            </div>
            <a href="shippingForm.php" class="shippingLink">Shipping Form</a>
          </div>
        </div>
      </div>

    </div>
<!--end of accordian class -->

 <!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End -->