<?php include 'dbTransportconnect.php';


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
   
    
    
    mysqli_query($db,"INSERT INTO vehicles(registration_number,date_of_purchase,current_location,net_carrying_value,vehicle_type,user_type,fuel_type,mileage,transmission)VALUES('$registration_number','$date_of_purchase','$current_location','$net_carrying_value','$vehicle_type','$user_type','$fuel_type','$mileage','$transmission')");
}
else{
    echo "Fill all the fields";
}

?>