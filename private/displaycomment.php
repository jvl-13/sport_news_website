<?php
include "connectDB.php";

    $filter = [];
    $options = ['sort' => ['timestamp' => -1], 'limit'=>4];

    $query = new MongoDB\Driver\Query($filter, $options);

    $rows = $conn->executeQuery($cmdb, $query); // $mongo contains the connection object to MongoDB

    foreach($rows as $r){
        echo '<div class="mt-4">
        <p class="" style="font-weight: 500;">'.$r->{'username'}.'<span style="margin-left: 0px"> - '.date("d/m/Y", intval($r->{'published'}->__toString())/1000).'</span></p>
        <p class="mx-5">'.$r->{'text'}.'</p>
        </div>';   
    }
?>