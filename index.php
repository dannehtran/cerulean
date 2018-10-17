<!-- HEADER -->
<?php
  include "header.php";
 ?>
<!-- START OF HOMEPAGE -->
  <img class="ceruleanLogo" src="images/cl_logo.png">

  <!-- CERLUEAN SHIPPING JUMBOTRON -->
  <div class="row mx-5 d-flex align-items-stretch" style="padding-top:70px">
      <div class="card shadow rounded border_color" style="width:100%">
        <div class="card-body buttonAlign">
          <h2 class="card-title">Cerulean Shipping</h2>
          <p class="card-text">Cerulean shipping is a mid-sized shipping company that provides services over all terrain such as land, sea, and air. We plan on implementing new technologies that are newer to the shipping industry such as drone shipping and GPS location delivery. This can help put us one step ahead on faster delivery times, and change the shipping industry.</p>
        </div>
      </div>
  </div>
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
          <a href="shipping.php" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
        </div>
      </div>
    </div>

    <!-- ROW FOR DRONE, AIR, AND OCEAN CARDS -->
    <div class="row mx-5 py-5">

      <!-- Drone Shipping Card -->
      <div class="col-4 d-flex align-items-stretch">
        <div class="card shadow rounded border_color" style="width:400px">
          <img class="card-img-top image-resize" src="images/drone_shipp.PNG" alt="drone">
          <div class="card-body buttonAlign">
            <h4 class="card-title">Drone Shipping</h4>
            <p class="card-text">Drone delivery is our newest shipping technology. We carry out your standard shipment with drones built with GPS tracking and accurate location services. Depending on your package weight, your delivery can be made within a few hours after your order/label has been placed in our newest branch office.</p>
            <a href="shipping.php" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Airplane Shipping Card -->
      <div class="col-4 d-flex align-items-stretch">
        <div class="card border_color shadow rounded" style="width:400px">
          <img class="card-img-top image-resize" src="images/airplane.jpg" alt="airplane">
          <div class="card-body buttonAlign">
            <h4 class="card-title">Air Freight Shipping</h4>
            <p class="card-text">Want your package delivered within 1 - 2 days? Have your package shipped overnight using our private planes dedicated to delivering your pacakage on time! We offer competitive prices and flat rates, while ensuring safety and accuracy!</p>
            <a href="shipping.php" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Boat Shipping Card -->
      <div class="col-4 d-flex align-items-stretch">
        <div class="card border_color shadow rounded" style="width:400px">
          <img class="card-img-top image-resize" src="images/boat.jpg" alt="boat">
          <div class="card-body buttonAlign">
            <h4 class="card-title">Ocean Freight Shipping</h4>
            <p class="card-text">Why not deliver your package via boat? With Cerulean shipping, we deliver packages with our custom speedboats! Boat delivery is only available in Hawaii as of now, but we will be expanding this service in the near future!</p>
            <a href="shipping.php" class="btn btn-secondary btn-rounded buttonColor" role="button">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
<?php
  include_once "footer.php";
?>
