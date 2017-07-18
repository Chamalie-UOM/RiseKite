<?php
$user = 'root';
$password = 'secret';
$database = 'qstore';



$db = new mysqli('localhost',$user,$password,$database);
if (mysqli_connect_error()){
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connected Successfully";
?>
