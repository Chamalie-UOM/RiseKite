<html>
    <head>
    <meta charset = "utf-8"/>
    <link rel = "styleSheet" href="../CSS/style_older_origin_1.css"><title>Older Messages</title></head>
    
    <body>
        <h1><div class = "myfirst1"><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big><img src ="army-crest.svg" alt="army crest" align="middle"></font></div></h1><br><br>
        
    <form action="UI_OLDER_MESSAGE.php" method="get">
    <p>
    <label for="Soldier Group"><second_one>Select the regiment : </second_one></label>
    <select name="sent">
  <option value="All Soldiers">All Soldiers</option>
  <option value="Armoured">Sri Lanka Armoured Corps</option>
  <option value="Light Infantry">Sri Lanka Light Infantry</option>
  <option value="Sinha">Sri Lanka Sinha Regiment</option>
  <option value="Vijayabahu">Sri Lanka Vijayabahu Infantry Regiment</option>
  <option value="Gemunu">Gemunu Watch</option>
  <option value="Gajaba">Gajaba Regiment</option>
  <option value="Mechanized">Mechanized Infantry Regiment</option>
  <option value="Commando">Commando Regiment</option>
  <option value="Special">Special Forces Regiment</option>
  <option value="Artillery">Sri Lanka Artillery Regiment</option>
  <option value="Engineers">Sri Lanka Engineers</option>
</select>  <br>
		<input type="submit" name="submit_button" value="Submit" />
        <input type="button" value= "Back" name = "button1" onclick="window.location.href='UI_MAIN.php'"/>
		
        </p>
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
	@mysql_select_db('messagesdb') or die($conn_error);
	
	if (!get_magic_quotes_gpc()){
		
		$new_group = addslashes($_GET["sent"]);
	}
	else{
		$new_group = $_GET["sent"];
	}
	echo "<br>";
	echo "connected<br>";
	
	echo '<table border=2px>';
	echo '<th>Soldier Group</th><th>Message</th><th>Date</th><th>Time</th><th>State</th><th>Message ID</th>';
	
	$query="SELECT * FROM sms WHERE Soldier_Group='".$new_group."'";
	if ($is_query_run=mysql_query($query,$conn)){
		echo "query executed<br>";
		while($row=mysql_fetch_array($is_query_run,MYSQL_ASSOC)){
			echo '<tr>';
			echo '<td>'.$row['Soldier_Group'].'</td><td>'.$row['Message'].'</td><td>'.$row['Date'].'</td><td>'.$row['Time'].'</td><td>'.$row['State'].'</td><td>'.$row['Message_ID'].'</td>';
			echo '</tr>';
		}
	}
	else{
		echo 'error executing';
	}
	mysql_close($conn);
}
	
?>