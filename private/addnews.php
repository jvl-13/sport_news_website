<?php
    include "connectDB.php";

    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $text = $_POST['content'];
    $date = $_POST['datepicker'];
    $main_image = $_POST['main_image'];
    
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert([
            'title' => $title, 
            'author' => $author, 
            'category' => $category, 
            'text' => $text, 
            'main_image' => $main_image,
            'published' => $date,
            'view' => 0
        ],
    );

    $result = $conn->executeBulkWrite($db, $bulk);
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
