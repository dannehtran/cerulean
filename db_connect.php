<?php

//MySQL Database credentials

$db_local = "localhost";
$db_local_username = "root";
$db_local_password = "root";
$db_host = "cer-db-instance.cevlxrbmakpq.us-west-2.rds.amazonaws.com";
$db_username = "cerulean_user";
$db_password = "citodvn480";
$db = "cerulean_shipping";
$db_port = "3306";

// Checks the HTTP of the host and decides if its localhost or accessible through the internet
if ($_SERVER['HTTP_HOST'] == "localhost") {
  $connection = mysqli_connect($db_local, $db_local_username, $db_local_password, $db);
}
else {
  $connection = mysqli_connect($db_host, $db_username, $db_password, $db);
}
?>
