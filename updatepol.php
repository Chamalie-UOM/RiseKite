<?php
include 'dbQstoreconnect.php';


if (isset($_POST['type'])&&isset($_POST['assigned_vehicles'])&&isset($_POST['estimated_consumption'])&&isset($_POST['buffer_level'])&&isset($_POST['stock_level'])){
    
     $type=$_POST['type'];

    $assigned_vehicles=$_POST['assigned_vehicles'];

    $estimated_consumption=$_POST['estimated_consumption'];
    
    $buffer_level=$_POST['buffer_level'];
    
    $stock_level=$_POST['stock_level'];
    
    
}
    
    mysqli_query($db,"UPDATE pol");


mysqli_query($db,"UPDATE pol SET assigned_vehicles='$assigned_vehicles',estimated_consumption='$estimated_consumption',buffer_level='$buffer_level', stock_level='$stock_level' WHERE type='$type' ");

?>