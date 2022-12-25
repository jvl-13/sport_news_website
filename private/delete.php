<?php
    include "connectDB.php";

    $id = $_POST['delete_id'];
    $id = new MongoDB\BSON\ObjectID($id);
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->delete( 
        ['_id' => $id]        
    );

    $result = $conn->executeBulkWrite('SportMagazine.news', $bulk);
    if($result)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../php/dashboard.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
?>
