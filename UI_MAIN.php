<html>
    <head>
    <meta charset = "utf-8"/>
    <link rel = "styleSheet" href="../CSS_SMS/style_main_file.css"><title>Messaging system</title></head>
    
    <body>
    <h1><div class = "myfirst2"><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big><img src ="army-crest.svg" alt="army crest" align="middle"></font>
	<br><button2><a href="UI_LOGIN.php"><font size="3">Logout</font></a><button2></div></h1>
	
	<form action="" method="get">
	<fieldset>
	<legend><font size="5">Menu</font></legend>
        <input type="button" value= "Create new message" name = "button1" onclick="window.location.href='UI_CREATE_MESSAGE.php'"/>
        <br><br>
        <input type="button" value="See older messages" name = "button2" onclick="window.location.href='UI_OLDER_MESSAGE.php'"/>
		<br><br>
		<button1>
		<input type="button" value="Back To Homepage" name = "button3" onclick="window.location.href='UI_SELECT.php'"/></button1>
		</fieldset>
		</form>
    
    </body>
</html>