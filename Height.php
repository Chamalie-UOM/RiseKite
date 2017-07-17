<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by height</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Search By Height</h2>
        
        <fieldset>
          <label>Range:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range"><label for="greater_than" class="light">greater_than</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range"><label for="less_than" class="light">less_than</label><br>
		  <input type="radio" id="equal" value="equal" name="Range"><label for="equal" class="light">equal</label><br><br>
          
          <label for="height">Height:</label>
          <input type="text" id="height" name="Height">
          
		  
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="Height.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(empty($_POST['Height'])){
	echo"Plese enter height";
	
	
	}else if(isset($_POST['Range'])==null){
		echo"You should select the range !!";
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
		echo " NO SOLDIERS WITH GIVEN HEIGHT IN THIS BATTALION!!!!! ";
	} 


}
}
?>	
  

