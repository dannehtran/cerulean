<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="">
  
  <title>SHIPPING</title>
</head>

<!--Header-->
<?php
include "header.php"
?>
<!--header end -->

<!--shipping page content-->
<!-- Sign Up Form -->
 <div class="card shadow rounded border_color mx-5">
 <form method="" action="" class=" py-4 px-4">
   <h1 class="text-center">Shipping Form</h1>
   <h4 class="text-center">Billing/Return Address</h4>

   <div class="form-row justify-content-center">
     <div class="col-md-3 mb-3">
       <label>First Name</label>
       <input type="text" class="form-control" name="firstnameBilling" id="firstnameReturn" placeholder="John" required>
     </div>

     <div class="col-md-3 mb-3">
       <label>Last Name</label>
       <input type="txt" class="form-control" name="LastnameBilling" id="lastnameReturn" placeholder="Doe" required>
     </div>
   </div>

   <div class="form-row justify-content-center">
     <div class="col-md-4 mb-3">
       <label>Email</label>
       <input type="text" class="form-control" name="emailBilling" id="emailReturn" placeholder="john.doe@cerulean.com" required>
     </div>
     <div class="col-md-2 mb-3">
       <label>Phone Number</label>
       <input type="phone" class="form-control" name="phoneBilling" id="phoneReturn" placeholder="888-555-7777" required>
     </div>
   </div>

   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label>Address</label>
       <input type="text" class="form-control" name="addressBilling" id="addressReturn" placeholder="Address" required>
     </div>
    </div>
  <div class="form-row justify-content-center">
    <div class="col-md-6 mb-3">
      <label>Address 2 (Optional)</label>
      <input type="text" class="form-control" name="address2Billing" id="address2Return" placeholder="Address">
    </div>
  </div>
   <div class="form-row justify-content-center">
     <div class="col-md-2 mb-3">
       <label>City</label>
       <input type="text" class="form-control" name="cityBilling" id="cityReturn" placeholder="City" required>
     </div>
     <div class="col-md-3 mb-3">
       <label>State</label>
       <input type="text" class="form-control" name="stateBilling" id="stateReturn" placeholder="State" required>
     </div>
     <div class="col-md-1 mb-3">
       <label>Zip</label>
       <input type="text" class="form-control" name="zipBilling" id="zipReturn" placeholder="Zip" required>
     </div>
   </div>

    <h4 class="text-center mb-3">Package Details</h4>
    <div class="form-row justify-content-center">
      <div class="col-md-3 mb-3">
        <label>Package Type</label>
        <select class="form-control" required="">
          <option value="Owners">Your Own</option>
          <option value="csLarge">Cerulean-Large</option>
          <option value="csMedium">Cerulean-Medium</option>
          <option value="csSmall">Cerulean-Small</option>
          <option value="csLetter">Cerulean-Letter</option>
          <option value="csTube">Cerulean-Tube</option>
        </select>
      </div>

      <div class="col-md-3 mb-3">
        <label>Package Weight </label>
        <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight in lbs" required="" class="xyz">
      </div>
    </div>
    <div class="form-row justify-content-center">
      <label>Package Dimensions</label>
    </div>
    <div class="form-row justify-content-center">
      <div class="col-md-2 mb-3">
            <input class="form-control" type="text" name="OwnersLength" placeholder="Length" class="xyz">
      </div>
      <div class="col-md-2 mb-3">
            <input class="form-control" type="text" name="OwnersWidth" placeholder="Width" class="xyz">
      </div>
      <div class="col-md-2 mb-3">
            <input class="form-control" type="text" name="OwnersHeight" placeholder="Height" class="xyz">
      </div>
    </div>




   <div class="form-group text-center">
     <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="" name="ShForm2" onclick="window.location='shippingForm2.php';">Continue</button>
   </div>
 </form>
</div> <!--CARD END-->
<!--end of shipping page content-->

<!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End-->