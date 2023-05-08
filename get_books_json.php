<?php
    include_once 'Repositories/BookRepository.php';

    $bookRepo = new \Repositories\BookRepository();

    $results = $bookRepo->getAll();

    $json_data = json_encode($results);
    header('Content-Type: application/json');
    echo $json_data;
?>