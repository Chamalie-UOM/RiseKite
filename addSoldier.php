<!DOCTYPE html>
<html>
<head>
<title> Add new soldier </title>
<link rel="stylesheet" type = "text/css" href= "hrstyle.css">
</head>
<body>
<h1 align =center> Registration Form </h1>
<br>
<form action="addEntry.php" method="POST">
  <fieldset>
    <legend> <font size="5">Personal information:</font></legend>
	<label> ID </label> <input type="text" name="id"><br> 
    <label> First name: </label> <textarea name= "firstName" rows ="1" cols ="100" > </textarea> <br> <br>
    <label> Last name: </label> <textarea name= "lastName" rows="1" cols="100" ></textarea> <br><br>
	<label>Date of Birth:  </label><input type="date" name="DOB" ><br><br>
	<label> Gender:	 </label><input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female<br>
    </fieldset><br>
  <input type="submit" value="Submit">
</form>

 </body>
 </html>
 