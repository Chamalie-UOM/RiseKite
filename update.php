<head><link rel="stylesheet" type="text/css" href="hrstyle.css"></head>
<body>
<header>
<h1 align= "center" > Human Resources Management <img src ="armyCrest.svg" alt="army crest" align="middle"></h1>
</header></body>
<?php
include "dbcon.php";
if(isset($_POST['Submit'])){
	$id =$_POST['ID'];
	
//personal info	
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
//Educational Qualifications
if(isset($_POST['olResults'])){
$olResults=$_POST['olResults'];
}
if(isset($_POST['alResults'])){
$alResults=$_POST['alResults'];
}
//Military Info
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
mysqli_query($link,"UPDATE personalInfo SET firstName='$first_name', lastName='$last_name', DOB='$DOB', gender='$gender',age='$age',marital='$marital',
 height='$height', weight='$weight',shoe='$shoe',tpNum='$tpNum' WHERE id='$id'");

mysqli_query($link,"UPDATE edQualifications SET olResults='$olResults',alResults='$alResults' WHERE id='$id'");

mysqli_query($link,"UPDATE militaryInfo SET DOE='$DOE',regiment='$regiment',batNum='$batNum',rank='$rank' WHERE id='$id'");
				
if(mysqli_affected_rows($link) > 0){
	echo "<h2>Soldier entry updated successfully.</h2>";
	echo "<a href='modifySoldier.html'> Go Back</a>" ;
}else{
	echo "<h2>Soldier entry has not been changed.</h2>".$link->error;
	echo "<a href='modifySoldier.html'> Return to the ID entry page.</a>" ;
}	
}			
?>
