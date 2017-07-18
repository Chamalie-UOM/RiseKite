<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by age</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Result<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font>
<back><a href="FinalGeneralSearch.php">Back to GeneralSearch</a></back> 
</header>
  
</head>


	</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(empty($_POST['Range'])){
	echo"<script>window.alert('Plese select range for age')</script>";
	echo"<script>window.history.go(-1)</script>";
	
	}else if(empty($_POST['Age'])){
	echo"<script>window.alert('Plese enter age')</script>";
	echo"<script>window.history.go(-1)</script>";
	
	}else if(isset($_POST['Range'])==null){
		echo"You should select the range!!";
	}else{
		$count=0;
		$age = $_POST['Age'];
		$range = $_POST['Range'];
		
		if($range=="greater_than"){
		$sql = "SELECT *  FROM personalinfo WHERE `age` > $age ";
		}else if($range=="less_than"){
		$sql = "SELECT *  FROM personalinfo WHERE `age` < $age ";	
		}else if($range=="equal"){
		$sql = "SELECT *  FROM personalinfo WHERE `age` = $age ";		
		}
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo "<br>";
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>FirstName</th><th>LastName</th><th>Age</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['firstName'].'</td><td>'.$row['lastName'].'</td><td>'.$row['age'].'</td>';
			echo '</tr>';
			$count=1;
   		}
	}
	if($count==0){
		echo "<br>";
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}
}
?>	
  
