<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by Regiment</title>
  
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
		$count=0;
		$regiment = $_POST['regiment'];
		
		
		$sql = "SELECT *  FROM militaryinfo WHERE regiment = '".$regiment."' " ;
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo "<br>";
			echo '<table border=2px>';
		
		echo '<th>Id</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>';
			echo '</tr>';
			$count=1;
   		}
	}
	if($count==0){
		echo "<br>";
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}

?>	
  

