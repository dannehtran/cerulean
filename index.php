<!-- HEADER -->
<?php
  include "header.php";
 ?>

<!-- Handles alert messages -->
<?php

  // Displays an alert if the user did not input a username or password
  if (@$_GET['error'] == 'noUnameOrPwd') {
   echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
           <strong>You did not enter a Username or Password!</strong>
           Please fill in everything.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }

  if (@$_GET['error'] == 'noTrackingNumberEntered') {
   echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
           <strong>You did not enter a Tracking Number!</strong>
           Make sure you enter it correctly.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }

  // Displays an alert if the user did not input a correct username
  if (@$_GET['error'] == 'nouser') {
   echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
           <strong>You did not enter a correct Username</strong>
           Please verify you are using the correct credentials.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }

  // Displays an alert if the user did not type in the right password
  if (@$_GET['error'] == 'wrongpwd') {
   echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
           <strong>You have entered the wrong password!</strong>
            Please verify you are using the correct credentials.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }

  //Displays an alert if the user successfully logged in
  if (@$_GET['login'] == 'success') {
   echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
           <strong>Welcome Back! ',$_SESSION["f_name"], ' </strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }

  //Displays an alert if the user successfully created an account
  if (@$_GET['register'] == 'success') {
   echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
           <strong>Your account has been successfully created!</strong>
           Please login via the navigation bar.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>';
  }
 ?>

<!-- START OF HOMEPAGE -->
  <img class="ceruleanLogo" src="images/cl_logo.png">

  <!-- CERLUEAN SHIPPING CARD -->
  <div class="row mx-5 d-flex align-items-stretch" style="padding-top:70px">
      <div class="card shadow rounded border_color" style="width:100%">
        <div class="card-body buttonAlign">
          <h2 class="card-title">Cerulean Shipping</h2>
          <p class="card-text">Cerulean shipping is a mid-sized shipping company that provides services over all terrain such as land, sea, and air. We plan on implementing new technologies that are newer to the shipping industry such as drone shipping and GPS location delivery. This can help put us one step ahead on faster delivery times, and change the shipping industry.</p>
        </div>
      </div>
  </div>
      <div class="col-lg-6 trackingNumber2">
        <form action="tracking.php" method="GET" name="trackForm" ng-submit="submitForm(trackForm.$valid)" novalidate>
          <div class="form-row py-4">
            <div class="col-9">
              <input type="number" class="form-control form-control-lg" id="trackingNumber2" name="trackNum" placeholder="Tracking ID" ng-model="trackNum" required>
            </div>
              <button type="submit" class="btn btn-secondary buttonColor" ng-disabled="trackForm.$invalid" name="trackSubmit" action="tracking.php">Track</button>
              <div>
                <p ng-show="trackForm.trackNum.$invalid && !trackForm.trackNum.$pristine" class="help-block">
                  Please enter your tracking number.
                </p>
              </div>
          </div>
        </form>
      </div>

  <!-- Card Containers -->
  <div class="container-fluid">
    <div class="row mx-5 d-flex align-items-stretch shadow rounded">

      <!--Standard Shipping Card-->
      <div class="card py-3 border_color" style="width:100%">
        <img class="card-img-top image-resize_standard" src="images/truck.jpg" alt="truck">
        <div class="card-body buttonAlign">
          <h4 class="card-title">Standard Shipping</h4>
          <p class="card-text">Cerulean Shipping offers the greatest on land delivery throughout the United States! We ship
                          everywhere across the nation with flat fees and no hidden charges. Click below to learn more!</p>
          <a href="shipping.php#GroundShipping" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
        </div>
      </div>
    </div>

    <!-- ROW FOR DRONE, AIR, AND OCEAN CARDS -->
    <div class="row py-5">

      <!-- Drone Shipping Card -->
      <div class="col-4 d-flex align-items-stretch">
        <div class="card mx-auto shadow rounded border_color" style="width:400px">
          <img class="card-img-top image-resize" src="images/drone_shipp.jpg" alt="drone">
          <div class="card-body buttonAlign">
            <h4 class="card-title">Drone Shipping</h4>
            <p class="card-text">Drone delivery is our newest shipping technology. We carry out your standard shipment with drones built with GPS tracking and accurate location services. Depending on your package weight, your delivery can be made within a few hours after your order/label has been placed in our newest branch office.</p>
            <a href="shipping.php#DroneShipping" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Airplane Shipping Card -->
      <div class="col-4 d-flex align-items-stretch">
        <div class="card mx-auto border_color shadow rounded" style="width:400px">
          <img class="card-img-top image-resize" src="images/airplane.jpg" alt="airplane">
          <div class="card-body buttonAlign">
            <h4 class="card-title">Air Freight Shipping</h4>
            <p class="card-text">Want your package delivered within 1 - 2 days? Have your package shipped overnight using our private planes dedicated to delivering your pacakage on time! We offer competitive prices and flat rates, while ensuring safety and accuracy!</p>
            <a href="shipping.php#AirFreight" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Boat Shipping Card -->
      <div class="col-4 d-flex align-items-stretch">
        <div class="card mx-auto border_color shadow rounded" style="width:400px">
          <img class="card-img-top image-resize" src="images/boat.jpg" alt="boat">
          <div class="card-body buttonAlign">
            <h4 class="card-title">Ocean Freight Shipping</h4>
            <p class="card-text">Why not deliver your package via boat? With Cerulean shipping, we deliver packages with our custom speedboats! Boat delivery is only available in Hawaii as of now, but we will be expanding this service in the near future!</p>
            <a href="shipping.php#OceanFreight" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
<?php
  include_once "footer.php";
?>
