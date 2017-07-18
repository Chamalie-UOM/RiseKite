

<head><link rel="stylesheet" type="text/css" href="../hr/styleshr.css"></head>


<body>
<header><h1 align= "center" > Human Resources Management <img src ="armyCrest.svg" alt="army crest" align="middle"></h1></header><br><br>
<font size='5'>Modify Soldier Entry</font><br><br>
<?php
include "dbcon.php";


if(!empty($_POST['SoldierId'])){
	$id =$_POST['SoldierId'];
	$check="SELECT id FROM personalinfo WHERE id='$id'";
	$query=mysqli_query($link,$check);

	if(!mysqli_num_rows($query)==0){



	$sql = "SELECT * FROM personalInfo WHERE id='$id'";
	$record1=mysqli_query($link,$sql);
	$edu ="SELECT * FROM edQualifications WHERE id='$id'";
	$record2=mysqli_query($link,$edu);
	$military ="SELECT * FROM militaryInfo WHERE id='$id'";
	$record3=mysqli_query($link,$military);
	
	while($row = mysqli_fetch_array($record1)){
		$firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $DOB = $row['DOB'];
        $Gender = $row['gender'];

		$age= $row['age'];

		$marital = $row['marital'];
		$height = $row['height'];
		$weight = $row['weight'];
		$shoe = $row['shoe'];
		$tpNum = $row['tpNum'];
    }
	while($row2 = mysqli_fetch_array($record2)){
		$olResults = $row2['olResults'];
        $alResults = $row2['alResults'];


		$engFluency = $row2['engFluency'];


	}
	while($row3 = mysqli_fetch_array($record3)){
		$DOE = $row3['DOE'];
        $regiment = $row3['regiment'];
        $batNum = $row3['batNum'];

		$rank = $row3['rank'];

	}
?>

<form action="update.php" method="post">
<input type="hidden" name="ID" value="<?=$id;?>">

<fieldset>
<legend>Personal Information</legend> 
First Name: <input type="text" name="firstName" value="<?=$firstName?>"><br>
Last Name: <input type="text" name="lastName" value="<?=$lastName?>"><br>
Date of Birth: <input type="date" name="DOB" value="<?=$DOB;?>"><br>
Gender: <input type="radio" name="gender" value="male" <?php if ($Gender == 'male'){ echo 'checked="checked"';} ?>>Male 
<input type="radio" name="gender" value="female" <?php if ($Gender == 'female'){ echo 'checked="checked"';} ?> >Female <br>

Age:<input type="number" name="age" value="<?=$age?>" min="18" max="55"><br>  
Marital status: <input type="text" name="marital" value="<?=$marital?>"><br>
Height(cm): <input type="text" name="height" value="<?=$height?>"><br>
Weight(kg): <input type="text" name="weight" value="<?=$weight?>"><br>
Shoe size: <input type="number" name="shoe" value="<?=$shoe?>" min="1" max="20"><br>

Telephone Number: <input type="text" name="tpNum" value="<?=$tpNum?>"><br>
</fieldset><br><fieldset>
<legend>Education Qualifications</legend>
O/L Results: <input type="text" name="olResults" value="<?=$olResults?>"><br>
A/L Results: <input type="text" name="alResults" value="<?=$alResults?>"><br>


English Fluency: <select name="engFluency">
	<option value="Professional proficiency">Professional proficiency</option>
    <option value="General proficiency">General proficiency</option></select><br>


</fieldset><br>
<fieldset>
<legend>Military Infomation</legend>
Date of Enlistment: <input type="text" name="DOE" value="<?=$DOE?>"><br>

Regiment Name:  <input type="text" name="regiment" value="<?=$regiment?>"><br>

Battalion Number: <input type="number" name="batNum" value="<?=$batNum?>" min="1" max="23"><br>
Rank: <input type="number" name="rank" value="<?=$rank?>" min="1"><br>

</fieldset><br>
<input type="Submit" name="Submit">
</form>
</body>
<?php

	}else{ echo "ID does not exist.";}


}else{
    echo 'No entry found.';
}
?>