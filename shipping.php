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
          <div class="card-body align-items-center text-center mx-auto">
            <div class="align-items-center text-center mx-auto">
              <table class="accordionTable  align-items-center text-center mx-auto">
                <img src="images/shipments.png" alt="truck" class="shippingImg d-flex">
                <thead class="thead-cerulean">
                <h3>Standard Shipping Choice.</h3>
                <h4>Features most average delivery times for low prices.</h4>
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
              </thead>
                <tr>
                  <td>5-7 Days</td>
                  <td>$5</td>
                </tr>
                <tr>
                  <td>3-4 Days</td>
                  <td>$10</td>
                </tr>
                <tr>
                  <td>1-2 Days</td>
                  <td>$55</td>
                </tr>
              </table>
                <form action="shippingForm.php" class="buttonPadding">
                  <button class="btn btn-secondary buttonColor" type="Submit" id="groundS">Shipping Form</button>
                </form>
            </div>
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
          <div class="card-body align-items-center text-center mx-auto">
            <div class="align-items-center text-center mx-auto">
              <table class="accordionTable  align-items-center text-center mx-auto">
                <img src="images/drone.png" alt="truck" class="shippingImg d-flex">
                <thead class="thead-cerulean">
                <h3>Drone Shipping is for quick local deliveries.</h3>
                <h4>*MAX weight capacity 10lb</h4>
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
              </thead>
                <tr>
                  <td>2-3 hours</td>
                  <td>$10</td>
                </tr>
                <tr>
                  <td>1 hour</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>EXPRESS 15-20  minutes</td>
                  <td>$30</td>
                </tr>
              </table>
                <form action="shippingForm.php" class="buttonPadding">
                  <button class="btn btn-secondary buttonColor" type="Submit" id="droneS">Shipping Form</button>
                </form>
            </div>
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
          <div class="card-body align-items-center text-center mx-auto">
            <div class="align-items-center text-center mx-auto">
              <table class="accordionTable  align-items-center text-center mx-auto">
                <img src="images/plane.png" alt="truck" class="shippingImg d-flex">
                <thead class="thead-cerulean">
                <h3>Quick Air Deliveries</h3>
                <h4>*Best method for fast intercontinental pckages.</h4>
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
              </thead>
                <tr>
                  <td>2 Days</td>
                  <td>$10</td>
                </tr>
                <tr>
                  <td>1 Day</td>
                  <td>$15</td>
                </tr>
                <tr>
                  <td>EXPRESS Overnight</td>
                  <td>$20</td>
                </tr>
              </table>
                <form action="shippingForm.php" class="buttonPadding">
                  <button class="btn btn-secondary buttonColor" type="Submit" id="airS">Shipping Form</button>
                </form>
            </div>
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
          <div class="card-body align-items-center text-center mx-auto">
            <div class="align-items-center text-center mx-auto">
              <table class="accordionTable  align-items-center text-center mx-auto">
                <img src="images/ship.png" alt="truck" class="shippingImg d-flex">
                <thead class="thead-cerulean">
                <h3>Optimal for the Largest of packages.</h3>
                <h4>*No maximum weight capacity</h4>
                <tr>
                  <th>Estimated Delivery Time</th>
                  <th>Delivery Cost</th>
                </tr>
              </thead>
                <tr>
                  <td>1-2 weeks</td>
                  <td>$20</td>
                </tr>
                <tr>
                  <td>1 week</td>
                  <td>$40</td>
                </tr>
              </table>
                <form action="shippingForm.php" class="buttonPadding">
                  <button class="btn btn-secondary buttonColor" type="Submit" id="freightS">Shipping Form</button>
                </form>
            </div>
          </div>
        </div>
      </div>

    </div>
<!--end of accordian class -->

<script type="script/linking.js"></script>

 <!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End -->