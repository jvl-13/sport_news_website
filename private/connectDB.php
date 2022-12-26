<?php
    try{
            $conn = new MongoDB\Driver\Manager("mongodb+srv://clownrabit:thanhvuong1@sportmagazine.mvvp9gm.mongodb.net/test");
            $db = "NewDb.news";
            $userdb = "NewDb.user";
            $cmdb = "NewDb.comment";
        } catch (MongoDBDriverExceptionException $e) {
            echo 'Failed to connect to MongoDB, is the service intalled and running?<br /><br />';
            echo $e->getMessage();
            exit();
        }
?>