

<html>
<head>
<title> Advance Search </title>
<link rel="stylesheet" type="text/css" href="../FinalCss/SearchBox.css">
</head>
<body>
<header>
<font size="5"><h1 align ="center"> Advance Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
	<logout><a href="../SMS/UI_LOGIN.php">logout</a></logout>
	<back><a href="../SMS/UI_SELECT.php">Back to Home</a></back> 
</header>
<br><br>
<script>

		function myFunction(val)
{
	var txt;
	var value;
	if(val=="query1"){
		window.location="Schlorship.php";
	}else if(val=="query3"){
		window.location="MedicalCamp.php";	
	}else if(val=="query4"){
		window.location="Sports.php";	
	}else if(val=="query6"){
		window.location="Operation.php";	
	
	}
}
</script>
	
	 <form  method="POST">
      
        <h2>Run a Advance Search Query</h2>
        
        <fieldset>
          
          
         <label for="Queries";>Queries:</label>
		<select id="Queries"  onchange=myFunction(this.value)> 
	    <option value="query2"></option>
		<option value="query1">Abroad Schlorship Selection</option>
		
		<option value="query3">Medical Camp Selection</option>	
		<option	value="query4">Sports Selection</option>
		
		<option	value="query6">Special Military Operation Selection</option>
			</select>
          
          
        
        </fieldset>
        
	   
      </form>
		



	
	<br><br>
	
	


</body>
</html>
