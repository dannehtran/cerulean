<?php
  session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- EXTERNAL CSS FILE -->
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <!-- Logo Icon -->
  <link rel="icon" href="images/cerulean_logo.png">
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
      <li class="nav-item">
        <a class="navbar-brand" href="index.php">
          <img src="images/cerulean_logo.png" width="30" height="30" alt="">
        </a>
      <li class="nav-item dropdown">
        <a class="nav-link" href="shipping.php" id="shippingNav" role="button">
          Shipping
        </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tracking
          </a>
          <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown">
            <form>
              <input type="tracking" class="form-control form-control-lg" id="trackingNumber1" placeholder="Tracking ID">
              <button type="submit" class="btn btn-secondary btn-block btn-lg buttonColor">Track</button>
            </form>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">More Tracking Information</a>
            </div>
          </li>
        <li class="nav-item">
          <a class="nav-link" id="contactUsNav" role="button" href="contact_us.php">Locations</a>
        </li>
        <li class="nav-item dropdown">

          <!-- PHP CODE THAT CHANGES THE HTML IF USER IS LOGGED IN -->
          <?php
            if($_SESSION['u_name']) {
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ', $_SESSION[d_name], '
              </a>';
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo '<form action="logout.php" method="POST"><button type="submit" name="submit" action="logout.php" method="POST">Logout</button></form>';
              echo '<div class="dropdown-divider"></div>';
              echo '<a class="dropdown-item" href="#">My Tracking Numbers</div>';
              echo '<div class="dropdown-divider"></div>';
              echo '<a class="dropdown-item" href="#">My Purchase History</div>';
              echo '</div>';
            }
            else {
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Log In or Sign Up
              </a>';
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo '<form class="p-3">';
              echo '<input type="username" class="form-control form-control-lg" id="userID1" placeholder="User ID">';
              echo '<input type="password" class="form-control form-control-lg" id="password1" placeholder="Password">';
              echo '<button type="submit" class="btn btn-secondary btn-block btn-lg buttonColor">LOGIN</button>';
              echo '</form>';
              echo '<div class="dropdown-divider"></div>';
              echo '<a class="dropdown-item" href="register.php">Make An Account</a>';
              echo '</div>';
            }
          ?>
        </li>
      </ul>
  </div>
  </nav>
<!-- END OF NAV BAR -->
