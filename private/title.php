<?php
    include "connectDB.php";

    $prop_id = $_GET['prop_id'];
	$filter = ['uuid' => $prop_id];
	$options = [
    ];

	$query = new MongoDB\Driver\Query($filter, $options);

	$rows = $conn->executeQuery('SportMagazine.news', $query); // $mongo contains the connection object to MongoDB
?>