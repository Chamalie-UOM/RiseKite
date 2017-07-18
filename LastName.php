<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by lastname</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
	<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='LastNameResult.php' method="POST">
      
        <h2>Search By LastName</h2>
        
        <fieldset>
          
          <label for="name">LastName:</label>
			<input type="text" id="name" name="lastname" pattern="[A-Za-z]{1,}" title="Only letters without spaces">
        
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" >Search</button>
      </form>
      
    
	</body>
</html>

  

