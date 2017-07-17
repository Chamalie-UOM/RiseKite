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
      
        <h2>Search By Shoe Size</h2>
        
        <fieldset>
          <label>Range:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range"><label for="greater_than" class="light">greater_than</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range"><label for="less_than" class="light">less_than</label><br>
		  <input type="radio" id="equal" value="equal" name="Range"><label for="equal" class="light">equal</label><br><br>
          
          <label for="shoe size">Shoe Size:</label>
          <input type="text" id="shoe size" name="shoeSize">
          
		  
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="ShoeSize.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(empty($_POST['shoeSize'])){
	echo"Plese enter shoe size";
	
	
	}else if(isset($_POST['Range'])==null){
		echo"You should select the range!!";
	}else{
		$count=0;
		$shoeSize = $_POST['shoeSize'];
		$range = $_POST['Range'];
		
		if($range=="greater_than"){
		$sql = "SELECT *  FROM personalinfo WHERE `shoe` > $shoeSize ";
		}else if($range=="less_than"){
		$sql = "SELECT *  FROM personalinfo WHERE `shoe` < $shoeSize ";	
		}else if($range=="equal"){
		$sql = "SELECT *  FROM personalinfo WHERE `shoe` = $shoeSize ";		
		}
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>FirstName</th><th>LastName</th><th>ShoeSize</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['firstName'].'</td><td>'.$row['lastName'].'</td><td>'.$row['shoe'].'</td>';
			echo '</tr>';
			$count=1;
   		}
	}
	if($count==0){
		echo " NO SOLDIERS WITH GIVEN SHOE SIZE IN THIS BATTALION!!!!! ";
	} 


}
}
?>	
  

