<?php

// Checks if user presses the register button
if (isset($_POST['register'])) {

  require '../db_connect.php';

  // Sets POST variables to easy to understand variables
  $username = $_POST['username_reg'];
  $password = $_POST['password_reg'];
  $password2 = $_POST['password2_reg'];
  $email = $_POST['email_reg'];
  $firstname = $_POST['first_name_reg'];
  $lastname = $_POST['last_name_reg'];
  $address = $_POST['address_reg'];
  $address2 = $_POST['address2_reg'];
  $city = $_POST['city_reg'];
  $state = $_POST['state_reg'];
  $phone = $_POST['phone_reg'];
  $zipcode = $_POST['zip_reg'];

  // Preparing a query to check if there is a username already in the database
  $sql = 'SELECT * FROM customer WHERE username=? OR email=?';
  $stmt = mysqli_stmt_init($connection);

  if ($password !== $password2) {
  // Checks if user inputted false password and redirects them back to index page
    header("Location: ../register.php?error=PasswordsDoNotMatch");
    exit();
  }

  // If the password matches, hash the password so it can be inputted into the database
  else {
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
  }

  // If the query is wrong, return them to register page with an error
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../register.php?error=sqlError");
    exit();
  }

  // If the query is prepared properly, bind the parameters
  else {
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Checks if there's something in the row from the query
    if ($row = mysqli_fetch_assoc($result)) {
      header("Location: ../register.php?error=UsernameOrEmailAlreadyTaken");
      exit();
    }

    // If there is nothing in the query, start inserting user information into the database
    else {
      $sql = 'INSERT INTO customer (first_name, last_name, username, password, email, address,
        address2, city, state, phone_number, zipcode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
      ';

      // Checks to see if the INSERT SQL query is prepared properly
       if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("Location: ../register.php?error=sqlError");
         exit();
       }

       // If the query is prepared properly, bind and execute the insert SQL query to the database
       else {
         mysqli_stmt_bind_param($stmt, "sssssssssss", $firstname, $lastname, $username, $hashedpassword,$email, $address, $address2,
         $city, $state, $phone, $zipcode);
         mysqli_stmt_execute($stmt) or die(mysqli_error($connection));
         $result = mysqli_stmt_get_result($stmt);
         header('Location: ../index.php?register=success');
       }
    }
  }

}
 ?>
