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
<link rel="stylesheet" type = "text/css" href= "../hr/hrstyle.css">
</head>
<body>
<header>
<h1 align =center> Registration Form  </h1>
<button type="button" name="Back" onclick ="window.location.href='hrUI.html'"> Back</button>
<logout><a href="../SMS/UI_LOGIN.php">Logout</a><logout>
</header>
<br>
<form  action="addEntry.php" method="POST">
  <fieldset>
    <legend> <font size="5">Personal information:</font></legend>
	<label> ID </label> <input type="text" name="id"><br>
    <label> First name: </label> <textarea name= "firstName" rows ="1" cols ="100" required> </textarea> <br> <br>
    <label> Last name: </label> <textarea name= "lastName" rows="1" cols="100" ></textarea> <br><br>
	<label>Date of Birth:  </label><input type="date" name="DOB" ><br><br>
	<label> Gender:	 </label> <select  name="gender">   
	<option value="male">Male</option>
    <option value="female">Female</option></select><br><br>
	<label> Age: </label> <input type="number" name="age" min="18" max="55"><br><br>
	<label> Marital Status: </label> <select name="marital">
	<option value="single">Single</option>
    <option value="married">Married</option></select><br><br>
	<label> Height(cm):  </label> <input type="text" name="height"><br><br>
	<label> Weight(kg): </label> <input type="text" name="weight"><br>
	<label> Shoe size: </label> <input type="number" name="shoe" min="1" max="20"><br>
	<label> Telephone Number<br>(start with 94 instead of 0):  </label> <input type="text" name="tpNum"><br>
    </fieldset><br>
	<fieldset>
	<legend> <font size='5'> Educational Qualifications</font></legend>
	<label> O/L Results: </label> <textarea name= "olResults" rows ="1" cols ="100" > </textarea> <br> <br>
    <label> A/L Results: </label> <textarea name= "alResults" rows="1" cols="100" ></textarea> <br><br>
	<label> English Fluency: </label> <select name="engFluency">
	<option value="Professional proficiency">Professional proficiency</option>
    <option value="General proficiency">General proficiency</option></select><br><br>
	</fieldset><br>
	<fieldset>
	<legend> <font size='5'> Military Information </font></legend>
	<label>Date of Enlistment:  </label><input type="date" name="DOE" ><br><br>
	<label> Regiment Name:  </label> <select name="regiment">
	<option value="Sri Lanka Armoured Corps">Sri Lanka Armoured Corps</option>
    <option value="Sri Lanka Light Infantry">Sri Lanka Light Infantry</option>
	<option value="Sri Lanka Sinha Regiment">Sri Lanka Armoured Corps</option>
    <option value="Sri Lanka Vijayabahu Infantry Regiment">Sri Lanka Vijayabahu Infantry Regiment</option>
	<option value="Gemunu Watch">Gemunu Watch</option>
    <option value="Gajaba Regiment">Gajaba Regiment</option>
	<option value="Mechanized Infantry Regiment">Mechanized Infantry Regiment</option>
    <option value="Commando Regiment">Commando Regiment</option>
	<option value="Special Forces Regiment">Special Forces Regiment</option>
	<option value="Sri Lanka Artillery Regiment">Sri Lanka Artillery Regiment</option>
    <option value="Sri Lanka Engineers">Sri Lanka Engineers</option>
	</select><br><br>
	<label> Battalion number:  </label> <input type="number" name="batNum"  min="1" max="23"><br><br>
	<label> Rank:  </label> <input type="number" name="rank" min="1"><br><br>
	</fieldset><br>
  <input type="submit" value="Submit" >
</form>

 </body>
 </html>

