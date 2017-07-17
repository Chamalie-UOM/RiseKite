<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by Gender</title>
  
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
          
         <label for="Gender";> :</label>
		<select id="Gender" name="Gender">
			
	    
		<option value="male">Male</option>
		<option value="female">Female</option>
			</select> 
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="Gender.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
		$count=0;
		$gender = $_POST['Gender'];
		
		
		$sql = "SELECT *  FROM personalinfo WHERE gender = '".$gender."' " ;
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
			echo '<table border=2px>';
		
		echo '<th>Id</th><th>FirstName</th><th>LastName</th><th>DOB</th><th>Height</th><th>Shoe Size</th><th>Weight</th><th>Age</th><th>Gender</th><th>Marital Status</th>';
			}
         	echo '<tr>';
	   	 	echo '<td>'.$row['id'].'</td><td>'.$row['firstName'].'</td><td>'.$row['lastName'].'</td><td>'.$row['DOB'].'</td><td>'.$row['height'].'</td><td>'.$row['shoe'].'</td><td>'.$row['weight'].'</td><td>'.$row['age'].'</td><td>'.$row['gender'].'</td><td>'.$row['marital'].'</td>';
			echo '</tr>';
			$count=1;
   		}
	}
	if($count==0){
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}

?>	
  

