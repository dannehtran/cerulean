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
<!-- Shipping Form-->
 <div class="card shadow rounded border_color mx-5">
 <form method="POST" action="shippingForm2.php" class="needs-validation py-4 px-4" novalidate>
   <h1 class="text-center">Shipping Form</h1>
   <h4 class="text-center">Billing/Return Address</h4>
<!--Row one Names-->
   <div class="form-row justify-content-center">
     <div class="col-md-3 mb-3">
       <label for="validationCustom01">First Name</label>
       <input type="text" class="form-control" name="firstnameBilling" id="validationCustom01" placeholder="John" required>
        <div class="invalid-feedback">
          Please enter your First Name.
        </div>
      </div>

     <div class="col-md-3 mb-3">
       <label>Last Name</label>
       <input type="txt" class="form-control" name="LastnameBilling" id="lastnameReturn" placeholder="Doe" required>
      <div class="invalid-feedback">
          Please enter your Last Name.
      </div>
    </div>
   </div>
<!--END of Row one-->

<!--Row two Email and Phone-->
   <div class="form-row justify-content-center">
     <div class="col-md-4 mb-3">
       <label>Email</label>
       <input type="text" class="form-control" name="emailBilling" id="emailReturn" placeholder="john.doe@cerulean.com" required>
       <div class="invalid-feedback">
          Please enter your Email.
      </div>
    </div>

     <div class="col-md-2 mb-3">
       <label>Phone Number</label>
       <input type="phone" class="form-control" name="phoneBilling" id="phoneReturn" placeholder="888-555-7777" required>
       <div class="invalid-feedback">
          Please enter your Phone Number.
      </div>
     </div>
   </div>
<!--END of row two-->

<!--Row three Address-->
   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label>Address</label>
       <input type="text" class="form-control" name="addressBilling" id="addressReturn" placeholder="Address" required>
       <div class="invalid-feedback">
          Please enter your Address.
      </div>
     </div>
    </div>
<!--END Row three-->

<!--Row Four optional address -->
  <div class="form-row justify-content-center">
    <div class="col-md-6 mb-3">
      <label>Address 2 (Optional)</label>
      <input type="text" class="form-control" name="address2Billing" id="address2Return" placeholder="Address">
    </div>
  </div>
<!--END row four-->

<!--row five-->
   <div class="form-row justify-content-center">
     <div class="col-md-2 mb-3">
       <label>City</label>
       <input type="text" class="form-control" name="cityBilling" id="cityReturn" placeholder="City" required>
       <div class="invalid-feedback">
          Please enter your City.
      </div>
     </div>
     <div class="col-md-3 mb-3">
       <label>State</label>
       <input type="text" class="form-control" name="stateBilling" id="stateReturn" placeholder="State" required>
       <div class="invalid-feedback">
          Please enter your State.
      </div>
     </div>
     <div class="col-md-1 mb-3">
       <label>Zip</label>
       <input type="text" class="form-control" name="zipBilling" id="zipReturn" placeholder="Zip" required>
       <div class="invalid-feedback">
          Please enter your ZIP.
      </div>
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
        <div class="invalid-feedback">
          Please enter your Package Weight.
      </div>
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
     <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="submit" name="shipping">Continue</button>
   </div>
 </form>
</div> <!--CARD END-->
<!--end of shipping page content-->

<!-- validation script-->
<script src="script/validation.js"></script>

<!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End-->