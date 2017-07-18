<?php
include 'dbQstoreconnect.php';


if (isset($_POST['name'])&&isset($_POST['item_type'])&&isset($_POST['units_in_stock'])&&isset($_POST['units_in_use'])&&isset($_POST['description'])){
    
     $name=$_POST['name'];

    $item_type=$_POST['item_type'];

    $units_in_stock=$_POST['units_in_stock'];

    $units_in_use=$_POST['units_in_use'];

    $description=$_POST['description'];
    
}
    
    mysqli_query($db,"UPDATE barrack");


mysqli_query($db,"UPDATE barrack SET item_type='$item_type',units_in_stock='$units_in_stock',units_in_use='$units_in_use',description='$description' WHERE name='$name' ");

?>