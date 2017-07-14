<html>
    <head>
    <meta charset = "utf-8"/>
    <link rel = "styleSheet" href="Style_older.css"><title>Older Messages</title></head>
    
    <body>
    <div class = "first_one"><br>
        <h1><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big></font></h1></div><br><br>
        
    <form action="UI_OLDER_MESSAGE.php" method="get">
    <p>
    <label for="Soldier Group"><second_one>Select the group : </second_one></label>
    <select name="sent">
  <option value="All Soldiers">All Soldiers</option>
  <option value="Group A">Group A</option>
  <option value="Group B">Group B</option>
  <option value="Group C">Group C</option>
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