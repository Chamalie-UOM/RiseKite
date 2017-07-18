<?php
ob_start();
session_start();
unset($_SESSION['user']);
unset($_SESSION['UserType']);
header("location:UI_LOGIN.php");
?>
