<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by firstname</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

      
<body>
      <form action='FirstNameResult.php' method="POST">
      
        <h2>Search By FirstName</h2>
        
        <fieldset>
          
          <label for="name">FirstName:</label>
          <input type="text" id="name" name="firstname" pattern="[A-Za-z]{1,}" title="Only letters without spaces">
   
          
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" >Search</button>
      </form>
      
    
	</body>
</html>


