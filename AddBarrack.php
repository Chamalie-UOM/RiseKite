<?php include 'dbQStoreconnect.php';

   


if (isset($_POST['name'])&&isset($_POST['item_type'])&&isset($_POST['units_in_stock'])&&isset($_POST['units_in_use'])&&isset($_POST['item_des'])){
    
     $name=$_POST['name'];

    $itemtype=$_POST['item_type'];

    $unitsinstock=$_POST['units_in_stock'];

    $unitsinuse=$_POST['units_in_use'];

    $description=$_POST['item_des'];
    
    mysqli_query($db,"INSERT INTO barrack(name,item_type,units_in_stock,units_in_use,description)VALUES('$name','$itemtype','$unitsinstock','$unitsinuse','$description')");
}
else{
    echo "Fill all the fields";
}

?>