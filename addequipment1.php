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

      <form action="addequipment1.php" method="post">
      
        <h1>Add new equipment entry</h1>
        
        <fieldset>
          
          <label>Item Name:</label>
          <input type="text" id="name" name="name">
            
          <label>Item type:</label>
          <select id="itemtype" name="item_type">
            <option value="bedding">Bedding</option>
            <option value="Cooking">Cooking</option>
            <option value="Gardening">Gardening</option>
              <option value="Office_Use">Office Use</option>
            </select>
          <label>Units in use:</label>
          <input type="text" id="units_in_use" name="units_in_use">
          
       
        </fieldset>
        
        <button type="submit">Add Entry</button>
      </form>
      
    </body>
</html>
  
  
<?php
include "AddEquipment.php";

?>
  
