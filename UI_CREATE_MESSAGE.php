<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../CSS/style_create.css">
    <title>Sending Messages</title>
</head>
<body>
    <h1><div class = "myfirst"><font color = "darkolivegreen"><big>Messaging Service - Sri Lanka Army</big><img src ="army-crest.svg" alt="army crest" align="middle"></font></div></h1>

<form action="UI_CREATE_MESSAGE.php" method="get">
    <p><p1>
    <label for="Soldier Group"><second>Select the regiment : </second></label></p1>
    <select name="group">
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
<p2>
<label for="Battalion Group"><second>Select the battalion number : </second></label>
<input type="number" name="batNumber" min="1"></p2>
</p>
<p><br><br><br><br>
    <p1><label for="Message">Create the message here</label></p1>
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
	
	include "settingData.php";
	
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
    
    echo "<br>";
	
	$conn_error = "could not connect";

	$serverName = "localhost";
	$username="root";
	$password="chul@P292";
	$conn = mysql_connect($serverName,$username,$password) or die($conn_error);
	@mysql_select_db('messagesdb') or die($conn_error);
	
	
	$sql = "INSERT INTO sms(Soldier_Group,Battalion_Number,Message,Date,Time,State) VALUES ('$new_group',$new_bat,'$new_message','$date','$time','$state')";
	
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
    
	if ($new_bat == 0){
    $see="Here is the message for confirmation: "."$new_message"."<br>"." for : "."$new_group"."<br>"."Battalion: All battalions"."<br>"."Message ID is: ".$messageIDnum;
    }
	else{
		$see="Here is the message for confirmation: "."$new_message"."<br>"." for : "."$new_group"."<br>"."Battalion: "."$new_bat"."<br>"."Message ID is: ".$messageIDnum;
	}
	
	$mail->IsHTML(true);
    $mail->MsgHTML(file_get_contents('UI_CONFIRM.html')."$see");

    // Authentication
    $mail->Username   = "chulanilakmali1230@gmail.com"; // Login
    $mail->Password   = "lakmali1995"; // PasswordS
    

    // Compose
    $mail->Subject = "Requesting confirmation";     // Subject
    
    //$message = '<a href="https://drive.google.com/open?id=0B_72R2jyUdi8dWE1T3pBSUh3V2s">Visit our HTML tutorial</a>';
    
    //$mail->Body = "Here is the message for confirmation: "."$new_message"."for: "."$new_group"."$message";        // Body of our message
    $mail->SetFrom("chulanikarandana@gmail.com","Chulani@UoM");

    // Send To
    $mail->AddAddress( "chulanilakmalikarandana@gmail.com" ); // Where to send it
    var_dump( $mail->send() );      // Send!
    
    
}
else{
    echo '<this>';
	echo "Please fill all the fields and submit";
    echo '</this>';
}
?>