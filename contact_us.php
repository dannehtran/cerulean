<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Contact Us</title>

  <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
  </style>
</head>
<body>
	<body>
	<!-- THIS IS THE NAV BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <!-- THIS IS THE DIV THAT CONTAINS ALL THE TABS FOR THE NAV BAR -->
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
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
          <a class="nav-link" id="contactUsNav" role="button" href="contact_us.php">Contact Us</a>
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
 






 <!--contact page content-->
  <div>
  		<article>
  			<header>
    		<h1>Cerulean Shipping</h1>
    		<h3>How to Contact Us</h3>
    		<p>Reach us at any of our main branches.</p>
        <p>For appropriate and quick service please contact the appropriate branch. </p>
  			</header>

  			<table>
          <tr>
              <th>Branch Office</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Address</th>
          </tr>
          <tr>
            <td>Cerulean Ground</td>
            <td>cerulean.ground.support@gmail.com</td>
            <td>1.800.464.1020</td>
            <td>600 East Brokaw <br> San Jose, CA 95112 USA</td>
          </tr> 
          <tr>
            <td>Cerulean Air Mail</td>
            <td>cerulean.air.support@gmail.com</td>
            <td>1.800.464.2030</td>
            <td>6845 South Las Vegas Blvd<br>Las Vegas, NV 89119 USA</td>
          </tr> 
          <tr>
            <td>Cerulean Freight</td>
            <td>cerulean.frieght.support@gmail.com</td>
            <td>1.800.464.4050</td>
            <td>12710 Executive Dr.<br>Dallas, TX 75238</td>
          </tr>
          <tr>
            <td>Cerulean Drone</td>
            <td>cerulean.drone.support@gmail.com</td>
            <td>1.800.464.6070</td>
            <td>800 Garden Ave. North<br>Renton, WA 98057</td>
          </tr>
          <tr>
            <td>Cerulean Head Branch</td>
            <td>cerulean.shipping@gmail.com</td>
            <td>1.800.580.2334</td>
            <td>3296 N.W. Commerce Ave.<br>Duluth, GA 30096</td>
          </tr>
        </table>
		</article>
  </div>
 <!--end of contact page content-->





















  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>