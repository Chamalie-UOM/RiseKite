<head><link rel="stylesheet" type="text/css" href="hrstyle.css"></head>
<body>
<header>
<h1 align= "center" > Human Resources Management <img src ="armyCrest.svg" alt="army crest" align="middle"></h1>
</header></body>
<?php include 'dbCon.php';
function length($inputtxt,$length)  
{     
   $userInput = $inputtxt;    
   if(strlen($userInput) == $length )  
      {       
        return true;      
      }  
   else  
      {                
        return false;     
      }    
}  
/*function allLetter($inputtxt)  
  {  
    $letters = /^[A-Za-z]+$/;  
   if(inputtxt.value.match(letters))  
     {  
      return true;  
     }  
   else  
     {    
     return false;  
     }  
  }  </script> */

$errors="";
// create a variable
if(empty($_POST['id'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(length($_POST['id'],'7')){
	$id=$_POST['id'];
}else{
	$errors="error-invalid id";
	echo "<script> alert('error-please enter a valid ID')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}
if(empty($_POST['firstName'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_alpha($_POST['firstName'])== false ){
	$errors="first name should only contain letters";
	echo "<script> alert('error-first name should only contain letters')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$first_name=$_POST['firstName'];
}
if(empty($_POST['lastName'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_alpha($_POST['lastName'])== false ){
	$errors="Last name should only contain letters";
	echo "<script> alert('error-Last name should only contain letters')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$last_name=$_POST['lastName'];
}
if(empty($_POST['DOB'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$DOB=$_POST['DOB'];
}
if(empty($_POST['gender'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$gender=$_POST['gender'];
}
if(empty($_POST['age'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$age=$_POST['age'];
}
if(empty($_POST['marital'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self'); </script>";
}else{
$marital=$_POST['marital'];
}
if(empty($_POST['height'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_digit($_POST['height'])== false ){
	$errors="please enter a valid height";
	echo "<script> alert('Error-please enter a valid height')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$height=$_POST['height'];
}
if(empty($_POST['weight'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_digit($_POST['weight'])== false ){
	$errors="please enter a valid weight";
	echo "<script> alert('Error-please enter a valid weight')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$weight=$_POST['weight'];
}
if(empty($_POST['shoe'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$shoe=$_POST['shoe'];
}
if(empty($_POST['tpNum'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(length($_POST['tpNum'],'11')){
	$tpNum=$_POST['tpNum'];
}else{
	$errors="error-invalid id";
	echo "<script> alert('error-please enter a valid telephone number starting with 94')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}

//edQualifications
if(empty($_POST['olResults'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$ol=$_POST['olResults'];
}
if(empty($_POST['alResults'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$al=$_POST['alResults'];
}
//militaryInfo
if(empty($_POST['DOE'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$DOE=$_POST['DOE'];
}
if(empty($_POST['regiment'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$regiment=$_POST['regiment'];
}
if(empty($_POST['batNum'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$batNum=$_POST['batNum'];
}
if(empty($_POST['rank'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$rank=$_POST['rank'];
}

if(empty($errors)){
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
}

				
?>