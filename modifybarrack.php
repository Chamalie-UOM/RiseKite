<?php
include 'dbQstoreconnect.php';

if(isset($_POST['name'])){
    $name=$_POST['name'];
$sql = "SELECT * FROM barrack WHERE name='$name'";
$record1 = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($record1)){
    

    $item_type=$row['item_type'];

    $units_in_stock=$row['units_in_stock'];

    $units_in_use=$row['units_in_use'];

    $description=$row['description'];
    
   
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


<form action="updatebarrack.php" method="post">
      
        <h1>Update Barrack Information</h1>
        
        <fieldset>
          
          <legend><span class="number">1</span>Item Information</legend>
          
          <input type="hidden" id="name" name="name" value="<?=$name;?>">
            
          <label>Item type:</label>
          <select id="itemtype" name="item_type" value="<?=$item_type;?>">
            <option >Water Fittings</option>
            <option >Elecrical Fittings</option>
            <option >Light Fittings</option>
          </select>
          
          <label>Units in stock:</label>
          <input type="text" id="units_in_stock" name="units_in_stock" value="<?=$units_in_stock;?>">
            
          <label>Units in use:</label>
          <input type="text" id="units_in_use" name="units_in_use" value="<?=$units_in_use;?>">
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Item description</legend>
          
          <textarea id="description" name="description" value="<?=$description;?>"></textarea>
        </fieldset>
          
        
        <button type="submit">Update Entry</button>
        
          
    

</form>
<?php
    }else{
        echo 'No entry found';
    }

?>