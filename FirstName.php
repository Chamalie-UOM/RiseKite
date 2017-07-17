<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by firstname</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Search By FirstName</h2>
        
        <fieldset>
          
          <label for="name">FirstName:</label>
          <input type="text" id="name" name="firstname">
          
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="FirstName.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(empty($_POST['firstname'])){
	echo"Plese enter first name";
	
	
	}else{
		$count=0;
		$Firstname = $_POST['firstname'];
		
		
		$sql = "SELECT *  FROM personalinfo WHERE firstName LIKE '%" . $_POST['firstname'] . "%' ";
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
}
?>	
  

