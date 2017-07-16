<!DOCTYPE html>
<html >
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
    <body>

      <form action="addspare1.php" method="post">
      
        <h1>Add New Spare Parts Information</h1>
        
        <fieldset>
         
          <label for="item_code">Item code:</label>
          <input type="text" id="item_code" name="item_code">
          
          <label for="units_in_stock">Units in stock:</label>
          <input type="text" id="units_in_stock" name="units_in_stock">
          
          <label for="assigned_total">Total number of items assigned:</label>
          <input type="text" id="assigned_total" name="assigned_total">
            
          <label for="buffer_level">Buffer level:</label>
          <input type="text" id="buffer_level" name="buffer_level">
            
         
        
          
        </fieldset>
        <button type="submit">Add Entry</button>
      </form>
      
    </body>
</html>
  
  
<?php
include "AddSpare.php";

?>
  

