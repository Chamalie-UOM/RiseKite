<?php include 'dbTransportconnect.php';


if (isset($_POST['pol_type'])&&isset($_POST['assigned_vehicles'])&&isset($_POST['estimated_consumption'])&&isset($_POST['buffer_level'])&&isset($_POST['stock_level'])){
    
     $pol_type=$_POST['pol_type'];

    $assigned_vehicles=$_POST['assigned_vehicles'];

    $estimated_consumption=$_POST['estimated_consumption'];
    
    $buffer_level=$_POST['buffer_level'];
    
    $stock_level=$_POST['stock_level'];
    
    
    
    mysqli_query($db,"INSERT INTO pol(type,assigned_vehicles,estimated_consumption,buffer_level,stock_level)VALUES('$pol_type','$assigned_vehicles','$estimated_consumption','$buffer_level','$stock_level')");
}
else{
    echo "Fill all the fields";
}

?>