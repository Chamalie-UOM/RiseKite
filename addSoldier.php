<?php 
 //errors
 /*$idErr = $firstNameErr = $lastNameErr = $DOBErr = $genderErr = "";
 //validating data(removing extra spaces etc.)
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  include 'dbCon.php';
// create a variable
 if (empty($_POST["id"])) {
    $idErr = "id is required";
  } else {
    $id = test_input($_POST["id"]);
  }
if(isset($_POST['id'])){
$id=$_POST['id'];
}
if(isset($_POST['firstName'])){
$first_name=$_POST['firstName'];
}
if(isset($_POST['lastName'])){
$last_name=$_POST['lastName'];
}
if(isset($_POST['DOB'])){
$DOB=$_POST['DOB'];
}
if(isset($_POST['gender'])){
$gender=$_POST['gender'];
}
if(isset($_POST['age'])){
$age=$_POST['age'];
}
if(isset($_POST['marital'])){
$marital=$_POST['marital'];
}
if(isset($_POST['height'])){
$height=$_POST['height'];
}
if(isset($_POST['weight'])){
$weight=$_POST['weight'];
}
if(isset($_POST['shoe'])){
$shoe=$_POST['shoe'];
}
if(isset($_POST['tpNum'])){
$tpNum=$_POST['tpNum'];
}
//edQualifications
if(isset($_POST['olResults'])){
$ol=$_POST['olResults'];
}
if(isset($_POST['alResults'])){
$al=$_POST['alResults'];
}
//militaryInfo
if(isset($_POST['DOE'])){
$DOE=$_POST['DOE'];
}
if(isset($_POST['regiment'])){
$regiment=$_POST['regiment'];
}
if(isset($_POST['batNum'])){
$batNum=$_POST['batNum'];
}
if(isset($_POST['rank'])){
$rank=$_POST['rank'];
}



//Execute the query 
/*mysqli_query($link,"INSERT INTO personalInfo(id,firstName,lastName,DOB,gender,age,marital,height,weight,shoe,tpNum)
				VALUES('$id','$first_name','$last_name','$DOB','$gender','$age','$marital','$height','$weight','$shoe','$tpNum')");

mysqli_query($link,"INSERT INTO edQualifications(id,olResults,alResults) VALUES('$id','$ol','$al')");

mysqli_query($link,"INSERT INTO militaryInfo(id,DOE,regiment,batNum,rank) VALUES('$id','$DOE','$regiment','$batNum','$rank')");
				
if(mysqli_affected_rows($link) > 0){
	echo "<h1>Soldier added successfully.</h1>";
	echo "<a href='addSoldier.php'> Go Back</a>" ;
}else{
	echo "<h1>Soldier not added.</h1>".$link->error;
}

 }		
function required()  
{  
var empt = document.forms["form1"]["text1"].value;  
if (empt == "")  
{  
alert("Please input a Value");  
return false;  
}   */
?>
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
<form  action="addEntry.php" method="POST">
  <fieldset>
    <legend> <font size="5">Personal information:</font></legend>
	<label> ID </label> <input type="text" name="id"><br>
    <label> First name: </label> <textarea name= "firstName" rows ="1" cols ="100" > </textarea> <br> <br>
    <label> Last name: </label> <textarea name= "lastName" rows="1" cols="100" ></textarea> <br><br>
	<label>Date of Birth:  </label><input type="date" name="DOB" ><br><br>
	<label> Gender:	 </label><input type="radio" name="gender" value="male" checked> Male <br>
	<input type="radio" name="gender" value="female"> Female<br>
	<label> Age: </label> <input type="number" name="age" min="18" max="55"><br>
	<label> Marital Status: </label> <select name="marital"><br>
	<option value="single">Single</option>
    <option value="married">Married</option></select>
	<label> Height(cm):  </label> <input type="text" name="height"><br>
	<label> Weight(kg): </label> <input type="text" name="weight"><br>
	<label> Shoe size: </label> <input type="number" name="shoe" min="1" max="20"><br>
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
	<label> Battalion number:  </label> <input type="number" name="batNum"  min="1" max="23"><br>
	<label> Rank:  </label> <input type="number" name="rank" min="1"><br>
	</fieldset><br>
  <input type="submit" value="Submit" >
</form>

 </body>
 </html>

