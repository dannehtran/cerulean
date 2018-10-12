<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/shippingForm.css">
  
  <title>SHIPPING</title>
</head>

<!--Header-->
<?php
include "header.php"
?>
<!--header end -->

<!--shipping page content-->
<div class="box">
  <div class="row">
    <div class="col-75">
      <div class="container1">
        <form action="/action_page.php">
        
          <div class="row">
            <div class="col-50">
              <h3>Billing/Return Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="firstname" placeholder="First Name" required="" class="xyz">
                <input type="text" id="fname" name="middlename" placeholder="Middle Initial" class="xyz">
                <input type="text" id="fname" name="lastname" placeholder="Last Name" required="" class="xyz">
              <label for="phone"><i class="fa fa-phone"></i> Phone Number</label>
                  <input type="text" id="phone" name="phone" placeholder="888-555-7777">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com" required="">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required="">
              <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" placeholder="New York" required="">

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY" required="">
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-75">
                  <h3>Package Details</h3>
                  <div class="col-50">
                <label for="package">Package Type</label>
                  <select required="">
                    <option value="Owners">Your Own</option>
                    <option value="csLarge">Cerulean-Large</option>
                    <option value="csMedium">Cerulean-Medium</option>
                    <option value="csSmall">Cerulean-Small</option>
                    <option value="csLetter">Cerulean-Letter</option>
                    <option value="csTube">Cerulean-Tube</option>
                  </select>
                <label for="packageweight">Package Weight</label>
                <input type="text" id="weight" name="weight" placeholder="Weight in lbs" required="" class="xyz">
                  </div>
                <div class="col-50">
                  <label for="ownersDM">Demensions of Your Own Package</label>
                  <input type="text" name="OwnersLength" placeholder="Length" class="xyz">
                  <input type="text" name="OwnersWidth" placeholder="Width" class="xyz">
                  <input type="text" name="OwnersHeight" placeholder="Height" class="xyz">
                </div>
              </div>
            </div>
          </div>
        </div>
          
          <input type="submit" class="shippingLink" value="Continue to Delivery Address" onclick="window.location='shippingForm2.php';">
        </form>
      </div><!--Container1 class-->
    </div><!--Col-75 class-->
  </div><!--row class-->
</div><!--Box class-->
<!--end of shipping page content-->

<!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End-->