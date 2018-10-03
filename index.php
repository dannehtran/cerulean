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
<body>

  <!-- THIS IS THE NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navBarCustom">

  <!-- THIS IS THE DIV THAT CONTAINS ALL THE TABS FOR THE NAV BAR -->
  <div class="collapse navbar-collapse justify-content-center container" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link" href="index.php" id="HomeNav" role="button">
          Home
        </a>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="shipping.php" id="shippingNav" role="button">
          Shipping
        </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tracking
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form>
              <input type="tracking" class="form-control" id="trackingNumber1" placeholder="Tracking ID">
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">More Tracking Information</a>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" id="contactUsNav" role="button" href="contact_us.php">Locations</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Log In or Sign Up
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form>
              <input type="username" class="form-control" id="userID1" placeholder="User ID">
              <input type="password" class="form-control" id="password1" placeholder="Password">
              <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Don't Have An Account?</a>
            </div>
          </li>
      </ul>
  </div>
  </nav>
<!-- END OF NAV BAR -->

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

  <!-- START OF FOOTER-->
  <footer>

    <!-- Copyright -->
    <div class="footer-copyright py-3 copyright">© 2018 Copyright:
      <a href="#">Ceruleanshipping.com</a>
    </div>
  </footer>

  <!-- END OF FOOTER-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
