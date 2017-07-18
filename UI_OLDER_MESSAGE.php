<html>
    <head>
    <meta charset = "utf-8"/>

    <link rel = "styleSheet" href="../CSS_SMS/style_older_new1.css"><title>Older Messages</title></head>

    
    <body>
        <h1><div class = "myfirst1"><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big><img src ="army-crest.svg" alt="army crest" align="middle"></font>
		<br><button2><a href="UI_LOGIN.php"><font size="3">Logout</font></a><button2></div></h1><br><br>
        
    <form action="UI_OLDER_MESSAGE.php" method="get">
	<fieldset>
	<legend><font size="5">See Older Messages</font></legend>
    <p>
    <label for="Soldier Group"><second_one>Select the regiment : </second_one></label>
    <select name="sent">
  <option value="All Soldiers">All Soldiers</option>
  <option value="Sri Lanka Armoured Corps">Sri Lanka Armoured Corps</option>
  <option value="Sri Lanka Light Infantry">Sri Lanka Light Infantry</option>
  <option value="Sri Lanka Sinha Regiment">Sri Lanka Sinha Regiment</option>
  <option value="Sri Lanka Vijayabahu Infantry Regiment">Sri Lanka Vijayabahu Infantry Regiment</option>
  <option value="Gemunu Watch">Gemunu Watch</option>
  <option value="Gajaba Regiment">Gajaba Regiment</option>
  <option value="Mechanized Infantry Regiment">Mechanized Infantry Regiment</option>
  <option value="Commando Regiment">Commando Regiment</option>
  <option value="Special Forces Regiment">Special Forces Regiment</option>
  <option value="Sri Lanka Artillery Regiment">Sri Lanka Artillery Regiment</option>
  <option value="Sri Lanka Engineers">Sri Lanka Engineers</option>
</select>
<label for="Battalion Group"><second_one><s1>Select the battalion number : </s1></second_one></label>

<input type="number" name="batNumber" min="1" max="23"></p2>

  <br>
		<input type="submit" name="submit_button" value="Submit" />
        <input type="button" value= "Back" name = "button1" onclick="window.location.href='UI_MAIN.php'"/>
		
        </p>
		</fieldset>
        </form>
</body>
</html>

<?php
if (isset($_GET["sent"])){
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);

	@mysql_select_db('armydb') or die($conn_error);

	
	if (!get_magic_quotes_gpc()){
		
		$new_group = addslashes($_GET["sent"]);
		if (isset($_GET["batNumber"])){
			$new_num = addslashes($_GET["batNumber"]);
	}
	}
	else{
		$new_group = $_GET["sent"];
		if (isset($_GET["batNumber"])){
			$new_num = $_GET["batNumber"];
	}
	}
	//echo "<br>";
	//echo "connected<br>";
	
	$query="SELECT * FROM sms WHERE Soldier_Group='".$new_group."'";
	if ($is_query_run=mysql_query($query,$conn)){
		//echo "query executed<br>";
		if (($new_num>0) && ("$new_group" != "All Soldiers")){

			echo '<table border=1px>';

			echo '<th>Message</th><th>Date</th><th>Time</th><th>State</th><th>Message ID</th>';
			while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
				if (($row['Battalion_Number'] == "$new_num")){
				echo '<tr>';

				echo '<td style="width:400px">'.$row['Message'].'</td><td style="width:100px">'.$row['Date'].'</td><td style="width:100px">'.$row['Time'].'</td><td style="width:100px">'.$row['State'].'</td><td>'.$row['Message_ID'].'</td>';

				echo '</tr>';
				}
				else{
					//echo "error1";
				}
			}
		}
		else if((isset($_GET["batNumber"])) && ("$new_group" == "All Soldiers")){

			echo '<table border=1px>';

			echo '<th>Message</th><th>Date</th><th>Time</th><th>State</th><th>Message ID</th>';
			while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			if ($row['Soldier_Group'] == "$new_group"){
				echo '<tr>';

				echo '<td style="width:400px">'.$row['Message'].'</td><td style="width:100px">'.$row['Date'].'</td><td style="width:100px">'.$row['Time'].'</td><td style="width:100px">'.$row['State'].'</td><td>'.$row['Message_ID'].'</td>';

				echo '</tr>';
				
			}
			else{
					//echo "error2";
				}
			}
		}
		else{

			echo '<table border=1px>';

			echo '<th>Battalion</th><th>Message</th><th>Date</th><th>Time</th><th>State</th><th>Message ID</th>';
			while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			if ($row['Soldier_Group'] == "$new_group"){
				echo '<tr>';

				echo '<td>'.$row['Battalion_Number'].'</td><td style="width:400px">'.$row['Message'].'</td><td style="width:100px">'.$row['Date'].'</td><td style="width:100px">'.$row['Time'].'</td><td style="width:100px">'.$row['State'].'</td><td>'.$row['Message_ID'].'</td>';

				echo '</tr>';
			}
			else{
					//echo "error3";
				}
			}
	}
	}
	else{
		//echo 'error executing';
	}
	mysql_close($conn);
}
	
?>