<?php include 'dbTransportconnect.php';


if (isset($_POST['item_code'])&&isset($_POST['units_in_stock'])&&isset($_POST['assigned_total'])&&isset($_POST['buffer_level'])){
    
     $item_code=$_POST['item_code'];

    $units_in_stock=$_POST['units_in_stock'];

    $assigned_total=$_POST['assigned_total'];
    
    $buffer_level=$_POST['buffer_level'];
    
   
    
    
    mysqli_query($db,"INSERT INTO spare_parts(item_code,units_in_stock,assigned_total,buffer_level)VALUES('$item_code','$units_in_stock','$assigned_total','$buffer_level')");
}
else{
    echo "Fill all the fields";
}

?>