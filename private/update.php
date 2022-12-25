<?php
    include "connectDB.php";

    $id = $_POST['update_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $text = $_POST['content'];
    $date = $_POST['datepicker'];
    $main_image = $_POST['image'];

    
    $id = new MongoDB\BSON\ObjectID($id);
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(
        ['_id' => $id],
        ['$set' => [
            'title' => $title, 
            'author' => $author, 
            'category' => $category, 
            'text' => $text, 
            'thread.main_image' => $main_image,
            'published' => $date]
        ],
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
