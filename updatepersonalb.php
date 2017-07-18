<?php
include 'dbQstoreconnect.php';


if (isset($_POST['item_name'])&&isset($_POST['units_in_stock'])&&isset($_POST['units_in_use'])&&isset($_POST['description'])){
    
     $item_name=$_POST['item_name'];

    $units_in_stock=$_POST['units_in_stock'];

    $units_in_use=$_POST['units_in_use'];
    
    $description=$_POST['description'];
    
}
    
    mysqli_query($db,"UPDATE personalbelongings");


mysqli_query($db,"UPDATE personalbelongings SET units_in_stock='$units_in_stock',units_in_use='$units_in_use',description='$description' WHERE item_name='$item_name' ");

?>