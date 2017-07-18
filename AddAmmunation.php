<?php include 'dbQStoreconnect.php';


if (!empty($_POST['item_code'])&&!empty($_POST['units_in_stock'])&&!empty($_POST['units_in_use'])&&!empty($_POST['buffer_level'])&&!empty($_POST['description'])){
    
     $itemname=$_POST['item_code'];

    $unitsinstock=$_POST['units_in_stock'];

    $unitsinuse=$_POST['units_in_use'];

    $bufferlevel=$_POST['buffer_level'];
    
    $description=$_POST['description'];
    
    if(strlen($itemname)<'4'){
    echo "<script>alert('Item code is invalid')</script>";
    echo "<script>window.open('addammunation1.php','_self')</script>";
    
    }
    else {
        mysqli_query($db,"INSERT INTO ammunation(item_code,units_in_stock,units_in_use,buffer_level,description)VALUES('$itemname','$unitsinstock','$unitsinuse',$bufferlevel,'$description')");
        
        echo "<script>window.open('indexinv.html','_self')</script>";
         }
}
else{
    echo "<script>alert('Fill all fields')</script>";
    echo "<script>window.open('addammunation1.php','_self')</script>";
    }

?>