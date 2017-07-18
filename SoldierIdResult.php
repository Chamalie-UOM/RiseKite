<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by soldierId</title>
  
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
	if(empty($_POST['SoldierId'])){
	
	echo "<script>window.alert('Plese enter Soldier Id!!')</script>";
	echo"<script>window.history.go(-1)</script>";
	}else{
		$count=0;
		$count1=0;
		$SoldierId = $_POST['SoldierId'];
		
		
		$sql = "SELECT *  FROM personalinfo WHERE id LIKE '%" .$_POST['SoldierId']  . "%' ";
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo "<br>";
			echo "PersonalInfo:";
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>FirstName</th><th>LastName</th><th>DOB</th><th>Height</th><th>Shoe Size</th><th>Weight</th><th>Age</th><th>Gender</th><th>Marital Status</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['firstName'].'</td><td>'.$row['lastName'].'</td><td>'.$row['DOB'].'</td><td>'.$row['height'].'</td><td>'.$row['shoe'].'</td><td>'.$row['weight'].'</td><td>'.$row['age'].'</td><td>'.$row['gender'].'</td><td>'.$row['marital'].'</td>';
			echo '</tr>';
			
			$count=1;
   		}
	}
		
		$sql1 = "SELECT *  FROM militaryinfo WHERE id LIKE '%" .$_POST['SoldierId']  . "%' ";
		if($is_query_run=mysql_query($sql1,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count1==0){
			echo "<br>";
			echo '<table border=2px>';
			echo "MillitaryInfo:"."<br><br>";
		echo '<th>Id</th><th>DOE</th><th>Regiment</th><th>BattalionNo</th><th>Rank</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['DOE'].'</td><td>'.$row['regiment'].'</td><td>'.$row['batNum'].'</td><td>'.$row['rank'].'</td>';
			$count=1;
   		}
	}
		
	if($count==0){
		echo "<br>";
		echo "NO SOLDIERS MATCH YOUR SEARCH!!!";
		
	} 


}
}
?>	
  