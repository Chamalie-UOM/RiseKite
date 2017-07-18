<?php
include 'dbQstoreconnect.php';


if (isset($_POST['item_code'])&&isset($_POST['units_in_stock'])&&isset($_POST['assigned_total'])&&isset($_POST['buffer_level'])){
    
     $item_code=$_POST['item_code'];

    $units_in_stock=$_POST['units_in_stock'];

    $assigned_total=$_POST['assigned_total'];
    
    $buffer_level=$_POST['buffer_level'];
    
   
}
    
    mysqli_query($db,"UPDATE spare_parts");


mysqli_query($db,"UPDATE spare_parts SET units_in_stock='$units_in_stock',assigned_total='$assigned_total',buffer_level='$buffer_level' WHERE item_code='$item_code' ");

?>