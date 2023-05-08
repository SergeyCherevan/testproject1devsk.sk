<?php
    namespace Models;

    class BookModel
    {
        public int $id;
        public string $title;
        public string $isbn;
        public float $price;
        public string $category;
        public string $author;
        
        function __construct(
            int $id = 0,
            string $title = '',
            string $isbn = '',
            float $price = 0.0,
            string $category = '',
            string $author = '',
        )
        {
            $this->id = $id;
            $this->title = $title;
            $this->isbn = $isbn;
            $this->price = $price;
            $this->category = $category;
            $this->author = $author;
        }
        
        static function __createByRow($row = [
            'id' => 0,
            'title' => '',
            'isbn' => '',
            'price' => 0.0,
            'category' => 'Beletria',
            'author' => '',
        ]) : object
        {
            $book = new BookModel();

            $book->id = $row['id'];
            $book->title = $row['title'];
            $book->isbn = $row['isbn'];
            $book->price = $row['price'];
            $book->category = $row['category'];
            $book->author = $row['author'];

            return $book;
        }

        function isNotEmpty() : bool
        {
            return $this->title && $this->isbn && $this->price && $this->category && $this->author;
        }
    }
?>