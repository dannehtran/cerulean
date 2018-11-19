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

<!-- Sign Up Form -->
<div class="card shadow rounded border_color mx-5">
 <form method="" action="" class=" py-4 px-4">
   <h1 class="text-center">Shipping Form</h1>
   <h4 class="text-center">Delivery Address</h4>

   <div class="form-row justify-content-center">
     <div class="col-md-3 mb-3">
       <label>First Name</label>
       <input type="text" class="form-control" name="firstnameDelivery" id="firstnameDelivery" placeholder="John" required>
     </div>

     <div class="col-md-3 mb-3">
       <label>Last Name</label>
       <input type="txt" class="form-control" name="LastnameDelivery" id="lastnameDelivery" placeholder="Doe" required>
     </div>
   </div>

   <div class="form-row justify-content-center">
     <div class="col-md-4 mb-3">
       <label>Email</label>
       <input type="text" class="form-control" name="emailDelivery" id="emailDelivery" placeholder="john.doe@cerulean.com">
     </div>
     <div class="col-md-2 mb-3">
       <label>Phone Number</label>
       <input type="phone" class="form-control" name="phoneDelivery" id="phoneDelivery" placeholder="888-555-7777" required>
     </div>
   </div>

   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label>Address</label>
       <input type="text" class="form-control" name="addressDelivery" id="addressDelivery" placeholder="Address" required>
     </div>
    </div>
  <div class="form-row justify-content-center">
    <div class="col-md-6 mb-3">
      <label>Address 2 (Optional)</label>
      <input type="text" class="form-control" name="address2Delivery" id="address2Delivery" placeholder="Address">
    </div>
  </div>
   <div class="form-row justify-content-center">
     <div class="col-md-2 mb-3">
       <label>City</label>
       <input type="text" class="form-control" name="cityDelivery" id="cityDelivery" placeholder="City" required>
     </div>
     <div class="col-md-3 mb-3">
       <label>State</label>
       <input type="text" class="form-control" name="stateDelivery" id="stateDelivery" placeholder="State" required>
     </div>
     <div class="col-md-1 mb-3">
       <label>Zip</label>
       <input type="text" class="form-control" name="zipDelivery" id="zipDelivery" placeholder="Zip" required>
     </div>
   </div>

   <div class="form-group text-center">
     <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="" name="checkout" onclick="window.location='checkout.php';">Chekout</button>
   </div>
 </form>
</div> <!--CARD END-->

<!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End-->