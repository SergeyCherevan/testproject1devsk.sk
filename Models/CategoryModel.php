<?php
    namespace Models;

    class CategoryModel
    {
        public string $name;
        
        function __construct(string $name = 'Beletria')
        {
            $this->name = $name;
        }
        
        static function __createByRow($row = ['name' => 'Beletria']) : object
        {
            $category = new CategoryModel();

            $category->name = $row['name'];

            return $category;
        }
    }
?>