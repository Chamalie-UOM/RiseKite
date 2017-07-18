<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by battalionNo</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='BattalionNoResult.php' method="POST">
      
        <h2>Search By BattalionNo</h2>
        
        <fieldset>
         
          
          <label for="BattalionNo">Battalion No:</label>
          <input type="number" id="BattalionNo" name="BattalionNo" max="23" min = "1">
          
		  
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" >Search</button>
      </form>
      
    
	</body>
</html>

