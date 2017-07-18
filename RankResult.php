<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by shoe size</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Results<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font>
<back><a href="FinalGeneralSearch.php">Back to GeneralSearch</a></back> 
</header>
  
</head>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(isset($_POST['Range'])==null){
		echo"<script>window.alert('You should select the range for rank !!')</script>";
		echo"<script>window.history.go(-1)</script>";
	}else if(empty($_POST['rank'])){
		echo"<script>window.alert('Plese enter rank')</script>";
		echo"<script>window.history.go(-1)</script>";
	
	
	
	}else{
		$count=0;
		$rank = $_POST['rank'];
		$range = $_POST['Range'];
		
		if($range=="greater_than"){
		$sql = "SELECT *  FROM militaryinfo WHERE `rank` > $rank ";
		}else if($range=="less_than"){
		$sql = "SELECT *  FROM militaryinfo WHERE `rank` < $rank ";	
		}else if($range=="equal"){
		$sql = "SELECT *  FROM militaryinfo WHERE `rank` = $rank ";		
		}
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo "<br>";
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>Rank</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['rank'].'</td>';
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
  
