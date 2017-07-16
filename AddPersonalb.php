<?php include 'dbQStoreconnect.php';


if (isset($_POST['name'])&&isset($_POST['units_in_stock'])&&isset($_POST['units_in_use'])&&isset($_POST['item_des'])){
    
     $name=$_POST['name'];

    $unitsinstock=$_POST['units_in_stock'];

    $unitsinuse=$_POST['units_in_use'];

    $description=$_POST['item_des'];
    
    mysqli_query($db,"INSERT INTO personalbelongings(item_name,units_in_stock,units_in_use,description)VALUES('$name','$unitsinstock','$unitsinuse','$description')");
}
else{
    echo "Fill all the fields";
}

?>