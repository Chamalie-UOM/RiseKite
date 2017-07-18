<?php
$servername = "localhost";
$username = "chamalie";
$password = "Chamalie$1995";

// Create connection
$conn = new mysqli($servername, $username, $password);
 // Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
 }
 echo "Connected Successfully";

// Create database
$sql = "CREATE DATABASE SoldierInfo";
if ($conn->query($sql) === TRUE) {
   echo "Database created successfully";
} else {
   echo "Error creating database: " . $conn->error;
}
$conn->close();

$db="SoldierInfo";
$link = new mysqli($servername, $username, $password, $db);
//create table
$tbl_pinfo = "CREATE TABLE personalInfo  (
id INT(6) NOT NULL PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL
)"; 
if( $link->query($tbl_pinfo) ) {
	echo "table personalInfo created successfully";
}else{
	echo "error creating table personalInfo". $link->error;
}
 $tbl_edQf=" CREATE TABLE edQualifications(
 olResults VARCHAR(500) NOT NULL,
 alResults VARCHAR(300) NOT NULL
 )";
 
 if( $link->query($tbl_edQf) ) {
	echo "table edQualifications created successfully";
}else{
	echo "error creating table edQualifications". $link->error;
}
 
?>