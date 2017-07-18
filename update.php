<head><link rel="stylesheet" type="text/css" href="../hr/styleshr.css"></head>
<body>
<header>
<h1 align= "center" > Human Resources Management <img src ="armyCrest.svg" alt="army crest" align="middle"></h1>
<logout><button type="button" name="logout" onclick="">Logout </button><logout>
</header></body>
<?php
include "dbcon.php";
if(isset($_POST['Submit'])){
	$id =$_POST['ID'];
	
//personal info	
/*if(isset($_POST['firstName'])){
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
}*/

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

$errors="";
// create a variable
/*if(empty($_POST['id'])){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else if(length($_POST['id'],'7')){
	$id=$_POST['id'];
}else{
	$errors="error-invalid id";
	echo "<script> alert('error-please enter a valid ID')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}*/
//validate data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  

$errors="";
// create a variable
/*if(empty(test_input($_POST['id']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}else if(length($_POST['id'],'7')){
	$id=$_POST['id'];
}else{
	$errors="error-invalid id";
	echo "<script> alert('error-please enter a valid ID')</script>";
	echo "<script> window.open('addSoldier.php','_self');</script>";
}*/
if(empty(test_input($_POST['firstName']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else if(ctype_alpha(test_input($_POST['firstName']))== false ){
	$errors="first name should only contain letters";
	echo "<script> alert('error-first name should only contain letters')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$first_name=test_input($_POST['firstName']);
}
if(empty(test_input($_POST['lastName']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else if(ctype_alpha(test_input($_POST['lastName']))== false ){
	$errors="Last name should only contain letters";
	echo "<script> alert('error-Last name should only contain letters')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$last_name=test_input($_POST['lastName']);
}
if(empty(test_input($_POST['DOB']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";

}else{
$DOB=test_input($_POST['DOB']);
}
if(test_input(empty($_POST['gender']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$gender=test_input($_POST['gender']);
}
if(empty(test_input($_POST['age']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$age=test_input($_POST['age']);
}
if(empty(test_input($_POST['marital']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self'); </script>";
}else{
$marital=test_input($_POST['marital']);
}
if(empty(test_input($_POST['height']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else if(ctype_digit(test_input($_POST['height']))== false ){
	$errors="please enter a valid height";
	echo "<script> alert('Error-please enter a valid height')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$height=test_input($_POST['height']);
}
if(empty(test_input($_POST['weight']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else if(ctype_digit(test_input($_POST['weight']))== false ){
	$errors="please enter a valid weight";
	echo "<script> alert('Error-please enter a valid weight')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$weight=test_input($_POST['weight']);
}
if(empty(test_input($_POST['shoe']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$shoe=test_input($_POST['shoe']);
}
if(test_input(empty($_POST['tpNum']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else if(length($_POST['tpNum'],'11')){
	$tpNum=($_POST['tpNum']);
}else{
	$errors="error-invalid id";
	echo "<script> alert('error-Please enter a valid telephone number starting with 94')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}

//edQualifications
if(empty(test_input($_POST['olResults']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$olResults=test_input($_POST['olResults']);
}
if(empty(test_input($_POST['alResults']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$alResults=test_input($_POST['alResults']);
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
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$DOE=test_input($_POST['DOE']);
}
if(empty(test_input($_POST['regiment']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$regiment=test_input($_POST['regiment']);
}
if(empty(test_input($_POST['batNum']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$batNum=test_input($_POST['batNum']);
}
if(empty(test_input($_POST['rank']))){
	$errors="error-complete all fields";
	echo "<script> alert('error-complete all fields')</script>";
	echo "<script> window.open('modifySoldier.html','_self');</script>";
}else{
$rank=test_input($_POST['rank']);
}
 if(!$errors){
//Execute the query 
mysqli_query($link,"UPDATE personalInfo SET firstName='$first_name', lastName='$last_name', DOB='$DOB', gender='$gender',age='$age',marital='$marital',
 height='$height', weight='$weight',shoe='$shoe',tpNum='$tpNum' WHERE id='$id'");
if(mysqli_affected_rows($link) > 0){
	echo "<h3>Soldier personal infomation updated successfully.</h3>";
}else{
	echo "<h3>Soldier personal infomation has not been changed.</h3>";
}
mysqli_query($link,"UPDATE edQualifications SET olResults='$olResults',alResults='$alResults',engFluency='$engFluency' WHERE id='$id'");

if(mysqli_affected_rows($link) > 0){
	echo "<h3>Soldier educational qualifications updated successfully.</h3>";
}else{
	echo "<h3>Soldier educational qualifications have not been changed.</h3>";
}
mysqli_query($link,"UPDATE militaryInfo SET DOE='$DOE',regiment='$regiment',batNum='$batNum',rank='$rank' WHERE id='$id'");
				
if(mysqli_affected_rows($link) > 0){
	echo "<h3>Soldier military infomation updated successfully.</h3>";
	
}else{
	echo "<h3>Soldier military infomation has not been changed.</h3>";
}
echo "<a href='modifySoldier.html'> Go Back</a>" ;	
}
			
}

?>