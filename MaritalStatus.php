<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by MaritalStatus</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Search By Gender</h2>
        
        <fieldset>
          
         <label for="MaritalStatus";> :</label>
		<select id="MaritalStatus" name="MaritalStatus">
			
	    
		<option value="Married">Married</option>
		<option value="Unmarried">Unmarried</option>
			</select> 
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="MaritalStatus.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
		$count=0;
		$marital = $_POST['MaritalStatus'];
		
		
		$sql = "SELECT *  FROM personalinfo WHERE marital = '".$marital."' " ;
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>FirstName</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['firstName'].'</td>';
			echo '</tr>';
			$count=1;
   		}
	}
	if($count==0){
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}

?>	
  

