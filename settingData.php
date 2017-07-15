<?php
if (!get_magic_quotes_gpc()){
		
		$new_group = addslashes($_GET["group"]);
		$new_message = addslashes($_GET["message"]);
	}
	else{
		$new_group = $_GET["group"];
		$new_message = $_GET["message"];
	}
?>