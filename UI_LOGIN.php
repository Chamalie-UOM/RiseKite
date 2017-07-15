<html>
<head>
    <meta charset="utf-8"/>
    <link rel="styleSheet" href="../CSS/style_login_origin.css">
    <title>Login</title>
    
    </head>
 <body>
    <div class="myClass"><font size="5" color="darkolivegreen"><h1 align ="center"> Sri Lanka Army<img src ="army-crest.svg" alt="army crest" align="middle"></h1></font></div>
     <br><br>
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
    <input type="submit" value="login"/>
    </p>       
     </fieldset> 
        </div>
    </form> 
    </body>
</html>

<?php

if ((isset($_POST["username"])) && (isset($_POST["password"]))){
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);
	@mysql_select_db('messagesdb') or die($conn_error);
	
	if (!get_magic_quotes_gpc()){
		
		$new_username = addslashes($_POST["username"]);
        $new_password = addslashes($_POST["password"]);
	}
	else{
		$new_username = $_POST["username"];
        $new_password = $_POST["password"];
	}
	echo "<br>";
	
	
	$query="SELECT * FROM users WHERE User_Name='".$new_username."'";
	if ($is_query_run=mysql_query($query,$conn)){
		while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			if ($new_password == $row['Password']){
                echo "Logged in successfully";
                exec("UI-level1.html");

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