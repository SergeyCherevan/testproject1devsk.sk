<?php
    namespace Repositories;

    include_once 'Models/BookModel.php';
    
    include_once 'config.php';

    class BookRepository
    {
        public object $pdo;
        
        function __construct()
        {
            $this->pdo = new \PDO(DB_CONNECTION_STRING);
        }

        function add(object $book)
        {
            $this->pdo->query(
                <<< insertQuery
                    INSERT INTO 
                        books (title, isbn, price, category, author)
                        VALUES ('$book->title', '$book->isbn', '$book->price', '$book->category', '$book->author');
                insertQuery
            );
        }

        function getAll() : array
        {
            $statement = $this->pdo->query('SELECT * FROM books');
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

            $bookArray = [];

            foreach ($results as $row) {
                $bookArray[] = new \Models\BookModel($row);
            }

            return $bookArray;
        }
    }
?>