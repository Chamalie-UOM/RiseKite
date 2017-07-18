<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by Gender</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='GenderResult.php' method="POST">
      
        <h2>Search By Gender</h2>
        
        <fieldset>
          
         <label for="Gender";> :</label>
		<select id="Gender" name="Gender">
			
	    
		<option value="male">Male</option>
		<option value="female">Female</option>
			</select> 
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" >Search</button>
      </form>
      
    
	</body>
</html>
