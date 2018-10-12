<?php

//MySQL Database credentials

$db_host = "localhost";
$db_username = "root";
$db_password = "root";
$db = "tester";
$db_port = "3306";

$connect = mysqli_connect($db_host, $db_username, $db_password, $db);

if (!$connect) {
  die("Connection Failed: " . mysqli_connect_error());
} else
  {
    echo "connected successfully";
  }
?>
