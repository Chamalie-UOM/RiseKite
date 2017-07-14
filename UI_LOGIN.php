<html>
<head>
    <meta charset="utf-8"/>
    <link rel="styleSheet" href="Style_login.css">
    <title>Login</title>
    </head>
<body>
    <form action="UI_LOGIN.php" method="get">
    <div class="myClass"><br>
    <img src="download.png" alt="logo"/>
    <fontx><h1 align="center"><font color="darkolivegreen">Sri Lanka Army</font></h1>
    </fontx>
    
    </div>
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

if ((isset($_GET["username"])) && (isset($_GET["password"]))){
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);
	@mysql_select_db('messagesdb') or die($conn_error);
	
	if (!get_magic_quotes_gpc()){
		
		$new_username = addslashes($_GET["username"]);
        $new_password = addslashes($_GET["password"]);
	}
	else{
		$new_username = $_GET["username"];
        $new_password = $_GET["password"];
	}
	echo "<br>";
	
	
	$query="SELECT * FROM users WHERE User_Name='".$new_username."'";
	if ($is_query_run=mysql_query($query,$conn)){
		while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			if ($new_password == $row['Password']){
                echo "Logged in successfully";
                exec("UI_CONFIRM.html");

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