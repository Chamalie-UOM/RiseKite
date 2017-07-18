<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by height</title>
  
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
	if(isset($_POST['Range'])==null){
		echo"<script>window.alert('You should select the range for height !!')</script>";
		echo"<script>window.history.go(-1)</script>";
	}else if(empty($_POST['Height'])){
		echo"<script>window.alert('Plese enter height')</script>";
		echo"<script>window.history.go(-1)</script>";
	
	
	
	}else{
		$count=0;
		$height = $_POST['Height'];
		$range = $_POST['Range'];
		
		if($range=="greater_than"){
		$sql = "SELECT *  FROM personalinfo WHERE `height` > $height ";
		}else if($range=="less_than"){
		$sql = "SELECT *  FROM personalinfo WHERE `height` < $height ";	
		}else if($range=="equal"){
		$sql = "SELECT *  FROM personalinfo WHERE `height` = $height ";		
		}
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo "<br>";
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>FirstName</th><th>LastName</th><th>Height</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['firstName'].'</td><td>'.$row['lastName'].'</td><td>'.$row['height'].'</td>';
			echo '</tr>';
			$count=1;
   		}
	}
	if($count==0){
		echo "<br>";
		echo " NO SOLDIERS WITH GIVEN HEIGHT IN THIS BATTALION!!!!! ";
	} 


}
}
?>	
  
