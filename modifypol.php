<?php
include 'dbQstoreconnect.php';

if(isset($_POST['type'])){
    $type=$_POST['type'];
$sql = "SELECT * FROM pol WHERE type='$type'";
$record1 = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($record1)){
    
    $assigned_vehicles=$row['assigned_vehicles'];

    $estimated_consumption=$row['estimated_consumption'];
    
    $buffer_level=$row['buffer_level'];
    
    $stock_level=$row['stock_level'];
    
   
}
?>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>


<form action="updatepol.php" method="post">
      
        <h1>Edit/Update Petroleum,Oil & Lubricant Information</h1>
        
        <fieldset>
          
          <input type="hidden" name="type" value="<?=$type;?>">
          
          <label for="assigned_vehicles">Number of assigned vehicles:</label>
          <input type="text" id="assignSed_vehicles" name="assigned_vehicles" value="<?=$assigned_vehicles;?>">
          
          <label for="estimated_consumption">Estimated consumption:</label>
          <input type="text" id="estimated_consumption" name="estimated_consumption" value="<?=$estimated_consumption;?>">
          
          
          <label for="buffer_level">Buffer level:</label>
          <input type="text" id="buffer_level" name="buffer_level" value="<?=$buffer_level;?>">
            
         <label for="stock_level">Stock level:</label>
          <input type="text" id="stock_level" name="stock_level" value="<?=$stock_level;?>">
        
          
        </fieldset>
        <button type="submit">Update Entry</button>
        
          
    

</form>
<?php
    }else{
        echo 'No entry found';
    }

?>