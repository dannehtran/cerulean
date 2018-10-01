<!DOCTYPE html>
<html>
<head>
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








 <!--shipping page content-->
  <div>
    <h1>Shipment Options</h1>
      <div class="vertical-menu">
         <a href="#NewS" class="active">New Shipment</a><br>
        <a href="#ExistingS">Existing Shipment</a>
      </div>
        <br>
      <div>                           <!--return address, ships from here-->
        <h2 id="NewS"><u>New Shipment</u></h2>
        <br>
        <h5><b>Shipping From/ Return To:</b></h5>

          <form method="">
            <table>
              <tr>
                <th>First Name*</th>
                <th>Last Name*</th>
              </tr>
              <tr>
                <td><input type="text" name="FirstName" required=""></td>
                <td><input type="text" name="LirstName" required=""></td>
              </tr>
              <tr>
                <th>Address*</th>
              </tr>
              <tr>
                <td><input type="text" name="Address" required="" placeholder="Street Address"></td>
              </tr>
              <tr>
                <td><input type="text" name="AddressExtra" placeholder="Appartment, Suite, etc."></td>
              </tr>
              <tr>
                <th>ZIP code*</th>
                <th>City*</th>
                <th>State*</th>
              </tr>
              <tr>
                <td><input type="text" name="Zip" required=""></td>
                <td><input type="text" name="City" required=""></td>
                <td>
                  <select required="">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Email*</th>
                <th>Phone*</th>
              </tr>
              <tr>
                <td><input type="email" name="Email" required=""></td>
                <td><input type="text" name="Phone" required=""></td>
              </tr>
            </table>

        <br>                           <!--Shipping to address-->
        <h5><b>Shipping To:</b></h5>
          <form method="">
            <table>
              <tr>
                <th>First Name*</th>
                <th>Last Name*</th>
              </tr>
              <tr>
                <td><input type="text" name="FirstName" required=""></td>
                <td><input type="text" name="LirstName" required=""></td>
              </tr>
              <tr>
                <th>Address*</th>
              </tr>
              <tr>
                <td><input type="text" name="Address" required="" placeholder="Street Address"></td>
              </tr>
              <tr>
                <td><input type="text" name="AddressExtra" placeholder="Appartment, Suite, etc."></td>
              </tr>
              <tr>
                <th>ZIP code*</th>
                <th>City*</th>
                <th>State*</th>
              </tr>
              <tr>
                <td><input type="text" name="Zip" required=""></td>
                <td><input type="text" name="City" required=""></td>
                <td>
                  <select required="">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Email</th>
                <th>Phone</th>
              </tr>
              <tr>
                <td><input type="email" name="Email"></td>
                <td><input type="text" name="Phone"></td>
              </tr>
            </table>

        <br>                      <!--Information regarding package-->
    		<h5><b>Package Information:</b></h5>
          <form method="">
            <table>
              <tr>
                <th>Packaging Type*:</th>
                <th>Package Weight*:</th>
              </tr>
              <tr>
                <td>
                  <select required="">
                    <option value="Owners">Your Own</option>
                    <option value="csLarge">Cerulean-Large</option>
                    <option value="csMedium">Cerulean-Medium</option>
                    <option value="csSmall">Cerulean-Small</option>
                    <option value="csLetter">Cerulean-Letter</option>
                    <option value="csTube">Cerulean-Tube</option>
                  </select>
                </td>
                <td><input type="text" name="pkWeight" required="" placeholder="----">lbs</td>
              </tr>
              <tr>
                <td colspan="2">If using your own packaging please specify dimensions</td>
              </tr>
              <tr>
                <th>Length:</th>
                <th>Width:</th>
                <th>Height:</th>
              </tr>
              <tr>
                <td><input type="txt" name="packageLength">in</td>
                <td><input type="txt" name="packageWidth">in</td>
                <td><input type="txt" name="packageHeight">in</td>
              </tr>
              <tr>
                <th>preffered shipping method:</th>
                <td>
                  <select required="">
                    <option value="any">unspecified</option>
                    <option value="Airmail">Airmail</option>
                    <option value="Freight">Freight</option>
                    <option value="Ground">Ground</option>
                    <option value="Drone">Drone</option>
                  </select>
                </td>
              </tr>
            </table>
          </form>

           <button type="submit" value="Submit">SUBMIT</button>
           <button type="reset" value="Reset">RESET</button>

          </form>
      </div>
      <div>
        <form>
          <h1 id="ExistingS">Existing Shipment</h1>
        </form>
      </div>
  </div>
 <!--end of shipping page content-->


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
