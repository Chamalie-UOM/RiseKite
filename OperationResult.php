<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>query1</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> Advance Search Results<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
<back><a href="AdvanceSearch.php">Back to AdvanceSearch</a></back> 
</header>
  
</head>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(empty($_POST['BattalionNo'])){
		echo "<script>window.alert('Please enter BattalionNo!!')</script>";
		echo"<script>window.history.go(-1)</script>";
	} else if(empty($_POST['Rank'])){
		echo "<script>window.alert('Please enter rank !!')</script>";
		echo"<script>window.history.go(-1)</script>";
	}else if(empty($_POST['Height'])){
		echo "<script>window.alert('Please enter height !!')</script>";
		echo"<script>window.history.go(-1)</script>";
	}else if(isset($_POST['Range1'])==null){
		echo "<script>window.alert('You should select the range for Age !!')</script>";
		echo"<script>window.history.go(-1)</script>";
	}else if(empty($_POST['Age'])){
		echo "<script>window.alert('Please enter age !!')</script>";
		echo"<script>window.history.go(-1)</script>";
	}else{
	$count=0;
	$gender = $_POST['Gender'];
	$marital=$_POST['MaritalStatus'];
	$english=$_POST['english'];
	$range1 = $_POST['Range1'];
	$age = $_POST['Age'];
	$regiment = $_POST['regiment'];
	$rank=$_POST['Rank'];
	$battalionNo=$_POST['BattalionNo'];
	$height=$_POST['Height'];
	$array1=array();
	$array2=array();
	$array3=array();
	$array4=array();
		
		
		if($gender=="both"){
		$sql1 = "SELECT *  FROM personalinfo WHERE  marital='".$marital."' " ;
		
		}else{
		$sql1 = "SELECT *  FROM personalinfo WHERE gender = '".$gender."' AND marital='".$marital."' AND height > $height " ;
		}
		if($is_query_run=mysql_query($sql1,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array1,$row['id']);
			
			
		}}
		$sql2 = "SELECT *  FROM edQualifications WHERE engFluency = '".$english."' " ;
		if($is_query_run=mysql_query($sql2,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			array_push($array2,$row['id']);
			
		}
		}
	
		
		if($range1=="greater_than"){
		$sql3 = "SELECT *  FROM personalinfo WHERE `age` >  $age  ";
		}else if($range1=="less_than"){
		$sql3 = "SELECT *  FROM personalinfo WHERE `age` < $age ";	
		}else if($range1=="equal"){
		$sql3 = "SELECT *  FROM personalinfo WHERE `age` = $age ";		
		}
		if($is_query_run=mysql_query($sql3,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array3,$row['id']);
			
		}
		}
		$sql4 = "SELECT *  FROM militaryinfo WHERE regiment = '".$regiment."' AND rank < $rank  AND batNum = $battalionNo" ;
		if($is_query_run=mysql_query($sql4,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array4,$row['id']);
			
		}
		}
		$result=array_intersect($array4,$array1,$array2,$array3);
		
		if(empty($result)){
			echo "<br>";
			echo "No soldiers satisfy given conditions";
		}else{
			echo "<br>";
			echo "Eligible Soldiers:";
			echo '<table border=2px>';
			echo '<th>Id</th>';
			
		foreach($result as $element){
			echo '<tr>';
	   	 	echo '<td>'.$element.'</td>';
			
		
		}
		}
		
}
}
?>	
  