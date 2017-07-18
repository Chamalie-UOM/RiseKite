<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by soldierId</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='SoldierIdResult.php' method="POST">
      
        <h2>Search By Soldier Id</h2>
        
        <fieldset>
          
          <label for="name">SoldierId:</label>
          <input type="text" id="name" name="SoldierId" pattern="[O,S]+/[0-9]{5}" title="e.g.S/12345 or O/12345" >
          
         
								   
			
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search">Search</button>
      </form>
      
    
	</body>

</html>


