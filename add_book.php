<?php
    $title = $_POST["title"];
    $isbn = $_POST["isbn"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $author = $_POST["author"];

    $pdo = new PDO('sqlite:app_data/testproject1devsk.db');

    if ($title && $isbn && $price && $category && $author) {
        $statement = $pdo->query(
            <<< insertQuery
                INSERT INTO 
                    books (title, isbn, price, category, author)
                    VALUES ('$title', '$isbn', '$price', '$category', '$author');
            insertQuery
            );
    }
    
    echo "Názov knihy: <b>$title</b></br>";
    echo "ISBN: <b>$isbn</b></br>";
    echo "Cena: <b>$price</b></br>";
    echo "Kategória: <b>$category</b></br>";
    echo "Autor: <b>$author</b></br>";
?>