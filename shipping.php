<!DOCTYPE html>
<html>
<head>

  <style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 50px 160px;
    font-size: 24px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 100%;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>SHIPPING</title>
</head>
<body>
	<!-- THIS IS THE NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navBarCustom">
  <!-- THIS IS THE DIV THAT CONTAINS ALL THE TABS FOR THE NAV BAR -->
  <div class="collapse navbar-collapse justify-content-center container " id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link" href="index.php" id="HomeNav" role="button">
          Home
        </a>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="shipping.php" id="shippingNav" role="button" data-toggle="click">
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
  <!-- END OF NAV BAR-->

  <div>
    <h1>Shipping Methods</h1>
    <p>Click on a shipping method that you would like:</p>

    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">Drone Shipping</button>
        <div id="myDropdown" class="dropdown-content">
          <p>*Drone Shipping is for quick short range deliveries</p>
          <div>
            <table class="contactTable">
              <tr>
                <th>Estimated Delivery Time</th>
                <th>Delivery Cost</th>
              </tr>
              <tr>
                <td>2-3 hours</td>
                <td>$20</td>
              </tr>
              <tr>
                <td>1 hour</td>
                <td>$40</td>
              </tr>
              <tr>
                <td>EXPRESS 15-20 minutes</td>
                <td>$75</td>
              </tr>
            </table>
          </div>
          <a href="shippingForm.php">Shipping Form</a>
        </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">Air Mail</button>
        <div id="myDropdown1" class="dropdown-content">
          <p>Standard Air mail. Cross country/continental</p>
          <div>
            <table class="contactTable">
              <tr>
                <th>Estimated Delivery Time</th>
                <th>Delivery Cost</th>
              </tr>
              <tr>
                <td>2-3 weeks</td>
                <td>$20</td>
              </tr>
              <tr>
                <td>1 week</td>
                <td>$40</td>
              </tr>
              <tr>
                <td>EXPRESS 1-2 days</td>
                <td>$100</td>
              </tr>
            </table>
          </div>
          <a href="shippingForm.php">Shipping Form</a>
        </div>
    </div>
  </div>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>









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
