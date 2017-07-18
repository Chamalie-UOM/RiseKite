
<html >
<head>
  <meta charset="UTF-8">
  <title>Fixed table header</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/styletable.css">

  
</head>

<body>
  <section>
  <!--for demo wrap-->
  <h1>Vehicles</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Registration number</th>
          <th>Date of purchase</th>
          <th>Current location</th>
          <th>Net carrying value</th>
          <th>Vehicle type</th>
          <th>User type</th>
          <th>Fuel type</th>
          <th>Mileage</th>
          <th>Transmission</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
          
      <?php include 'dbQstoreconnect.php';

            $query = mysqli_query($db,"SELECT * FROM vehicles");
            while($row=mysqli_fetch_array($query)){
                echo '<tr>';
                echo '<td>'.$row['registration_number'].'</td><td>'.$row['date_of_purchase'].'</td><td>'.$row['current_location'].'</td><td>'.$row['net_carrying_value'].'</td><td>'.$row['vehicle_type'].'</td><td>'.$row['user_type'].'</td><td>'.$row['fuel_type'].'</td><td>'.$row['mileage'].'</td><td>'.$row['transmission'].'</td>';
                echo '</tr>';
            }

       ?>
          
        
      </tbody>
    </table>
  </div>
</section>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
