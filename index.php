<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- EXTERNAL CSS FILE -->
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <title>Cerulean Shipping Company</title>
  <meta charset="UTF-8">
  <meta name="description" content="We are a shipping company that provide services throughout the United States.">
  <meta name="keywords" content="Cerulean, Shipping, Tracking, Drones">
</head>
<!-- HEADER -->
<?php
  include "header.php";
 ?>
<!-- START OF HOMEPAGE -->

  <!-- CERLUEAN SHIPPING JUMBOTRON -->
  <div class="jumbotron" id="backgroundStory">
      <h1 class="jumboHeader">Cerulean Shipping</h1>
      <p>Cerulean shipping is a mid-sized shipping company that provides services over all terrain such as land, sea, and air. We plan on implementing new technologies that are newer to the shipping industry such as drone shipping and GPS location delivery. This can help put us one step ahead on faster delivery times, and change the shipping industry.</p>
      <p><a class="btn btn-secondary" href="#">Learn More</a></p>
  </div>

  <!-- STANDARD SHIPPING CARD-->
  <div class="container-fluid shadow rounded">
    <div class="row mx-1">

      <!--ACTUAL CARD-->
      <div class="col-md-12 mb-4">
        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg);">
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
              <h3 class="card-title py-3 font-weight-bold"><strong>Standard Shipping</strong></h3>
              <p class="pb-3">Cerulean Shipping offers the greatest on land delivery throughout the United States! We ship
                              everywhere across the nation with flat fees and no hidden charges. Click below to learn more!
              </p>
              <a class="btn btn-secondary btn-rounded"><i class="fa fa-clone left"></i>Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- IMAGE ROWS-->
    <div class="row mx-1">
      <div class="col">
        <img class="image-resize rounded" src="images/drone_shipp.PNG" alt="drone">
      </div>
      <div class="col">
        <img class="image-resize rounded" src="#" alt="truck">
      </div>
      <div class="col">
        <img class="image-resze rounded" src="#" alt="ship">
      </div>
    </div>

    <!-- DESCRIPTION ROW-->
    <div class="row mx-1">
      <div class="col description">Drone delivery is our newest shipping technology. We carry out your standard shipment with drones built with GPS tracking and accurate location services. Depending on your package weight, your delivery can be made within a few hours after your order/label has been placed in our newest branch office.</div>
      <div class="col description"></div>
      <div class="col description"></div>
    </div>
    <div class="row mx-1">
      <div class="col buttonAlign">
        <a class="btn btn-secondary" href="#" role="button"> Learn More </a>
      </div>
      <div class="col buttonAlign">
      </div>
      <div class="col buttonAlign">
      </div>
    </div>
  </div>

  <!-- FOOTER -->
<?php
  include "footer.php";
?>
