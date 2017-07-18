<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by battalionNo</title>
  
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
	if(empty($_POST['BattalionNo'])){
		echo "<script>window.alert('Plese enter BattalionNo!')</script>";
		echo "<script>window.history.go(-1)</script>";
	}else{
		$count=0;
		$BattalionNo= $_POST['BattalionNo'];
		
		
		$sql = "SELECT *  FROM militaryinfo WHERE `batNum` = $BattalionNo ";
		
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo "<br>";
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>Battalion No</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['batNum'].'</td>';
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
  
