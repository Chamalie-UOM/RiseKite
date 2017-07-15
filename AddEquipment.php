<?php include 'dbQStoreconnect.php';


if (isset($_POST['name'])&&isset($_POST['item_type'])&&isset($_POST['units_in_use'])){
    
     $name=$_POST['name'];

    $itemtype=$_POST['item_type'];

    $unitsinuse=$_POST['units_in_use'];
    
    mysqli_query($db,"INSERT INTO equipment(item_name,item_type,units_in_use)VALUES('$name','$itemtype','$unitsinuse')");
}
else{
    echo "Fill all the fields";
}

?>