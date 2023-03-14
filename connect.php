<?php

$server = "shobhaserver.mysql.database.azure.com";
$userid ="admin123";
$Password = "shobha@123456789";
$myDB = "states";
$con = mysqli_init();
mysqli_real_connect($con, "shobhaserver.mysql.database.azure.com", "admin123", "shobha@123456789", "{states}", 3306);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
