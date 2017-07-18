
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
  <h1>Petroleum, Oil & Lubricants</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Type</th>
          <th>Number of vehicles</th>
          <th>Estimated consumption</th>
          <th>Buffer level</th>
          <th>Stock level</th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
          
      <?php include 'dbQstoreconnect.php';

            $query = mysqli_query($db,"SELECT * FROM pol");
            while($row=mysqli_fetch_array($query)){
                echo '<tr>';
                echo '<td>'.$row['type'].'</td><td>'.$row['assigned_vehicles'].'</td><td>'.$row['estimated_consumption'].'</td><td>'.$row['buffer_level'].'</td><td>'.$row['stock_level'].'</td>';
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
