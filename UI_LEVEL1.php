<!DOCTYPE html>
<html>
<head>
<title> Home Page </title>
<link rel="stylesheet" type="text/css" href="../CSS/homeStyle.css">
</head>
<body>
<header>
<font size="5"><h1 align ="center"> Sri Lanka Army<img src ="army-crest.svg" alt="army crest" align="middle"></h1></font> 
<button2><button type="button" name="logout" onclick="window.location.href='UI_LOGIN.php'">logout</button><button2></header>
<br><br>
<form>
<fieldset>
<legend><font size="5"> Menu</font></legend>
<br>
<button type="button" onclick ="location.href='hrUI.html'" class ="button" > Human Resource Management </button> <br><br>
<select name="search" onchange= "window.location.href= this.value">
  <option> </option>
  <option value="NormalSearch.html">General Search</option>
  <option value="AdvancedSearch.html">Advanced Search</option></select>
<label> (Select Search Type to enter the searching page) </label> <br><br> 
<button type="button" class="button" onclick = "window.location.href='UI_CREATE_MESSAGE.php'"> Instant Messaging </button> <br><br>
<button type="button" class ="button" onclick ="location.href='inv.html'"> Lookup Inventory </button> <br><br>
<button type="button" class ="button" onclick ="window.location.href='UI_PASSWORD.php'"> Change password </button> <br><br>
<button type="button" class ="button" onclick ="window.location.href='UI_MESSAGE_CON.php'">Approve Messages</button>
</fieldset>
</form>
</body>
</html>