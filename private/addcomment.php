<?php
    include "connectDB.php";
    session_start();
    $userid = $_SESSION['login-user'];
    $newsid = $_SESSION['newsid'];
    $comment = $_POST['comment'];
    
    $today = strval(date("m/d/Y")); 
    $date_created = new \MongoDB\BSON\UTCDateTime(strtotime($today)*1000);
    
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert([
        'username' => $userid, 
        'newsid' => $newsid, 
        'text' => $comment, 
        'published' => $date_created, 
        ],
    );
    $result = $conn->executeBulkWrite($cmdb, $bulk);
    if($result)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../php/content-news.php");     
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
?>
