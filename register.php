<!-- HEADER -->
<?php
  include_once "header.php";
 ?>
 <div class="container signUpForm shadow rounded my-5 px-5">
 <form class="needs-validation py-4 px-4" novalidate>
   <h1 class="text-center">Sign Up Form</h1>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom01">Username</label>
       <input type="text" class="form-control" id="validationCustom01" placeholder="Username" required>
       <div class="invalid-feedback">
         Please enter a username.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom02">Password</label>
       <input type="text" class="form-control" id="validationCustom02" placeholder="Password" required>
       <div class="invalid-feedback">
         Please enter a password.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom03">First name</label>
       <input type="text" class="form-control" id="validationCustom03" placeholder="First name" required>
       <div class="invalid-feedback">
         Please enter your first name.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom04">Last name</label>
       <input type="text" class="form-control" id="validationCustom04" placeholder="Last name" required>
       <div class="invalid-feedback">
         Please enter your last name.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label for="validationCustom05">Address</label>
       <input type="text" class="form-control" id="validationCustom05" placeholder="Address" required>
       <div class="invalid-feedback">
         Please provide a valid address.
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom05">Address 2 (Optional)</label>
       <input type="text" class="form-control" id="validationCustom05" placeholder="Address">
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">
       <label for="validationCustom07">City</label>
       <input type="text" class="form-control" id="validationCustom06" placeholder="City" required>
       <div class="invalid-feedback">
         Please provide a valid city.
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom08">State</label>
       <input type="text" class="form-control" id="validationCustom07" placeholder="State" required>
       <div class="invalid-feedback">
         Please provide a valid state.
       </div>
     </div>
   </div>
   <div class="form-row justify-content-center">
     <div class="col-md-5 mb-3">
       <label for="validationCustom09">Phone Number</label>
       <input type="text" class="form-control" id="validationCustom08" placeholder="Phone Number" required>
       <div class="invalid-feedback">
         Please provide a valid phone number.
       </div>
     </div>
     <div class="col-md-5 mb-3">
       <label for="validationCustom10">Zip</label>
       <input type="text" class="form-control" id="validationCustom09" placeholder="Zip" required>
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
     <button class="btn btn-primary mt-3" type="submit">Sign Up</button>
   </div>
 </form>
</div>
<script src="script/validation.js"></script>
<?php
  include_once "footer.php";
 ?>
