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

      <form action="addpol1.php" method="post">
      
        <h1>Add New Petroleum Oil and Lubricants Information</h1>
        
        <fieldset>
          <label>Type:</label>
          <select id="pol_type" name="pol_type">
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
            <option value="Lubricant">Lubricant</option>
          </select>
            
          <label for="assigned_vehicles">Number of assigned vehicles:</label>
          <input type="text" id="assigned_vehicles" name="assigned_vehicles">
          
          <label for="estimated_consumption">Estimated consumption:</label>
          <input type="text" id="estimated_consumption" name="estimated_consumption">
          
          
          <label for="buffer_level">Buffer level:</label>
          <input type="text" id="buffer_level" name="buffer_level">
            
         <label for="stock_level">Stock level:</label>
          <input type="text" id="stock_level" name="stock_level">
        
          
        </fieldset>
        <button type="submit">Add Entry</button>
      </form>
      
    </body>
</html>
  
  
<?php
include "AddPOL.php";

?>
  

