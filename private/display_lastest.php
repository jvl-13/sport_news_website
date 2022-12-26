<?php
include "connectDB.php";

    $filter = [];
    $options = ['sort' => ['timestamp' => -1], 'limit'=>4];

    $query = new MongoDB\Driver\Query($filter, $options);

    $rows = $conn->executeQuery($db, $query); // $mongo contains the connection object to MongoDB

    foreach($rows as $r){
        echo '<article class="row mt-3">
        <h4 class="col-2 fs-6 align-self-center">'.date("d/m/Y", intval($r->{'published'}->__toString())/1000).'</h4>

        <div class="col-5 ">
            <a href="../php/content-news.php?prop_id='.$r->{'_id'}.'">
                <h2 class="" style="font-size: 17px; font-family: var(--heading); display: block; height: 83px; overflow: hidden; ">'.
                    $r->{'title'}.
                '</h2>
            </a>

            <p style="font-size: 14px; text-align: justify; display: block; height: 105px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole.</p>
            <p style="font-size: 14px; height: 10px;"> <img src="../assests/eye.png" style="width: 20px; height: 20px;"/>'.$r->{'view'}.' views</p>
            <a style="font-size: 14px; color: var(--primary-color);" href="../php/content-news.php?prop_id='.$r->{'_id'}.'">Read More<span> >></span></a>
        </div>
           
        <div class="col-5 align-self-center">
            <img src="'.$r->{'main_image'}.'" class="img-thumbnail "/>
        </div>

        <hr>
    </article>';   
    }
?>