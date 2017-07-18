<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>query1</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../Css/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> Advance Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='' method="POST">
      
        <h2>Sports Selection</h2>
        
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
          
          <label for="Gender";> Gender:</label>
		<select id="Gender" name="Gender">
			
	    
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="both">N/A<option>
			</select>
          
          <label for="height">Height_in_cm(above):</label>
          <input type="number" id="height" name="Height" min=0>
          
          <label>Range for Weight:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range"><label for="greater_than" class="light">above</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range"><label for="less_than" class="light">below</label><br>
		  <input type="radio" id="equal" value="equal" name="Range"><label for="equal" class="light">equal</label><br><br>
          
          <label for="weight">Weight:</label>
          <input type="number" id="weight" name="Weight" min=0>
          
		  <label>Range for Age:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range1"><label for="greater_than" class="light">above</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range1"><label for="less_than" class="light">below</label><br>
		  <input type="radio" id="equal" value="equal" name="Range1"><label for="equal" class="light">equal</label><br><br>
          
          <label for="Age">Age:</label>
          <input type="number" id="Age" name="Age" min="18" max="55">
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" onclick="Sports.php"> Advance Search</button>
      </form>
      
    
	</body>
</html>
<?php include "ConnectDatabase.php";
if(isset($_POST['Search'])){
	if(empty($_POST['Height'])){
	echo"Plese enter height";
	
	}else if(empty($_POST['Weight'])){
	echo"Plese enter weight";
	
	
	}else if(isset($_POST['Range'])==null){
		echo"You should select the range for weight !!";
	}else if(isset($_POST['Range1'])==null){
		echo"You should select the range for Age !!";
	}else if(empty($_POST['Age'])){
		echo"Plese enter age !!";
	}else{
	$count=0;
	$gender = $_POST['Gender'];
	$height = $_POST['Height'];
	$weight = $_POST['Weight'];
	$range = $_POST['Range'];
	$range1 = $_POST['Range1'];
	$age = $_POST['Age'];
	$regiment = $_POST['regiment'];
	$array1=array();
	$array2=array();
	$array3=array();
	$array4=array();
		
		
		if($gender=="both"){
		$sql1 = "SELECT *  FROM personalinfo WHERE  height > $height  " ;
		
		}else{
		$sql1 = "SELECT *  FROM personalinfo WHERE gender = '".$gender."' AND height > $height  " ;
		}
		if($is_query_run=mysql_query($sql1,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array1,$row['id']);
			
			
		}}
		
		if($range=="greater_than"){
		$sql2 = "SELECT *  FROM personalinfo WHERE `weight` > $weight ";
		}else if($range=="less_than"){
		$sql2 = "SELECT *  FROM personalinfo WHERE `weight` < $weight ";	
		}else if($range=="equal"){
		$sql2 = "SELECT *  FROM personalinfo WHERE `weight` = $weight ";		
		}
		if($is_query_run=mysql_query($sql2,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array2,$row['id']);
			
		}
		}
		
		if($range1=="greater_than"){
		$sql3 = "SELECT *  FROM personalinfo WHERE `age` >  $age  ";
		}else if($range1=="less_than"){
		$sql3 = "SELECT *  FROM personalinfo WHERE `age` < $age ";	
		}else if($range1=="equal"){
		$sql3 = "SELECT *  FROM personalinfo WHERE `age` = $age ";		
		}
		if($is_query_run=mysql_query($sql3,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array3,$row['id']);
			
		}
		}
		$sql4 = "SELECT *  FROM militaryinfo WHERE regiment = '".$regiment."' " ;
		if($is_query_run=mysql_query($sql4,$db)){
		
    
   		while($row = mysql_fetch_array($is_query_run,MYSQL_ASSOC)) {
			array_push($array4,$row['id']);
			
		}
		}
		$result=array_intersect($array4,$array1,$array2,$array3);
		if(empty($result)){
			echo "No soldiers satisfy given conditions";
		}else{
		echo "Eligible Soldiers:";
		echo '<table border=2px>';
		echo '<th>Id</th>';
			
		foreach($result as $element){
			echo '<tr>';
	   	 	echo '<td>'.$element.'</td>';
		}
		}
		
}
}
?>	
  

