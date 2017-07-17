<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by Regiment</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Search By Regiment</h2>
        
        <fieldset>
          
         <label for="regiment";>Regiment:</label>
		<select id="regiment" name="regiment">
			
	    
		<option value="Sri Lanka Armoured Corps">Sri Lanka Armoured Corps</option>
		<option value="Sri Lanka Light Infantry">Sri Lanka Light Infantry</option>
		<option value="Sri Lanka Sinha Regiment">Sri Lanka Sinha Regiment</option>
		<option value="Sri Lanka Vijayabahu Infantry Regiment">Sri Lanka Vijayabahu Infantry Regiment</option>
		<option value="Gemunu Watch">Gemunu Watch</option>
		<option value="Gajaba Regiment">Gajaba Regiment</option>
		<option value="Mechanized Infantry Regimeent">Mechanized Infantry Regimeent</option>
		<option value="Commando Regiment">Commando Regiment</option>
		<option value="Special Forces Regiment">Special Forces Regiment</option>
		<option value="Sri Lanka Artillery Regiment">Sri Lanka Artillery Regiment</option>
		<option value="Sri Lanka Engineers">Sri Lanka Engineers</option>
		


			</select> 
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="MaritalStatus.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
		$count=0;
		$regiment = $_POST['regiment'];
		
		
		$sql = "SELECT *  FROM militaryinfo WHERE regiment = '".$regiment."' " ;
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
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
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}

?>	
  

