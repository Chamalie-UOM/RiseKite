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

 
//Execute the query 
mysqli_query($link,"INSERT INTO personalInfo(firstName,lastName,id,DOB,gender)
				VALUES('$first_name','$last_name','$id','$DOB','$gender')");

				
if(mysqli_affected_rows($link) > 0){
	echo "<p>Soldier Added</p>";
	echo "<a href='addSoldier.php'> Go Back</a>" ;
}else{
	echo "Soldier not added.".$link->error;
}				
				
				
?>