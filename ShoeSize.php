<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Search by shoe size</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> General Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='ShoeSizeResult.php' method="POST">
      
        <h2>Search By Shoe Size</h2>
        
        <fieldset>
          <label>Range:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range"><label for="greater_than" class="light">greater_than</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range"><label for="less_than" class="light">less_than</label><br>
		  <input type="radio" id="equal" value="equal" name="Range"><label for="equal" class="light">equal</label><br><br>
          
          <label for="shoe size">Shoe Size:</label>
          <input type="number" id="shoe size" name="shoeSize" max=20 min=1>
          
		  
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search" >Search</button>
      </form>
      
    
	</body>
</html>


