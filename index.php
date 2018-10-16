<!-- HEADER -->
<?php
  include "header.php";
 ?>
<!-- START OF HOMEPAGE -->
  <img class="ceruleanLogo" src="images/cl_logo.png">
  <!-- CERLUEAN SHIPPING JUMBOTRON -->
  <div class="jumbotron" id="backgroundStory">
      <h1 class="jumboHeader">Cerulean Shipping</h1>
      <div class="col-6 text-center align-items-center mx-auto">
        <p><strong>Cerulean shipping is a mid-sized shipping company that provides services over all terrain such as land, sea, and air. We plan on implementing new technologies that are newer to the shipping industry such as drone shipping and GPS location delivery. This can help put us one step ahead on faster delivery times, and change the shipping industry.</strong></p>
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

  <!-- STANDARD SHIPPING CARD-->
  <div class="container-fluid">
    <div class="row mx-5">

      <!--ACTUAL CARD-->
      <div class="col-5 mb-4 mx-auto align-items-center">
        <div class="card card-image img-fluid special_card" style="background-image: url(images/truck.jpg);">
          <div class="text-center align-items-center rgba-black-strong py-5 px-5">
            <div class="text_special">
              <h3 class="card-title py-2 font-weight-bold">Standard Shipping</h3>
              <p class="pb-3"><strong>Cerulean Shipping offers the greatest on land delivery throughout the United States! We ship
                              everywhere across the nation with flat fees and no hidden charges. Click below to learn more!
              </strong></p>
              <a class="btn btn-secondary buttonColor btn-rounded" href="shipping.php"><i class="fa fa-clone left"></i>Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--IMAGE HEADER ROW -->
    <div class="row mx-2 text-center align-items-center image_header">
      <div class="col">
        <h3><strong>Drone Shipping</strong></h3>
      </div>
      <div class="col">
        <h3><strong>Air Freight Shipping</strong></h3>
      </div>
      <div class="col">
        <h3><strong>Ocrean Freight Shipping</strong></h3>
      </div>
    </div>

    <!-- IMAGE ROW-->
    <div class="row mx-2 py-5 align-items-center">
      <div class="col">
        <img class="image-resize rounded" src="images/drone_shipp.PNG" alt="drone">
      </div>
      <div class="col">
        <img class="image-resize rounded" src="images/airplane.jpg" alt="airplane">
      </div>
      <div class="col">
        <img class="image-resize rounded" src="images/boat.jpg" alt="ship">
      </div>
    </div>

    <!-- DESCRIPTION ROW-->
    <div class="row mx-1">
      <div class="col description"><strong>Drone delivery is our newest shipping technology. We carry out your standard shipment with drones built with GPS tracking and accurate location services. Depending on your package weight, your delivery can be made within a few hours after your order/label has been placed in our newest branch office.</strong></div>
      <div class="col description"><strong>Want your package delivered within 1 - 2 days? Have your package shipped overnight using our private planes dedicated to delivering your pacakage on time! We offer competitive prices and flat rates, while ensuring safety and accuracy!</strong></div>
      <div class="col description"><strong>Why not deliver your package via boat? With Cerulean shipping, we deliver packages with our custom speedboats! Boat delivery is only available in Hawaii as of now, but we will be expanding this service in the near future! </strong></div>
    </div>
    <div class="row mx-1">
      <div class="col buttonAlign">
        <a class="btn btn-secondary btn-rounded buttonColor" href="shipping.php" role="button"> Learn More </a>
      </div>
      <div class="col buttonAlign">
        <a class="btn btn-secondary btn-rounded buttonColor" href="shipping.php" role="button"> Learn More </a>
      </div>
      <div class="col buttonAlign">
        <a class="btn btn-secondary btn-rounded buttonColor" href="shipping.php" role="button"> Learn More </a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
<?php
  include_once "footer.php";
?>
