<?php
    include "connectDB.php";

	$filter = [];
	$options = ['sort'=>array('_id'=>-1),'limit'=>4];

	$query = new MongoDB\Driver\Query($filter, $options);

	$rows = $conn->executeQuery($db, $query); // $mongo contains the connection object to MongoDB

	foreach($rows as $r){
			echo '<a href="content-news.php?prop_id='.$r->{'_id'}.'" class=""><h3 class="fs-6 mb-3 position-relative"><h3 class="fs-6 mb-3 position-relative">'.
			$r->{'title'}.
			'<span class="d-block fs-6" style="font-family: var(--heading); font-weight:300">'.
			date("d/m/Y", intval($r->{'published'}->__toString())/1000).
			'</span></h3></a>';
	}
?>