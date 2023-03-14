<?php

$server = "shobhaserver.mysql.database.azure.com";
$userid ="admin123";
$Password = "shobha@123456789";
$myDB = "states";
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "shobhaserver.mysql.database.azure.com", "admin123", "shobha@123456789", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
