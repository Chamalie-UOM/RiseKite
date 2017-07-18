<?php
include 'dbQstoreconnect.php';




if (!empty($_POST['item_code'])&&!empty($_POST['units_in_stock'])&&!empty($_POST['units_in_use'])&&!empty($_POST['buffer_level'])&&!empty($_POST['description'])){

    
     $item_code=$_POST['item_code'];

    $units_in_stock=$_POST['units_in_stock'];

    $units_in_use=$_POST['units_in_use'];
    
     $buffer_level=$_POST['buffer_level'];
    
    $description=$_POST['description'];
    

}
    
   


    if(strlen($item_code)<'4'){
    echo "<script>alert('Item code is invalid')</script>";
    echo "<script>window.open('modifyammunation.php','_self')</script>";
    
    }
    else {
       mysqli_query($db,"UPDATE ammunation");

        mysqli_query($db,"UPDATE ammunation SET units_in_stock='$units_in_stock',units_in_use='$units_in_use',buffer_level='$buffer_level',description='$description' WHERE item_code='$item_code' ");
    
        echo "<script>window.open('indexinv.html','_self')</script>";
     
    }
    
}
else {
    
    echo "<script>alert('You can't leave a field empty')</script>";
    echo "<script>window.open('modifyammunation.php','_self')</script>";
}
    
    

?>