<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Style_create.css">
    <title>Sending Messages</title>
</head>
<body>

        <h1><div class = "myfirst"><br><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big></font></div></h1>
		<br><br>
    
    
    
<form action="UI_CREATE_MESSAGE.php" method="get">
    <p>
    <label for="Soldier Group"><second>Select the group : </second></label>
    <select name="group">
  <option value="All Soldiers">All Soldiers</option>
  <option value="Group A">Group A</option>
  <option value="Group B">Group B</option>
  <option value="Group C">Group C</option>
</select><br><br><br><br>
</p>
<p>
    <label for="Message"><second>Create the message here</second></label>
    </p>
    <p>
    <textarea id="message" name="message"></textarea>
    </p>  
<p>
    <formatting>
    <button_align1>
    <input type="button" value= "Back" name = "button1" onclick="window.location.href='UI_MAIN.php'"/></button_align1>
    <button_align2>
        <input type="submit" value="Send For Approval" /></button_align2>
        </formatting>
    </p>
    </form>
    </body>
</html>

<?php

if (isset($_GET["group"])&&($_GET["message"] != '')){
	echo "Selected group is: ";
	echo $_GET["group"];
	echo "<br>";
	echo "Message: ";
	echo $_GET["message"];
	echo "<br>";
	
	date_default_timezone_set('Asia/Colombo');
	//$timezone = date_default_timezone_get();
	//echo $timezone;
	
	$date = date('Y-m-d');
	echo $date;
	echo "<br>";
	$time = date('H:i:s',time());
	echo $time;
	echo "<br>";
    $state = "Not sent";
    
    include "settingData.php";
    
    echo "<br>";
	
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);
	@mysql_select_db('messagesdb') or die($conn_error);
	
	
	$sql = "INSERT INTO sms(Soldier_Group,Message,Date,Time,State) VALUES ('$new_group','$new_message','$date','$time','$state')";
	
	if (mysql_query($sql,$conn)){
		echo "Successfully saved";
	}
	else{
		echo "Error";
	}
    
    $numberQuery = "SELECT * FROM sms";
    if ($is_query_run4=mysql_query($numberQuery,$conn)){
		echo "query executed<br>";
		while($row=mysql_fetch_array($is_query_run4,MYSQL_ASSOC)){
			if ($row['Date']== $date && $row['Time']== $time){
                $messageIDnum = $row['Message_ID'];
                echo $messageIDnum;
            }
            
		}
	}
	else{
		echo 'error executing';
	}
	echo "<br>";
	echo "connected";
	mysql_close($conn);
    
    
	

    require 'class.phpmailer.php';

    // Instantiate Class
    $mail = new PHPMailer();

    // Set up SMTP
    $mail->IsSMTP();                // Sets up a SMTP connection
    $mail->SMTPDebug  = 2;          // This will print debugging info
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
    $mail->SMTPSecure = "tls";      // Connect using a TLS connection
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Encoding = '7bit';       // SMS uses 7-bit encoding
    
    $see="Here is the message for confirmation: "."$new_message"." for : "."$new_group"."  Message ID is: ".$messageIDnum;
    $mail->IsHTML(true);
    $mail->MsgHTML(file_get_contents('UI_CONFIRM.html')."$see");

    // Authentication
    $mail->Username   = "chulanikarandana@gmail.com"; // Login
    $mail->Password   = "chula1230"; // PasswordS
    

    // Compose
    $mail->Subject = "Requesting confirmation";     // Subject
    
    //$message = '<a href="https://drive.google.com/open?id=0B_72R2jyUdi8dWE1T3pBSUh3V2s">Visit our HTML tutorial</a>';
    
    //$mail->Body = "Here is the message for confirmation: "."$new_message"."for: "."$new_group"."$message";        // Body of our message
    $mail->SetFrom("chulanikarandana@gmail.com","Chulani@UoM");

    // Send To
    $mail->AddAddress( "chulanilakmali1230@gmail.com" ); // Where to send it
    var_dump( $mail->send() );      // Send!
    
    
}
else{
    echo '<this>';
	echo "Please fill all the fields and submit";
    echo '</this>';
}
?>