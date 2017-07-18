<?php
include 'dbQstoreconnect.php';

if(isset($_POST['item_code'])){
    $item_code=$_POST['item_code'];
$sql = "SELECT * FROM ammunation WHERE item_code='$item_code'";
$record1 = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($record1)){
    

    

    $units_in_stock=$row['units_in_stock'];

    $units_in_use=$row['units_in_use'];
    
    $buffer_level=$row['buffer_level'];
    
    $description=$row['description'];
   
}
?>
<head>
  <meta charset="UTF-8">
  <title>Update Ammunation Information</title>
  
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


<form action="updateammunation.php" method="post">
      
        <h1>Update Ammunation Information</h1>
        
        <fieldset>
          
          <input type="hidden" id="item_code" name="item_code" value="<?=$item_code;?>">
            

                    <label>Units in stock:</label>
  

          <input type="text" id="units_in_stock" name="units_in_stock" min="0" max="99999" value="<?=$units_in_stock;?>">

          
       
          
          <label>Units in use:</label>

         

          <input type="text" id="units_in_use" name="units_in_use" min="0" max="99999" value="<?=$units_in_use;?>">
          
            <label>Buffer Level:</label>
          <input type="text" id="buffer_level" name="buffer_level" min="0" max="99999" value="<?=$buffer_level;?>">
          
            <label>Description:</label>
          <input type="text" id="description" name="description" maxlength="100" value="<?=$description;?>">

          
       
        </fieldset>
          
        
        <button type="submit">Update Entry</button>
        
          
    

</form>
<?php
    }else{
        echo 'No entry found';
    }

?>