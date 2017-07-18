<?php include 'dbQStoreconnect.php';


if (isset($_POST['item_code'])&&isset($_POST['units_in_stock'])&&isset($_POST['units_in_use'])&&isset($_POST['buffer_level'])&&isset($_POST['description'])){
    
     $itemname=$_POST['item_code'];

    $unitsinstock=$_POST['units_in_stock'];

    $unitsinuse=$_POST['units_in_use'];

    $bufferlevel=$_POST['buffer_level'];
    
    $description=$_POST['description'];
    
    mysqli_query($db,"INSERT INTO weaponry(item_code,units_in_stock,units_in_use,buffer_level,description)VALUES('$itemname','$unitsinstock','$unitsinuse',$bufferlevel,'$description')");
}
else{
    echo "Fill all the fields";
}

?>