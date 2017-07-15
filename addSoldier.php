<!DOCTYPE html>
<html>
<head>
<title> Add new soldier </title>
<link rel="stylesheet" type = "text/css" href= "hrstyle.css">
</head>
<body>
<header>
<h1 align =center> Registration Form </h1>
</header>
<br>
<form action="addEntry.php" method="POST">
  <fieldset>
    <legend> <font size="5">Personal information:</font></legend>
	<label> ID </label> <input type="text" name="id"><br> 
    <label> First name: </label> <textarea name= "firstName" rows ="1" cols ="100" > </textarea> <br> <br>
    <label> Last name: </label> <textarea name= "lastName" rows="1" cols="100" ></textarea> <br><br>
	<label>Date of Birth:  </label><input type="date" name="DOB" ><br><br>
	<label> Gender:	 </label><input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female<br>
	<label> Age: </label> <input type="text" name="age"><br>
	<label> Marital Status: </label> <input type="text" name="marital"><br>
	<label> Height(cm):  </label> <input type="text" name="height"><br>
	<label> Weight(kg): </label> <input type="text" name="weight"><br>
	<label> Shoe size: </label> <input type="text" name="shoe"><br>
	<label> Telephone Number:  </label> <input type="text" name="tpNum"><br>
    </fieldset><br>
	<fieldset>
	<legend> <font size='5'> Educational Qualifications</font></legend>
	<label> O/L Results: </label> <textarea name= "olResults" rows ="1" cols ="100" > </textarea> <br> <br>
    <label> A/L Results: </label> <textarea name= "alResults" rows="1" cols="100" ></textarea> <br><br>
	</fieldset><br>
	<fieldset>
	<legend> <font size='5'> Military Information </font></legend>
	<label>Date of Enlistment:  </label><input type="date" name="DOE" ><br><br>
	<label> Regiment Name:  </label> <input type="text" name="regiment"><br>
	<label> Battalion number:  </label> <input type="text" name="batNum"><br>
	</fieldset><br>
  <input type="submit" value="Submit">
</form>

 </body>
 </html>
 