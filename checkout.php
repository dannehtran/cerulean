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
<div class="card shadow rounded border_color mx-5">
<body>
  <div class="checkout-panel">
    <div class="panel-body">
      <h2 class="title">Checkout</h2>

      <div class="payment-method">
        <label for="card" class="method card">
          <div class="card-logos">
            <img src="images/visa_logo.png"/>
            <img src="images/mastercard_logo.png"/>
          </div>

          <div class="radio-input">
            <input id="card" type="radio" name="payment">
            Pay £340.00 with credit card
          </div>
        </label>

        <label for="paypal" class="method paypal">
          <img src="images/paypal_logo.png"/>
          <div class="radio-input">
            <input id="paypal" type="radio" name="payment">
            Pay £340.00 with PayPal
          </div>
        </label>
      </div>

      <div class="input-fields">
        <div class="column-1">
          <label for="cardholder">Cardholder's Name</label>
          <input type="text" id="cardholder" />

          <div class="small-inputs">
            <div>
              <label for="date">Valid thru</label>
              <input type="text" id="date" placeholder="MM / YY" />
            </div>

            <div>
              <label for="verification">CVV / CVC *</label>
              <input type="password" id="verification"/>
            </div>
          </div>

        </div>
        <div class="column-2">
          <label for="cardnumber">Card Number</label>
          <input type="password" id="cardnumber"/>

          <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
        </div>
      </div>
    </div>

    <div class="panel-footer">
      <button class="btn back-btn">Back</button>
      <button class="btn next-btn">Next Step</button>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

</div>

<!--Footer-->
<?php
include "footer.php"
?>
<!--Footer End-->