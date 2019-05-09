<?php
session_start();
// Checks if user presses the register button
if (isset($_POST['update'])) {

  require '../db_connect.php';

  // Sets POST variables to easy to understand variables
  $date_shipped = $_POST['shipped'];
  $date_received = $_POST['received'];
  $weight = $_POST['weight'];
  $delivery = $_POST['delivery'];
  $dev_type = $_POST['dev_type'];
  $comment = $_POST['comments'];
  $checked = $_POST['trackCheck'];

  if (empty($checked)) {
    header("Location: ../manageDelivery.php?error=noCheckedTracking");
  }
  else {

    // Loop that iterates the checkbox array to see how many rows will be updated
    foreach ($checked as $value) {

      // Preparing a query to update tracking information
      $sql = 'UPDATE parcel
      SET date_shipped = ?, date_received = ?, weight = ?, delivered = ?,
      dev_type = ?, comments = ?
      WHERE tn = ?';
      $stmt = mysqli_stmt_init($connection);

       if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("Location: ../manageDelivery.php?error=sqlUpdateError");
         exit();
       }

       // If the query is prepared properly, bind and execute the update SQL query to the database
       else {

         // Checks to see if the UPDATE SQL query is prepared properly
         mysqli_stmt_bind_param($stmt, "sssssss", $date_shipped, $date_received, $weight, $delivery, $dev_type, $comment, $value);
         mysqli_stmt_execute($stmt) or die(mysqli_error($connection));
         $result = mysqli_stmt_get_result($stmt);

         header('Location: ../manageDelivery.php?update=success');
      }
    }
  }
}
?>
