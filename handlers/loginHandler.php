<?php
session_start();

// Checks if user presses login button
if(isset($_POST["login"])) {

  // Connects to the database using db_connect.php and sets the POST variables
  require '../db_connect.php';
  $user_mail = $_POST['username'];
  $password = $_POST['password'];

  // Checks if user_mail and password is empty, return them to index page with error message
  if (empty($user_mail) || empty($password)) {
    header("Location: ../index.php?error=noUsernameOrPassword");
    exit();
  }

  // Prepares sql statement and start connection to database
  else {
    $sql = 'SELECT * FROM customers WHERE username=? OR email=?';
    $stmt = mysqli_stmt_init($connection);

    // Checks if the database doesn't have a username or email the user inputted, return them to the index page with an error message
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlError");
      exit();
    }

    // Binds the username and email and get result
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
          session_start();
          $_SESSION['u_name'] = $row['username'];
          $_SESSION['f_name'] = $row['firstname'];
          header("Location: ../index.php?success=login");
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
