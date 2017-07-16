<?php
include 'dbQstoreconnect.php';

if(isset($_POST['registration_number'])){
    $registration_number=$_POST['registration_number'];
$sql = "SELECT * FROM vehicles WHERE registration_number='$registration_number'";
$record1 = mysqli_query($db,$sql);
while($row = mysqli_fetch_array($record1)){
    $date_of_purchase = $row['date_of_purchase'];

    $current_location=$row['current_location'];
    
    $net_carrying_value=$row['net_carrying_value'];
    
    $vehicle_type=$row['vehicle_type'];
    
    $user_type=$row['user_type'];
    
    $fuel_type=$row['fuel_type'];
    
    $mileage=$row['mileage'];
    
    $transmission=$row['transmission'];
   
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


<form action="updatevehicle.php" method="post">
      
        <h1>Edit/Update Vehicle Information</h1>
        
        <fieldset>
          
          <input type="hidden" name="registration_number" value="<?=$registration_number;?>">
          
          <label for="Date of purchase">Date of purchase:</label>
          <input type="date" id="date_of_purchase" name="date_of_purchase" value="<?=$date_of_purchase?>">
          
          <label for="current_location">Current location:</label>
          <input type="text" id="current_location" name="current_location" value="<?=$current_location?>">
            
          <label for="net_carrying_value">Net carrying value:</label>
          <input type="text" id="net_carrying_value" name="net_carrying_value" value="<?=$net_carrying_value?>">
          
          <label>Vehicle type:</label>
          <select id="vehicle_type" name="vehicle_type" value="<?=$vehicle_type?>" >
            <option value="heavy_vehicle">Heavy vehicle</option>
            <option value="light_vehicle">Light vehicle</option>
            <option value="motorcycle">Motorcycle</option>
          </select>
            
          <label>User type:</label>
          <select id="user_type" name="user_type" value="<?=$user_type?>">
            <option value="normal_staff">Normal staff</option>
            <option value="admin_staff">Administration staff</option>
            <option value="op_staff">Operational staff</option>
          </select>
            
          <label>Fuel type:</label>
          <input type="radio" id="Petrol" value="Petrol" name="fuel_type"<?php if ($fuel_type == 'Petrol'){ echo 'checked="checked"';} ?>><label for="Petrol" class="light">Petrol</label><br><br>
          <input type="radio" id="Diesel" value="Diesel" name="fuel_type"<?php if ($fuel_type == 'Diesel'){ echo 'checked="checked"';} ?>><label for="Diesel" class="light">Diesel</label><br><br>
        
        
          <label for="mileage">Mileage:</label>
          <input type="text" id="mileage" name="mileage" value="<?=$mileage?>">
            
          <label>Transmission:</label>
          <input type="radio" id="Automatic" value="Automatic" name="transmission" <?php if ($transmission == 'Automatic'){ echo 'checked="checked"';} ?>><label for="Automatic" class="light">Automatic</label><br><br>
          <input type="radio" id="Manual" value="Manual" name="transmission" <?php if ($transmission == 'Manual'){ echo 'checked="checked"';} ?> ><label for="Manual" class="light">Manual</label>
          
        </fieldset>
        <button type="submit">Update Entry</button>
          
    

</form>
<?php
    }else{
        echo 'No entry found';
    }

?>