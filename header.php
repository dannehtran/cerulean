<?php
  session_start();
?>
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
              echo '<form>';
              echo '<input type="username" class="form-control" id="userID1" placeholder="User ID">';
              echo '<input type="password" class="form-control" id="password1" placeholder="Password">';
              echo '<button type="submit" class="btn btn-primary">LOGIN</button>';
              echo '</form>';
              echo '<div class="dropdown-divider"></div>';
              echo '<a class="dropdown-item" href="#">Make An Account</a>';
              echo '</div>';
            }
          ?>
        </li>
      </ul>
  </div>
  </nav>
<!-- END OF NAV BAR -->
