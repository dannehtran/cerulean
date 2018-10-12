<?php
if (isset($_POST['register'])) {

  require 'db_connect.php';

  $username = $_POST['username_reg'];
  $mail = $_POST['mail_reg'];
  $password = $_POST['password_reg'];
  $password2= $_POST['password2_reg'];
  $address = $_POST['address_reg'];
  $address2 = $_POST['address2_reg'];
  $zipcode = $_POST['zip_reg'];
  $state = $_POST['state_reg'];
  $phone = $_POST['phone_reg'];
  $firstname = $_POST['first_name_reg'];
  $lastname = $_POST['last_name_reg'];

  if (empty($username) || empty($mail) || empty($password) || empty($password2)
      || empty($address) || empty($zipcode) || empty($state) || empty($phone)
      || empty($firstname) || empty($lastname) ) {
    header("Location: ../register.php?error=emptyfields&uname=" . $username . "&mail=" . $mail . "&address=" . $address .
    "&zip=" . $zipcode . "&state" . $state . "&phone=" . $phone . "&=fname" . $firstname . "&lname=" . $lastname);
    exit();
  }
  else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))  {
    header("Location: ../register.php?error=invalidUsername&address=" . $address .
    "&zip=" . $zipcode . "&state" . $state . "&phone=" . $phone . "&=fname" . $firstname . "&lname=" . $lastname);
    exit();
  }
  else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../register.php?error=invalidEmail&uname=" . $username . "&address=" . $address .
    "&zip=" . $zipcode . "&state" . $state . "&phone=" . $phone . "&=fname" . $firstname . "&lname=" . $lastname);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../register.php?error=invalidUsername&mail=" . $mail . "&address=" . $address .
    "&zip=" . $zipcode . "&state" . $state . "&phone=" . $phone . "&=fname" . $firstname . "&lname=" . $lastname);
    exit();
  }
  else if ($password !== $password2) {
    header("Location: ../register.php?error=passwordCheck&uname=" . $username . "&mail=" . $mail . "&address=" . $address .
    "&zip=" . $zipcode . "&state" . $state . "&phone=" . $phone . "&=fname" . $firstname . "&lname=" . $lastname);
    exit();
  }

  $sql = "SELECT username FROM customers WHERE username=?";
  $stmt = mysqli_stmt_init($connection);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../register.php?error=sqlError");
    exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if ($resultCheck > 0) {
      header("Location: ../register.php?error=unameTaken&mail=" . $mail . "&address=" . $address .
      "&zip=" . $zipcode . "&state" . $state . "&phone=" . $phone . "&=fname" . $firstname . "&lname=" . $lastname);
      exit();
    }
    else {
      $sql = "INSERT INTO users (username, password, firstname, lastname, email, address, address2, city, state, zipcode, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../register.php?error=sqlError");
        exit();
      }
      else {
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT)
        mysqli_stmt_bind_param($stmt, "sssssssss", $username, $hashedpassword, $mail, $address, $address2, $city, $state, $zipcode, $phone);
        mysqli_stmt_execute($stmt);
        header("Location: ../register.php?register=success");
        exit();
      }
    }
  }
}
 ?>
