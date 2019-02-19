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
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
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
            <form action="tracking.php" method="GET">
              <input type="tracking" class="form-control form-control-lg" id="trackingNumber1" name="trackNum" placeholder="Tracking ID">
              <button action="tracking.php" method="GET" type="submit" name="trackSubmit" class="btn btn-secondary btn-block btn-lg buttonColor">Track</button>
            </form>
          </li>
        <li class="nav-item">
          <a class="nav-link" id="contactUsNav" role="button" href="locations.php">Locations</a>
        </li>
        <li class="nav-item dropdown">

          <!-- PHP CODE THAT CHANGES THE HTML IF USER IS LOGGED IN -->
          <?php

            // If the session is set, change navbar to users accordingly
            if(isset($_SESSION['u_name'])) {

              // If the user is an employee, change navbar to employee based webpages
              if (isset($_SESSION['emp_id'])) {
                echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome, ', $_SESSION['f_name'], '
                </a>';
                echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                echo '<a class="dropdown-item" href="tracking.php">Manage Deliveries</a>';
                echo '<a class="dropdown-item" href="account.php">My Account</a>';
                echo '<div class="dropdown-divider"></div>';
                echo '<form action="handlers/logoutHandler.php" method="POST"><button class="btn btn-secondary btn-block buttonColor" type="submit" name="logout" action="handlers/logoutHandler.php" method="POST">Logout</button></form></div>';
                echo '</div>';
              }

              // If the user is a customer, change navbar to customer based webpages
              else if (isset($_SESSION['c_id'])) {
                echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome, ', $_SESSION['f_name'], '
                  </a>';
                  echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                  echo '<a class="dropdown-item" href="mytracking.php">My Tracking Numbers</a>';
                  echo '<a class="dropdown-item" href="account.php">My Account</a>';
                  echo '<div class="dropdown-divider"></div>';
                  echo '<form action="handlers/logoutHandler.php" method="POST"><button class="btn btn-secondary btn-block buttonColor" type="submit" name="logout" action="handlers/logoutHandler.php" method="POST">Logout</button></form></div>';
                  echo '</div>';
              }
            }

            // If the session is not set, set navbar to default
            else {
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Log In or Sign Up
              </a>';
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo '<form method="POST" action="handlers/loginHandler.php" class="p-3">';
              echo '<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">';
              echo '<input type="password" class="form-control form-control-lg" name="password" placeholder="Password">';
              echo '<div class="form-check">';
              echo '<input class="form-check-input" type="radio" name="user_login" id="userLogin" value="reg_user" checked>';
              echo '<label class="form-check-label" for="userLogin">';
              echo 'User Login';
              echo '</label>';
              echo '</div>';
              echo '<div class="form-check">';
              echo '<input class="form-check-input" type="radio" name="user_login" id="employeeLogin" value="emp_user">';
              echo '<label class="form-check-label" for="employeeLogin">';
              echo 'Employee Login';
              echo '</label>';
              echo '</div>';
              echo '<button type="submit" name="login" action="handlers/loginHandler.php" class="btn btn-secondary btn-block btn-lg buttonColor">LOGIN</button>';
              echo '</form>';
              echo '<div class="dropdown-divider"></div>';
              echo '<a class="dropdown-item" href="register.php">Make An Account</a>';
              echo '</div>';
              echo '</li>';
              echo '<li class="nav-item drop-dropdown">';
            }
          ?>
        </li>
      </ul>
  </div>
  </nav>
<!-- END OF NAV BAR -->
