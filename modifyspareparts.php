<?php
include 'dbQstoreconnect.php';

if(isset($_POST['item_code'])){
    $item_code=$_POST['item_code'];
$sql = "SELECT * FROM spare_parts WHERE item_code='$item_code'";
$record1 = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($record1)){
    

    $units_in_stock=$row['units_in_stock'];

    $assigned_total=$row['assigned_total'];
    
    $buffer_level=$row['buffer_level'];
    
   
}
?>
<head>
  <meta charset="UTF-8">
  <title>Update Spare Part Information</title>
  
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


<form action="updatespareparts.php" method="post">
      
        <h1>Update Spare Parts Information</h1>
        
        <fieldset>
          
          <input type="hidden" name="item_code" value="<?=$item_code;?>">
          
          <label for="units_in_stock">Units in stock:</label>
          <input type="text" id="units_in_stock" name="units_in_stock" value="<?=$units_in_stock;?>">
          
          <label for="assigned_total">Total number of items assigned:</label>
          <input type="text" id="assigned_total" name="assigned_total" value="<?=$assigned_total;?>">
            
          <label for="buffer_level">Buffer level:</label>
          <input type="text" id="buffer_level" name="buffer_level" value="<?=$buffer_level;?>">
            
         
        
          
        </fieldset>
        <button type="submit">Update Entry</button>
        
          
    

</form>
<?php
    }else{
        echo 'No entry found';
    }

?>