<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>query1</title>
  
  <link rel="stylesheet">

  
      <link rel="stylesheet" href="../FinalCss/SearchBox.css">
<header>
<font size="4"><h1 align ="center"> Advance Search Service<img src ="../Img/army-crest.svg"  alt="army crest" align="middle"></h1></font> 
</header>
  
</head>

<body>

      <form action='ScholorshipResult.php' method="POST">
      
        <h2>Abroad Schlorship Selection</h2>
        
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
			
		<label for="Rank">Rank(Below):</label>
        <input type="number" id="Rank" name="Rank"   min="1">
          
          <label for="Gender";> Gender:</label>
		<select id="Gender" name="Gender">
			
	    
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="both">N/A<option>
			</select>
          
          <label for="MaritalStatus";>Marital Status :</label>
		<select id="MaritalStatus" name="MaritalStatus">
			
	    
		<option value="Married">Married</option>
		<option value="Single">Single</option>
			</select> 
		
		 <label for="english";> English Proficiency:</label>
		<select id="english" name="english">
			
	    
		<option value="Professional proficiency">Professional proficiency</option>
		<option value="General proficiency">General proficiency</option>
			</select> 
          
          
          
		  <label>Range for Age:</label>
          <input type="radio" id="greater_than" value="greater_than" name="Range1"><label for="greater_than" class="light">above</label><br>
          <input type="radio" id="less_than" value="less_than" name="Range1"><label for="less_than" class="light">below</label><br>
		  <input type="radio" id="equal" value="equal" name="Range1"><label for="equal" class="light">equal</label><br><br>
          
          <label for="Age">Age:</label>
          <input type="number" id="Age" name="Age" min="18" max="55">
          
        
        </fieldset>
        
        
          
		  <button type="submit" name="Search"  value="Search"> Advance Search</button>
      </form>
      
    
	</body>
</html>


