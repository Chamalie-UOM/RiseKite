<?php 
$link = new mysqli("localhost","chamalie","Chamalie$1995","SoldierInfo");
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
 }
 echo "Connected Successfully";
 ?>
 