<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS_SMS/style_password_file.css">
    <title>Change Password</title>
</head>
<body>
    <h1><div class = "myfirst"><font color = "darkolivegreen"><big>Sri Lanka Army</big><img src ="army-crest.svg" alt="army crest" align="middle"></font><button2><a href="UI_LOGIN.php"><font size="3">Logout</font></a><button2></div></h1>

<form action="UI_PASSWORD.php" method="post">
    <fieldset>
    <legend><font size="5">Change the password</font></legend>
    <p>
    <label for="UserName:">User Name:</label>
    <input type="text" name="username"/>
<br>	
    </p>
    <p>
    <label for="NewPassWord">New Password:</label>
    <input type="password" name="password1"/>
	<br>
    </p>
	<p>
    <label for="NewPassWord">Confirm New Password  :</label>
    <input type="password" name="password2"/><br>
    </p>
	<p>
	<input type="button" value= "Back" name = "button1" onclick="window.location.href='UI_LEVEL1.php'"/>
	<input type="submit" value="Save Changes" />
    </p>
	</fieldset>
    </form>
    </body>
</html>

<?php
if ((isset($_POST['username'])) && (isset($_POST['password1'])) && (isset($_POST['password2']))){
	if (!get_magic_quotes_gpc()){
			$user = addslashes($_POST['username']);
			$pass1 = addslashes($_POST['password1']);
			$pass2 = addslashes($_POST['password2']);
	}
	else{
			$user = $_POST['username'];
			$pass1 = $_POST['password1'];
			$pass2 = $_POST['password2'];
	}
	//echo "$user<br>";
	//echo "$pass1<br>";
	//echo "$pass2";

	
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);
	@mysql_select_db('messagesdb') or die($conn_error);
	
	echo "<br>";
	//echo "connected<br>";
	$result = mysql_query("SELECT User_Name FROM users WHERE User_Name='".$user."'");
		if(mysql_num_rows($result) == 0) {
			echo "Invalid User";
		}
else{		
	
	if ("$pass1" == "$pass2"){
		$sql = "UPDATE users SET Password='$pass1' WHERE User_Name='".$user."'";
        if ($is_query_run1=mysql_query($sql,$conn)){
            echo "Password updated successfully";
            
        }
        else{
            echo "Invalid User";
        }
	}
	else{
		echo "Re enter the password";
	}
	
}
}

else{
	echo "Please fill all the fields";
}


?>