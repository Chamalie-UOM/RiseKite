<?php
include "dbcon.php";
$sql = "UPDATE personalInfo SET lastName='Doe' WHERE id='1234'";

if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $link->error;
}

?>
