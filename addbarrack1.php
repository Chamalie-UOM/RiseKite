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

      <form action="addbarrack1.php" method="post">
      
        <h1>Add new barracks information</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Item Information</legend>
          <label>Name:</label>
          <input type="text" id="name" name="name">
            
          <label>Item type:</label>
          <select id="itemtype" name="item_type">
            <option value="water_fitting">Water Fittings</option>
            <option value="electrical_fitting">Elecrical Fittings</option>
            <option value="light_fitting">Light Fittings</option>
          </select>
          
          <label>Units in stock:</label>
          <input type="text" id="units_in_stock" name="units_in_stock">
            
          <label>Units in use:</label>
          <input type="text" id="units_in_use" name="units_in_use">
          
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Item description</legend>
          
          <textarea id="description" name="item_des"></textarea>
        </fieldset>
        
        <button type="submit">Add Entry</button>
      </form>
      
    </body>
</html>
  
<?php
include "AddBarrack.php";

?>
  

