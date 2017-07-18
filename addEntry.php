<head><link rel="stylesheet" type="text/css" href="../hr/styleshr.css"></head>
<body>
<header>
<h1 align= "center" > Human Resources Management <img src ="armyCrest.svg" alt="army crest" align="middle"></h1>
<logout><a href="../SMS/UI_LOGIN.php">Logout<logout></a>
</header></body>
<?php include 'dbCon.php';
//validate date

//validate length
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
//validate data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  

$errors="";
// create a variable
if(empty(test_input($_POST['id']))){
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
if(empty(test_input($_POST['firstName']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_alpha(test_input($_POST['firstName']))== false ){
	$errors="first name should only contain letters";
	echo "<script> alert('error-first name should only contain letters')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$first_name=test_input($_POST['firstName']);
}
if(empty(test_input($_POST['lastName']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_alpha(test_input($_POST['lastName']))== false ){
	$errors="Last name should only contain letters";
	echo "<script> alert('error-Last name should only contain letters')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$last_name=test_input($_POST['lastName']);
}
if(empty(test_input($_POST['DOB']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
//}else if(){
	//$errors="error-enter a valid date.";
	//echo "<script> alert('error-Enter a valid date for date of birth.')</script>";
	//echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$DOB=test_input($_POST['DOB']);
}
if(test_input(empty($_POST['gender']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$gender=test_input($_POST['gender']);
}
if(empty(test_input($_POST['age']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$age=test_input($_POST['age']);
}
if(empty(test_input($_POST['marital']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self'); </script>";
}else{
$marital=test_input($_POST['marital']);
}
if(empty(test_input($_POST['height']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_digit(test_input($_POST['height']))== false ){
	$errors="please enter a valid height";
	echo "<script> alert('Error-please enter a valid height')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$height=test_input($_POST['height']);
}
if(empty(test_input($_POST['weight']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(ctype_digit(test_input($_POST['weight']))== false ){
	$errors="please enter a valid weight";
	echo "<script> alert('Error-please enter a valid weight')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$weight=test_input($_POST['weight']);
}
if(empty(test_input($_POST['shoe']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$shoe=test_input($_POST['shoe']);
}
if(test_input(empty($_POST['tpNum']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(length($_POST['tpNum'],'11')){
	$tpNum=($_POST['tpNum']);
}else{
	$errors="error-invalid id";
	echo "<script> alert('error-Please enter a valid telephone number starting with 94')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}

//edQualifications
if(empty(test_input($_POST['olResults']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$ol=test_input($_POST['olResults']);
}
if(empty(test_input($_POST['alResults']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$al=test_input($_POST['alResults']);
}
if(empty(test_input($_POST['engFluency']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self'); </script>";
}else{
$engFluency=test_input($_POST['engFluency']);
}
//militaryInfo
if(empty(test_input($_POST['DOE']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
//}else if(){
	//$errors="error-enter a valid date.";
	//echo "<script> alert('error-Enter a valid date for date of enlistment.')</script>";
	//echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$DOE=test_input($_POST['DOE']);
}
if(empty(test_input($_POST['regiment']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$regiment=test_input($_POST['regiment']);
}
if(empty(test_input($_POST['batNum']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$batNum=test_input($_POST['batNum']);
}
if(empty(test_input($_POST['rank']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else{
$rank=test_input($_POST['rank']);
}

if(empty($errors)){
//Execute the query 
mysqli_query($link,"INSERT INTO personalInfo(id,firstName,lastName,DOB,gender,age,marital,height,weight,shoe,tpNum)
				VALUES('$id','$first_name','$last_name','$DOB','$gender','$age','$marital','$height','$weight','$shoe','$tpNum')");

mysqli_query($link,"INSERT INTO edQualifications(id,olResults,alResults,engFluency) VALUES('$id','$ol','$al','$engFluency')");

mysqli_query($link,"INSERT INTO militaryInfo(id,DOE,regiment,batNum,rank) VALUES('$id','$DOE','$regiment','$batNum','$rank')");
				
if(mysqli_affected_rows($link) > 0){
	echo "<h1>Soldier added successfully.</h1>";
	echo "<a href='addSoldier.php'> Go Back</a>" ;
}else{
	echo "<h1>Soldier not added.</h1>".$link->error;
}
}

				
?>