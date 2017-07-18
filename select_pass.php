<?php
session_start();
if ($_SESSION['UserType'] == "level_1_officer"){
	header("location: UI_LEVEL1.php");
}
else if($_SESSION['UserType'] == "level_2_officer"){
	header("location: UI_LEVEL2.php");
}
else{
	header("location: inventoryUI.php");
}


?>