<?php
include 'dbQstoreconnect.php';


if (isset($_POST['item_code'])&&isset($_POST['units_in_stock'])&&isset($_POST['units_in_use'])&&isset($_POST['buffer_level'])&&isset($_POST['description'])){
    
     $item_code=$_POST['item_code'];

    $units_in_stock=$_POST['units_in_stock'];

    $units_in_use=$_POST['units_in_use'];
    
     $buffer_level=$_POST['buffer_level'];
    
    $description=$_POST['description'];
    
}
    
    mysqli_query($db,"UPDATE weaponry");


mysqli_query($db,"UPDATE weaponry SET units_in_stock='$units_in_stock',units_in_use='$units_in_use',buffer_level='$buffer_level',description='$description' WHERE item_code='$item_code' ");

?>