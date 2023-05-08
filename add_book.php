<?php
    include_once 'Repositories/BookRepository.php';

    $book = new \Models\BookModel(
        id: 0,
        title: $_POST["title"],
        isbn: $_POST["isbn"],
        price: $_POST["price"],
        category: $_POST["category"],
        author: $_POST["author"]
    );

    $bookRepo = new \Repositories\BookRepository();

    if ($book->isNotEmpty()) {
        $bookRepo->add($book);
    }

    header('Location: /index.php');
    exit;
?>