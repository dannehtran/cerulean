<?php
session_start();
// Checks if user presses login button
if(isset($_POST["login"])) {
  require '../db_connect.php';
  $user_mail = $_POST['username'];
  $password = $_POST['password'];
  //echo $_POST['username'] . "STRING1";
  if (empty($user_mail) || empty($password)) {
    header("Location: ../index.php?error=noUsernameOrPassword");
    exit();
  }
  else {
    $sql = 'SELECT * FROM customers WHERE username=? OR email=?';
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlError");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ss", $user_mail, $user_mail);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['password']);
        if ($pwdCheck == false) {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['u_name'] = $row['username'];
          $_SESSION['f_name'] = $row['firstname'];
          header("Location: ../index.php?success=login");
          exit();
        }
        else {
          header("Location: ../index.php?error=emptyfields");
          exit();
        }
      }
      else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}
else {
  header("Location: ../index.php");
  exit();
}

?>
