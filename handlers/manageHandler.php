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
  $comment = $_POST['comment'];
  $city = $_POST['city_up'];

  // Preparing a query to update tracking fields
      $sql = 'UPDATE parcel
      SET date_shipped = ?, date_received = ?, weight = ?, delivered = ?,
      dev_type = ?, comments = ?
      WHERE c_id = '. $c_i;
      $stmt = mysqli_stmt_init($connection);

      // Checks to see if the INSERT SQL query is prepared properly
       if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("Location: ../manageDelivery.php?error=sqlUpdateError");
         exit();
       }

       // If the query is prepared properly, bind and execute the insert SQL query to the database
       else {
         mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $username, $email, $address, $address2,
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
         header('Location: ../manageDelivery.php?update=success');
       }
    }
  }

}
 ?>
