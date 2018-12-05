<?php
session_start();
// Checks if user presses the register button
if (isset($_POST['update'])) {

  require '../db_connect.php';

  // Sets POST variables to easy to understand variables
  $username = $_POST['username_up'];
  $email = $_POST['email_up'];
  $firstname = $_POST['first_name_up'];
  $lastname = $_POST['last_name_up'];
  $address = $_POST['address_up'];
  $address2 = $_POST['address2_up'];
  $city = $_POST['city_up'];
  $state = $_POST['state_up'];
  $phone = $_POST['phone_up'];
  $zipcode = $_POST['zip_up'];
  $c_id = $_SESSION['c_id'];

  // Preparing a query to check if there is a username already in the database
  $sql = 'SELECT * FROM customer WHERE username=? OR email=?';
  $stmt = mysqli_stmt_init($connection);

  // If the query is wrong, return them to register page with an error
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../account.php?error=sqlUserEmailError");
    exit();
  }

  // If the query is prepared properly, bind the parameters
  else {
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Checks if there's something in the row from the query
    if ($row = mysqli_fetch_assoc($result)) {
      header("Location: ../account.php?error=UsernameOrEmailAlreadyTaken");
      exit();
    }

    // If there is nothing in the query, start updating user information into the database
    else {
      $sql = 'UPDATE customer
      SET first_name = ?, last_name = ?, username = ?, email = ?, address = ?,
      address2 = ?, city = ?, state = ?, phone_number = ?, zipcode =?
      WHERE c_id = '. $c_id;

      // Checks to see if the INSERT SQL query is prepared properly
       if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("Location: ../account.php?error=sqlUpdateError");
         exit();
       }

       // If the query is prepared properly, bind and execute the insert SQL query to the database
       else {
         mysqli_stmt_bind_param($stmt, "ssssssssss", $firstname, $lastname, $username, $email, $address, $address2,
         $city, $state, $phone, $zipcode);
         mysqli_stmt_execute($stmt) or die(mysqli_error($connection));
         $result = mysqli_stmt_get_result($stmt);
         $_SESSION['u_name'] = $username;
         $_SESSION['f_name'] = $firstname;
         $_SESSION['l_name'] = $lastname;
         $_SESSION['email'] = $email;
         $_SESSION['address'] = $address;
         $_SESSION['address2'] = $address2;
         $_SESSION['city'] = $city;
         $_SESSION['state'] = $state;
         $_SESSION['phone'] = $phone;
         $_SESSION['zip'] = $zipcode;
         header('Location: ../account.php?update=success');
       }
    }
  }

}
 ?>
