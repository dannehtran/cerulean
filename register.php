<!-- HEADER -->
<?php
  include_once "header.php";
 ?>
 <div class="container signUpForm shadow rounded my-5 px-5">
 <form action="handlers/registerHandler.php" class="needs-validation py-4 px-4" novalidate>
   <h1 class="text-center">Sign Up Form</h1>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom01">Username</label>
       <input type="text" class="form-control" name="username_reg" id="validationCustom01" placeholder="Username" required>
       <div class="invalid-feedback">
         Please enter a username.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom02">Password</label>
       <input type="password" class="form-control" name="password_reg" id="validationCustom02" placeholder="Password" required>
       <div class="invalid-feedback">
         Please enter a password.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom03">Email</label>
       <input type="text" class="form-control" name="email_reg" id="validationCustom03" placeholder="Email" required>
       <div class="invalid-feedback">
         Please enter your email address.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom04">Re-type password</label>
       <input type="password" class="form-control" name="password2_reg" id="validationCustom04" placeholder="Confirm Password" required>
       <div class="invalid-feedback">
         Please enter your password again.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom05">First name</label>
       <input type="text" class="form-control" name="first_name_reg" id="validationCustom05" placeholder="First name" required>
       <div class="invalid-feedback">
         Please enter your first name.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom06">Last name</label>
       <input type="text" class="form-control" name="last_name_reg" id="validationCustom06" placeholder="Last name" required>
       <div class="invalid-feedback">
         Please enter your last name.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label for="validationCustom07">Address</label>
       <input type="text" class="form-control" name="address_reg" id="validationCustom07" placeholder="Address" required>
       <div class="invalid-feedback">
         Please provide a valid address.
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom08">Address 2 (Optional)</label>
       <input type="text" class="form-control" name="address2_reg" id="validationCustom08" placeholder="Address">
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label for="validationCustom09">City</label>
       <input type="text" class="form-control" name="city_reg" id="validationCustom09" placeholder="City" required>
       <div class="invalid-feedback">
         Please provide a valid city.
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom10">State</label>
       <input type="text" class="form-control" name="state_reg" id="validationCustom10" placeholder="State" required>
       <div class="invalid-feedback">
         Please provide a valid state.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom11">Phone Number</label>
       <input type="text" class="form-control" name="phone_reg" id="validationCustom11" placeholder="Phone Number" required>
       <div class="invalid-feedback">
         Please provide a valid phone number.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom12">Zip</label>
       <input type="text" class="form-control" name="zip_reg" id="validationCustom12" placeholder="Zip" required>
       <div class="invalid-feedback">
         Please provide a valid zip.
       </div>
     </div>
   </div>
   <div class="form-group text-center">
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
       <label class="form-check-label" for="invalidCheck">
         Agree to terms and conditions
       </label>
       <div class="invalid-feedback">
         You must agree before submitting.
       </div>
     </div>
     <button class="btn btn-primary mt-3" type="submit" name="register">Sign Up</button>
   </div>
 </form>
</div>
<script src="script/validation.js"></script>
<?php
  include_once "footer.php";
 ?>
