<?php
    include "connectDB.php";

    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $text = $_POST['content'];
    $date = $_POST['datepicker'];
    echo $date;
    $main_image = $_POST['image'];
    
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert(
        [
            'title' => $title, 
            'author' => $author, 
            'category' => $category, 
            'text' => $text, 
            'thread.main_image' => $main_image,
            'published' => $date],
    );

    $result = $conn->executeBulkWrite('SportMagazine.news', $bulk);
    if($result)
        {
            echo '<script> alert("Data Updated"); </script>';
            //header("Location:../php/dashboard.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
?>
