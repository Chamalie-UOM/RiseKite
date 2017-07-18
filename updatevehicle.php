<?php
include 'dbTransportconnect.php';

if (isset($_POST['registration_number'])&&isset($_POST['date_of_purchase'])&&isset($_POST['current_location'])&&isset($_POST['net_carrying_value'])&&isset($_POST['vehicle_type'])&&isset($_POST['user_type'])&&isset($_POST['fuel_type'])&&isset($_POST['mileage'])&&isset($_POST['transmission'])){
     $registration_number=$_POST['registration_number'];

    $date_of_purchase=$_POST['date_of_purchase'];

    $current_location=$_POST['current_location'];
    
    $net_carrying_value=$_POST['net_carrying_value'];
    
    $vehicle_type=$_POST['vehicle_type'];
    
    $user_type=$_POST['user_type'];
    
    $fuel_type=$_POST['fuel_type'];
    
    $mileage=$_POST['mileage'];
    
    $transmission=$_POST['transmission'];
}
    
    mysqli_query($db,"UPDATE vehicles");


mysqli_query($db,"UPDATE vehicles SET date_of_purchase='$date_of_purchase',current_location='$current_location',net_carrying_value='$net_carrying_value', vehicle_type='$vehicle_type', user_type='$user_type', fuel_type='$fuel_type' WHERE registration_number='$registration_number' ");

?>