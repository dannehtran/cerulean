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
<!-- Checkout Form-->
 <div class="card shadow rounded border_color mx-5">
  <form method="POST" action="shippingForm2.php" class="needs-validation py-4 px-4" novalidate>
    <h1 class="text-center">Checkout</h1>

    <div class="form-row justify-content-center"><!--Row1-->

      <div class="card shadow rounded border_color mx-5 col-md-3 mb-3"> <!--Cart-->
        <h4 class="text-center">Cart</h4>
      </div><!--Cart End-->

      <div class="card shadow rounded border_color mx-5 col-md-6 mb-3"> <!--payment-->
        <h4 class="text-center">Payment</h4>

        <div class="form-row"><!--card info Row 1-->
          <div class="col-md-4 mb-3">
            <label>First Name on Card</label>
            <input type="text" class="form-control text-center" name="cardFirstName" id="" placeholder="John" required="">
          </div>
          <div class="col-md-4 mb-3">
            <label>Last Name on Card</label>
            <input type="text" class="form-control text-center" name="cardLastName" id="" placeholder="Doe" required="">
          </div>
          
        </div><!--END card info Row 1-->

        <div class="form-row"><!--card info Row 2-->
          <div class="col-md-4 mb-3">
            <label>Credit Card Number</label>
            <input type="text" class="form-control text-center" name="cardNum" id="" placeholder="XXXX-XXXX-XXXX-XXXX" required>
          </div>
          <div class="col-md-3 mb-3">
            <label>Acceptable Cards</label>
            <img src="images/visa_logo.png"/>
            <img src="images/mastercard_logo.png"/>
          </div>
        </div><!--END card info row 2-->
        
        <div class="form-row"><!--card info row 3-->
          <div class="col-md-2 mb-3">
            <label>CVV2</label>
            <input type="text" class="form-control text-center" name="CVV2" id="" placeholder="XXX" required>
          </div>
          <div class="col-md-2 mb-3">
            <label>Exp Date</label>
            <input type="text" class="form-control text-center" name="expDate" id="" placeholder="XX/XX" required="">
            
          </div>
        </div><!--END card info row 3-->
      </div><!--END payment-->

    </div><!--END Row1-->



  <div class="form-group text-center">
    <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="submit" name="Checkout">Checkout</button>
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