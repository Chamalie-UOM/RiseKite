<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style_confirm_origin.css">
    <title>Confirm Messages</title>
</head>
<body>
<h1><div class = "myfirst3"><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big><img src ="army-crest.svg" alt="army crest" align="middle"></font></div></h1>
    
<form action="UI_MESSAGE_CON.php" method="get">
    <p>
    <label for="MessageID">Enter the message ID  :</label>
    <input type="number" name="MessageID"/>
    </p>
    <p>
        <input1><input type="submit" value="Confirm Message" /></input1>
    </p> 
    </form>
    </body>
</html>

<?php


if (isset($_GET["MessageID"])){
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);
	@mysql_select_db('messagesdb') or die($conn_error);
	
	echo "<br>";
	echo "connected<br>";
        
    if (!get_magic_quotes_gpc()){
		
		$new_ID = addslashes($_GET["MessageID"]);
	}
	else{
		$new_ID = $_GET["MessageID"];
	}
    echo $new_ID;
	
	$sql = "UPDATE sms SET State='Sent' WHERE Message_ID=$new_ID";
        if ($is_query_run1=mysql_query($sql,$conn)){
            echo "updated successfully";
            
        }
        else{
            echo "could not be updated";
        }
    $query="SELECT * FROM sms WHERE Message_ID=$new_ID";
    if ($is_query_run1=mysql_query($query,$conn)){
		echo "query executed<br>";
		while($row=mysql_fetch_array($is_query_run1,MYSQL_ASSOC)){
			$message_to_send=$row['Message'];
            echo $message_to_send;
            $group_to_send=$row['Soldier_Group'];
            echo $group_to_send;
		}
	}
	else{
		echo 'error executing';
	}
    
    if ($group_to_send = 'All Soldiers'){
        $queryall="SELECT * FROM soldiers";
        if ($is_query_run2=mysql_query($queryall,$conn)){
		echo "query executed<br>";
		while($row=mysql_fetch_array($is_query_run2,MYSQL_ASSOC)){
			$phone=$row['Phone_Number'];
            $sms_send=$message_to_send;
            include 'int-send_sms.php';
		}
	}
	else{
		echo 'error executing';
	}
        
    }
    else{
        $querygroup="SELECT * FROM soldiers WHERE Soldier_Group='".$group_to_send."'";
        if ($is_query_run3=mysql_query($querygroup,$conn)){
		echo "query executed<br>";
		while($row=mysql_fetch_array($is_query_run3,MYSQL_ASSOC)){
			$phone=$row['Phone_Number'];
            $sms_send=$message_to_send;
            include 'int-send_sms.php';
		}
	}
	else{
		echo 'error executing';
	}
    }
    
	mysql_close($conn);
}

?>