<?php include 'dbQstoreconnect.php';

$query = mysqli_query($db,"SELECT * FROM weaponry");
while($row=mysqli_fetch_array($query)){
        echo '<tr>';
        echo '<td>'.$row['item_code'].'</td><td>'.$row['units_in_stock'].'</td><td>'.$row['units_in_use'].'</td><td>'.$row['buffer_level'].'</td><td>'.$row['description'].'</td>';
        echo '</tr>';
}

?>