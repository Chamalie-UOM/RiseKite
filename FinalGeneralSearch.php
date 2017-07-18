

<html>
<head>
<title> General Search </title>
<link rel="stylesheet" type="text/css" href="../FinalCss/SearchBox.css">
</head>
<body>
<header>
<font size="5"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font>
	<logout><a href="../SMS/UI_LOGIN.php">logout</a></logout>
	<back><a href="../SMS/UI_SELECT.php">Back to Home</a></back> 
</header>
<br><br>
<script>
		function myFunction(val)
{
	var txt;
	var value;
	if(val=="FirstName"){
		window.location="FirstName.php";
	}else if(val=="LastName"){
		window.location="LastName.php";
   	}else if(val=="ShoeSize"){
		window.location="ShoeSize.php";	
	}else if(val=="SoldierId"){
		window.location="SoldierId.php";	
	}else if(val=="Age"){
		window.location="Age.php";	
	
	}else if(val=="Gender"){
		window.location="Gender.php";	
	
	}else if(val=="BattalionNo"){
		window.location="BattalionNo.php";	
	
	}else if(val=="Rank"){
		window.location="Rank.php";	
	
	}else if(val=="MaritalStatus"){
		window.location="MaritalStatus.php";	
	
	}else if(val=="Regiment"){
		window.location="Regiment.php";	
	
	}else if(val=="Height"){
		window.location="Height.php";	
	
	}else if(val=="Weight"){
		window.location="Weight.php";	
	
	}
}
</script>
	
	 <form action='' method="POST">
      
        <h2>Run a Search Query</h2>
        
        <fieldset>
          
          
         <label for="Criteria";>Criteria :</label>
		<select id="Criterias" onchange="myFunction(this.value)"> 
	    <option value="row" ></option>
		<option value="SoldierId" name="SoldierId">Soldier Id</option>
		<option value="FirstName">First Name</option>
		<option value="LastName">Last Name</option>	
		<option	value="Age">Age</option>
		<option	value="Gender">Gender</option>
		<option value="BattalionNo">Battalion No</option>
		<option value="Rank">Rank</option>
		<option	value="MaritalStatus">Marital Status</option>
		<option	value="Regiment">Regiment</option>
		<option value="Height">Height</option>
		<option value="ShoeSize">Shoe Size</option>
		<option value="Weight">Weight</option>
    </select>
          
          
        
        </fieldset>
        
        
          
		  
      </form>
		



	
	<br><br>
	
	


</body>
</html>

