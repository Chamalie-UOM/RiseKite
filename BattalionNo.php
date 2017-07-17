<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by battalionNo</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Search By BattalionNo</h2>
        
        <fieldset>
         
          
          <label for="BattalionNo">Battalion No:</label>
          <input type="number" id="BattalionNo" name="BattalionNo" max="23" min = "1">
          
		  
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="BattalionNo.php">Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
		$count=0;
		$BattalionNo= $_POST['BattalionNo'];
		
		
		$sql = "SELECT *  FROM militaryinfo WHERE `batNum` = $BattalionNo ";
		
		if($is_query_run=mysql_query($sql,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			
			if($count==0){
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
		echo " NO SOLDIERS MATCH YOUR SEARCH!!!!! ";
	} 


}

?>	
  

