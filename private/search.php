<?php
    include "connectDB.php";

    $command = new MongoDB\Driver\Command([
        'aggregate' => 'news',
        'pipeline' => [
            ['$search' => ['index' => 'search_news', 'text' => ['query' => $text_query, 'path' => ['wildcard' => '*']]]],
        ],
        'cursor' => new stdClass,
    ]);
    $cursor = $conn->executeCommand('NewDb', $command);
?>