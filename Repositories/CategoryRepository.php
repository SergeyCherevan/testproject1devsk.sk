<?php
    namespace Repositories;

    include_once 'Models/CategoryModel.php';
    
    include_once 'config.php';

    class CategoryRepository
    {
        public object $pdo;
        
        function __construct()
        {
            $this->pdo = new \PDO(DB_CONNECTION_STRING);
        }

        function getAll() : array
        {
            $statement = $this->pdo->query('SELECT * FROM categories');
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

            $categoryArray = [];

            foreach ($results as $row) {
                $categoryArray[] = \Models\CategoryModel::__createByRow($row);
            }

            return $categoryArray;
        }
    }
?>