<?php
include 'dbQstoreconnect.php';

if(isset($_POST['item_name'])){
    $item_name=$_POST['item_name'];
$sql = "SELECT * FROM personalbelongings WHERE item_name='$item_name'";
$record1 = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($record1)){
    

    

    $units_in_stock=$row['units_in_stock'];

    $units_in_use=$row['units_in_use'];
    
      $description=$row['description'];
   
}
?>
<head>
  <meta charset="UTF-8">
  <title>Update Personal Belongings Information</title>
  
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


<form action="updatepersonalb.php" method="post">
      
        <h1>Update Personal Belongings Information</h1>
        
        <fieldset>
          
          <input type="hidden" id="item_name" name="item_name" value="<?=$item_name;?>">
            
            <label>Units in stock:</label>
          <input type="text" id="units_in_use" name="units_in_stock" value="<?=$units_in_stock;?>">
          
       
          
          <label>Units in use:</label>
          <input type="text" id="units_in_use" name="units_in_use" value="<?=$units_in_use;?>">
          
            <label>Description:</label>
          <input type="text" id="description" name="description" value="<?=$description;?>">
          
       
        </fieldset>
          
        
        <button type="submit">Update Entry</button>
        
          
    

</form>
<?php
    }else{
        echo 'No entry found';
    }

?>