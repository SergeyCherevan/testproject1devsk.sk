<?php
    $pdo = new PDO('sqlite:app_data/testproject1devsk.db');

    $statement = $pdo->query('SELECT * FROM books');
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    $json_data = json_encode($results);
    header('Content-Type: application/json');
    echo $json_data;
?>