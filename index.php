<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .copyright {
      background: #2a52be;
      color: white;
      text-align: center;
    }
    .navBarCustom {
      background: #2a52be
    }
    .jumbotron {
      text-align: center;
    }
    .image-padding {
      padding-left: 30px;
    }
    .image-resize {
      width: 450;
      height: 300;
    }
    .description {
      padding: 15px;
      text-align: center;
    }
  </style>
  <title>Cerulean Shipping Company</title>
  <meta charset="UTF-8">
  <meta name="description" content="We are a shipping company that provide services throughout the United States.">
  <meta name="keywords" content="Cerulean, Shipping, Tracking, Drones">
</head>
<body>
  <!-- THIS IS THE NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-static-top navBarCustom">
  <!-- THIS IS THE DIV THAT CONTAINS ALL THE TABS FOR THE NAV BAR -->
  <div class="collapse navbar-collapse justify-content-center container" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="shippingNav" role="button">
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
          <a class="nav-link" id="contactUsNav" role="button" href="#">Locations</a>
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
      <p>We are a mid-sized shipping company that provides services over all terrain such as land, sea, and air. We plan on implementing new technologies that are newer to the shipping industry such as drone shipping and GPS location delivery. This can help put us one step ahead on faster delivery times, and change the shipping industry.</p>
      <p><a class="btn btn-primary" href="#">Learn More</a></p>
  </div>
  <!-- IMAGE CONTAINER-->
  <div class="container-fluid image-padding shadow rounded">
    <div class="row">
      <div class="col">
        <img class="image-resize" src="images/drone_shipp.PNG" alt="drone">
      </div>
      <div class="col">
        <img class="image-resize" src="#" alt="truck">
      </div>
      <div class="col">
        <img class="image-resze" src="#" alt="ship">
      </div>
    </div>
    <!-- DESCRIPTION ROW-->
    <div class="row">
      <div class="col description">Done shipping is our newest shipping technology. We carry out your standard shipment with on the go GPS tracking drone services. Depending on your location, your delivery can be made within a few hours after your order/label has been placed.</div>
      <div class="col description"></div>
      <div class="col description"></div>
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
