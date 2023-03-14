<?php

$server = "shobhaserver.mysql.database.azure.com";
$userid ="admin123";
$Password = "shobha@123456789";
$myDB = "states";
$con = mysqli_connect($server,$userid,$Password,$myDB);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>