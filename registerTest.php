<!-- HEADER -->
<?php
  include_once "header.php";
 ?>


<?php

// Checks to see if passwords match, if so display an alert
if (@$_GET['error'] == 'PasswordsDoNotMatch') {
 echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
         <strong>You did not enter the correct password twice!</strong>
         Try again.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
}

// Checks to see if the username or email is already taken, if so display an alert
if (@$_GET['error'] == 'UsernameOrEmailAlreadyTaken') {
 echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
         <strong>The Username or Email you have entered is already taken!</strong>
         Please choose another Username or Email address.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
}
 ?>

 <!-- Sign Up Form -->
 <div class="card signUpForm shadow rounded border_color mx-5">
 <form method="POST" action="handlers/registerHandler.php" class="py-4 px-4" ng-submit="submitForm(regForm.$valid)" name="regForm" novalidate>
   <h1 class="text-center">Sign Up Form</h1>

   <!-- Row 1 -->
   <div class="form-row justify-content-center">

     <!-- Username Input Field -->
     <div class="col-md-5 mb-3">
       <label>Username</label>
       <input type="text" class="form-control" name="username_reg" ng-model="username_reg" id="validationCustom01" placeholder="Username" ng-minlength="4" ng-maxlength="10" required>
       <div>
         <p ng-show="regForm.username_reg.$invalid && !regForm.username_reg.$pristine" class="help-block">
           Please enter a username.
         </p>
         <p ng-show="regForm.username_reg.$error.minlength" class="help-block">
           Please enter more than 4 characters.
         </p>
         <p ng-show="regForm.username_reg.$error.maxlength" class="help-block">
          Please enter less than 10 characters.
         </p>
       </div>
     </div>

     <!-- Password Input Field -->

     <div class="col-md-5 mb-3">
       <label for="validationCustom02">Password</label>
       <input type="password" class="form-control" name="password_reg" id="validationCustom02" placeholder="Password" ng-model="password_reg" ng-minlength="9" required>
       <div>
         <p ng-show="regForm.password_reg.$invalid && !regForm.password_reg.$pristine" class="help-block">
           Please enter a password.
         </p>
         <p ng-show="regForm.password_reg.$error.minlength" class="help-block">
           Please enter more than 9 characters.
         </p>
       </div>
     </div>
   </div>

   <!-- Row 2 -->
   <div class="form-row justify-content-center">

     <!-- Email Input Field -->
     <div class="form-group col-md-5 mb-3" ng-class="{ 'help-block' : regForm.email_reg.$invalid && !regForm.email_reg.$pristine }">
       <label for="validationCustom03">Email</label>
       <input type="email" class="form-control" name="email_reg" id="validationCustom03" placeholder="Email" ng-model="email" required>
       <div>
         <p ng-show="regForm.email_reg.$invalid && !regForm.email_reg.$pristine" class="help-block">
           Please enter your email address.
         </p>
       </div>
     </div>

     <!-- Confirm Password Input Field -->
     <div class="col-md-5 mb-3">
       <label for="validationCustom04">Re-type password</label>
       <input type="password" class="form-control" name="password2_reg" id="validationCustom04" placeholder="Confirm Password" required>
       <div>
         Please enter your password again.
       </div>
     </div>
   </div>

   <!-- Row 3 -->
   <div class="form-row justify-content-center">

     <!-- First name Input Field -->
     <div class="col-md-5 mb-3">
       <label>First name</label>
       <input type="text" class="form-control" name="first_name_reg" id="validationCustom05" placeholder="First name" ng-model="first_name_reg" required>
       <div>
         <p ng-show="regForm.first_name_reg.$invalid && !regForm.first_name_reg.$pristine" class="help-block">
           Please enter your first name.
         </p>
       </div>
     </div>

     <!-- Lastname Input Field -->
     <div class="col-md-5 mb-3">
       <label>Last name</label>
       <input type="text" class="form-control" name="last_name_reg" id="validationCustom06" placeholder="Last name" ng-model="last_name_reg" required>
       <div>
         <p ng-show="regForm.last_name_reg.$invalid && !regForm.last_name_reg.$pristine" class="help-block">
           Please enter your last name.
         </p>
       </div>
     </div>
   </div>

   <!-- Row 4 -->
   <div class="form-row justify-content-center">

     <!-- Address Input Field -->
     <div class="col-md-6 mb-3">
       <label>Address</label>
       <input type="text" class="form-control" name="address_reg" id="validationCustom07" placeholder="Address" ng-model="address_reg" required>
       <div>
         <p ng-show="regForm.address_reg.$invalid && !regForm.address_reg.$pristine" class="help-block">
           Please provide an address.
         </p>
       </div>
     </div>

     <!-- Address 2 Input Field -->
     <div class="col-md-4 mb-3">
       <label for="validationCustom08">Address 2 (Optional)</label>
       <input type="text" class="form-control" name="address2_reg" id="validationCustom08" placeholder="Address2">
     </div>
   </div>

   <!-- Row 5 -->
   <div class="form-row justify-content-center">
     <div class="col-md-6 mb-3">

       <!-- City Input Field -->
       <label>City</label>
       <input type="text" class="form-control" name="city_reg" id="validationCustom09" placeholder="City" ng-model="city_reg"required>
       <div>
         <p ng-show="regForm.city_reg.$invalid && !regForm.city_reg.$pristine" class="help-block">
           Please enter a city.
         </p>
       </div>
     </div>

     <!-- State Input Field -->
     <div class="col-md-4 mb-3">
       <label>State</label>
       <input type="state" class="form-control" name="state_reg" id="validationCustom10" placeholder="State" ng-model="state_reg" ng-minlength="2" ng-maxlength="2" required>
       <div>
         <p ng-show="regForm.state_reg.$invalid && !regForm.state_reg.$pristine" class="help-block">
           Please enter a state (Example: CA).
         </p>
         <p ng-show="regForm.state_reg.$error.minlength" class="help-block">
         </p>
         <p ng-show="regForm.state_reg.$error.maxlength" class="help-block">
         </p>
       </div>
     </div>
   </div>

   <!-- Row 6 -->
   <div class="form-row justify-content-center">

     <!-- Phone number Input Field -->
     <div class="col-md-5 mb-3">
       <label>Phone Number</label>
       <input type="number" class="form-control" name="phone_reg" id="validationCustom11" placeholder="Phone Number" ng-model="phone_reg" ng-minlength="10" ng-maxlength="11" required>
       <div>
         <p ng-show="regForm.phone_reg.$invalid && !regForm.phone_reg.$pristine" class="help-block">
           Please enter a valid phone number.
         </p>
         <p ng-show="regForm.phone_reg.$error.minlength" class="help-block">
         </p>
       </div>
     </div>

     <!-- Zipcode Input Field -->
     <div class="col-md-5 mb-3">
       <label>Zip</label>
       <input type="number" class="form-control" name="zip_reg" id="validationCustom12" placeholder="Zip" ng-model="zip_reg" ng-minlength="5" ng-maxlength="5" required>
       <div>
         <p ng-show="regForm.zip_reg.$invalid && !regForm.zip_reg.$pristine" class="help-block">
           Please enter a valid zip code.
         </p>
         <p ng-show="regForm.zip_reg.$error.minlength && regForm.zip_reg.$error.maxlength " class="help-block">
         </p>
       </div>
     </div>
   </div>
   <div class="form-group text-center">
     <div class="form-check">
       <input class="form-check-input" type="checkbox" ng-model="checked" id="invalidCheck" required>
       <label class="form-check-label">
         Agree to terms and conditions
       </label>
       <div class="invalid-feedback">
         <p class="help-block" ng-show="validationmsg">
         You must agree before submitting.
        </p>
       </div>
     </div>
     <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="submit" action="handlers/registerHandler.php" name="register" ng-disabled="regForm.$invalid" ng-click="checkvalidation();">Sign Up</button>
   </div>
 </form>
</div>

<!-- Validation Script -->



<!-- Footer -->
<?php
  include_once "footer.php";
 ?>
