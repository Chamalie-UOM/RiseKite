<html>
<head>
    <meta charset="utf-8"/>
    <link rel="styleSheet" href="../CSS_SMS/style_login_p.css">
    <title>Login</title>
    
    </head>
 <body>
    <div class="myClass"><font size="5" color="darkolivegreen"><h1 align ="center"> Sri Lanka Army<img src ="army-crest.svg" alt="army crest" align="middle"></h1></font></div>
    <form action="UI_LOGIN.php" method="post">
    <div class="myClass2">
    <fieldset>
    <legend><h2><big>Login</big></h2></legend>
    <p>
    <label for="UserName:">User Name </label>
    <input type="text" name="username"/> 
    </p>
    <p>
    <label for="PassWord">Password  :</label>
    <input type="password" name="password"/>
    </p>
    <p>
    <input type="submit" value="Login"/>
    </p>       
     </fieldset> 
        </div>
    </form> 
    </body>

	<br><br><br><br>
	<footer><font color="aliceblue">&copy; RiseKite2017</font></footer>

</html>

<?php

if ((isset($_POST["username"])) && (isset($_POST["password"]))){
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);

	@mysql_select_db('armydb') or die($conn_error);
	
	if (!get_magic_quotes_gpc()){
		
		$new_username = addslashes($_POST["username"]);

        $new_password1 = addslashes($_POST["password"]);
	}
	else{
		$new_username = $_POST["username"];
        $new_password1 = $_POST["password"];
	}
	echo "<br>";
	
	$new_password = md5($new_password1);
	session_start();
	$_SESSION['user']=$new_username;

	$query="SELECT * FROM users WHERE User_Name='".$new_username."'";
	if ($is_query_run=mysql_query($query,$conn)){
		while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			if ($new_password == $row['Password']){
				$new_type = $row['User_Type'];
				if ("$new_type" == "level_1_officer"){
					$_SESSION['UserType'] = "level_1_officer";
					header("location: UI_LEVEL1.php");
				}
				else if ("$new_type" == "level_2_officer"){
					$_SESSION['UserType'] = "level_2_officer";
					header("location: UI_LEVEL2.php");
				}
				else{
					$_SESSION['UserType'] = "inventory_manager";

					header("location: inventoryUI.php");

					}

            }
            else{
				echo "There is an error in username or password";
            }
		}
	}
	else{
		echo 'error executing';
	}
	mysql_close($conn);
}

?>