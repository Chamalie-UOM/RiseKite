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

      <form action="addweaponry1.php" method="post">
      
        <h1>Add new Weaponry information</h1>
        
        <fieldset>
          <label>Item code:</label>
          <input type="text" id="item_code" name="item_code">
            
          <label>Units in stock:</label>
          <input type="text" id="units_in_stock" name="units_in_stock">
            
          <label>Units in use:</label>
          <input type="text" id="units_in_use" name="units_in_use">
            
          <label>Buffer Level:</label>
          <input type="text" id="buffer_level" name="buffer_level">
  
          <label>Description:</label>
          <textarea id="description" name="description"></textarea>
        </fieldset>
        
        <button type="submit">Add Entry</button>
      </form>
      
    </body>
</html>
  
<?php
include "AddWeaponry.php";

?>
  

