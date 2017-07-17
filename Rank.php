<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by shoe size</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Search By Rank</h2>
        
        <fieldset>
          <label>Range:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range"><label for="greater_than" class="light">greater_than</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range"><label for="less_than" class="light">less_than</label><br>
		  <input type="radio" id="equal" value="equal" name="Range"><label for="equal" class="light">equal</label><br><br>
          
          <label for="Rank">Rank:</label>
          <input type="number" id="Rank" name="rank" max="1000" min = "1">
          
		  
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="Rank.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	
	
	
	if(isset($_POST['Range'])==null){
		echo"You should select the range!!";
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
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}
}
?>	
  

