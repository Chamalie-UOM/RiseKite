<?php
include 'dbQstoreconnect.php';


if (isset($_POST['item_name'])&&isset($_POST['item_type'])&&isset($_POST['units_in_use'])){
    
     $item_name=$_POST['item_name'];

    $item_type=$_POST['item_type'];

    $units_in_use=$_POST['units_in_use'];
    
}
    
    mysqli_query($db,"UPDATE equipment");


mysqli_query($db,"UPDATE equipment SET item_type='$item_type',units_in_use='$units_in_use' WHERE item_name='$item_name' ");

?>