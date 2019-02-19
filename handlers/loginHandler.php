<?php
session_start();

// Checks if user presses login button
if (isset($_POST['login'])) {

  // Connects to the database using db_connect.php and sets the POST variables
  require '../db_connect.php';
  $user_mail = $_POST['username'];
  $password = $_POST['password'];

  // Checks if user_mail and password is empty, return them to index page with error message
  if (empty($user_mail) || empty($password)) {
    header("Location: ../index.php?error=noUnameOrPwd");
    exit();
  }

  // Prepares sql statement and start connection to database
  else {
    if ($_POST['user_login'] == "reg_user") {
      $sql = 'SELECT * FROM customer WHERE username=? OR email=?';
    }
    else if ($_POST['user_login'] == "emp_user") {
      $sql = 'SELECT * FROM employee WHERE username=? OR email=?';
    }
    $stmt = mysqli_stmt_init($connection);

    // Checks to see if the SQL query is properly prepared
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlError");
      exit();
    }

    // Binds the username and email and execute the prepared query
    else {
      mysqli_stmt_bind_param($stmt, "ss", $user_mail, $user_mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      // Checks if there is something in the row
      if ($row = mysqli_fetch_assoc($result)) {

        // If so, verify password in the row and POST password
        $pwdCheck = password_verify($password, $row['password']);
        if ($pwdCheck == false) {

          // Checks if user inputted false password and redirects them back to index page
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }

        // Checks if the password matches and creates session variables
        else if ($pwdCheck == true) {

          // Checks if the user is a regular user
          if ($_POST['user_login'] == "reg_user") {
            $_SESSION['u_name'] = $row['username'];
            $_SESSION['f_name'] = $row['first_name'];
            $_SESSION['l_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['c_id'] = $row['c_id'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['address2'] = $row['address2'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['phone'] = $row['phone_number'];
            $_SESSION['zip'] = $row['zipcode'];
          }

          // Checks if the user is an employee
          else if ($_POST['user_login'] == "emp_user") {
            $_SESSION['u_name'] = $row['username'];
            $_SESSION['f_name'] = $row['first_name'];
            $_SESSION['l_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['emp_id'] = $row['emp_id'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['address2'] = $row['address2'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['phone'] = $row['phone_number'];
            $_SESSION['zip'] = $row['zipcode'];
          }
          header("Location: ../index.php?login=success");
          exit();
        }

        // If not, return them back to index.php with an error message
        else {
          header("Location: ../index.php?error=emptyfields");
          exit();
        }
      }

      // If not, return them back to index.php with an error message
      else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}

// If they try to login to the page via URL, redirect them to the index page
else {
  header("Location: ../index.php");
  exit();
}

?>
