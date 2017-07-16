<head><link rel="stylesheet" type="text/css" href="hrstyle.css"></head>
<body>
<header>
<h1 align= "center" > Human Resources Management <img src ="armyCrest.svg" alt="army crest" align="middle"></h1>
</header></body>

<?php include 'dbCon.php';
// create a variable
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
mysqli_query($link,"INSERT INTO personalInfo(id,firstName,lastName,DOB,gender,age,marital,height,weight,shoe,tpNum)
				VALUES('$id','$first_name','$last_name','$DOB','$gender','$age','$marital','$height','$weight','$shoe','$tpNum')");

mysqli_query($link,"INSERT INTO edQualifications(id,olResults,alResults) VALUES('$id','$ol','$al')");

mysqli_query($link,"INSERT INTO militaryInfo(id,DOE,regiment,batNum,rank) VALUES('$id','$DOE','$regiment','$batNum','$rank')");
				
if(mysqli_affected_rows($link) > 0){
	echo "<h1>Soldier added successfully.</h1>";
	echo "<a href='addSoldier.php'> Go Back</a>" ;
}else{
	echo "<h1>Soldier not added.</h1>".$link->error;
}				
?>