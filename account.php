<!-- HEADER -->
<?php
  include "header.php";
 ?>

 <?php

 // Checks to see if the user successfully updated their information, if so display an alert
 if (@$_GET['update'] == 'success') {
  echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <strong>Your account information has been successfully updated!</strong>
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

<!-- START OF ACCOUNT PAGE-->

<!-- Sign Up Form -->
<div class="card signUpForm shadow rounded border_color mx-5">
<form method="POST" action="handlers/accountHandler.php" class="needs-validation py-4 px-4" novalidate>
  <h1 class="text-center">My Account</h1>

  <!-- Row 1 -->
  <div class="form-row justify-content-center">

    <!-- Username Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Username</label>
      <input type="text" class="form-control" name="username_up" id="validationCustom01" value="<?php echo $_SESSION['u_name']; ?>" required>
      <div class="invalid-feedback">
        Please enter a username.
      </div>
    </div>

    <!-- Email Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Email</label>
      <input type="text" class="form-control" name="email_up" id="validationCustom03" value="<?php echo $_SESSION['email']; ?>" required>
      <div class="invalid-feedback">
        Please enter your email address.
      </div>
    </div>
  </div>

  <!-- Row 2 -->
  <div class="form-row justify-content-center">

    <!-- First name Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">First name</label>
      <input type="text" class="form-control" name="first_name_up" id="validationCustom05" value="<?php echo $_SESSION['f_name']; ?>" required>
      <div class="invalid-feedback">
        Please enter your first name.
      </div>
    </div>

    <!-- Lastname Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom06">Last name</label>
      <input type="text" class="form-control" name="last_name_up" id="validationCustom06" value="<?php echo $_SESSION['l_name']; ?>" required>
      <div class="invalid-feedback">
        Please enter your last name.
      </div>
    </div>
  </div>

  <!-- Row 4 -->
  <div class="form-row justify-content-center">

    <!-- Address Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom07">Address</label>
      <input type="text" class="form-control" name="address_up" id="validationCustom07" value="<?php echo $_SESSION['address']; ?>" required>
      <div class="invalid-feedback">
        Please provide a valid address.
      </div>
    </div>

    <!-- Address 2 Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom08">Address 2 (Optional)</label>
      <input type="text" class="form-control" name="address2_up" id="validationCustom08" value="<?php echo $_SESSION['address2']; ?>">
    </div>
  </div>

  <!-- Row 5 -->
  <div class="form-row justify-content-center">

    <!-- City Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom09">City</label>
      <input type="text" class="form-control" name="city_up" id="validationCustom09" value="<?php echo $_SESSION['city']; ?>" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>

    <!-- State Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom10">State</label>
      <input type="text" class="form-control" name="state_up" id="validationCustom10" value="<?php echo $_SESSION['state']; ?>" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
  </div>

  <!-- Row 6 -->
  <div class="form-row justify-content-center">

    <!-- Phone number Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom11">Phone Number</label>
      <input type="text" class="form-control" name="phone_up" id="validationCustom11" value="<?php echo $_SESSION['phone']; ?>"required>
      <div class="invalid-feedback">
        Please provide a valid phone number.
      </div>
    </div>

    <!-- Zipcode Input Field -->
    <div class="col-md-4 mb-3">
      <label for="validationCustom12">Zip</label>
      <input type="text" class="form-control" name="zip_up" id="validationCustom12" value="<?php echo $_SESSION['zip']; ?>" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group text-center">
    <button class="btn btn-secondary btn-rounded mt-3 buttonColor" type="submit" action="handlers/accountHandler.php" name="update">Update Information</button>
  </div>
</form>
</div>

<!-- FOOTER -->
<?php
include_once "footer.php";
?>
