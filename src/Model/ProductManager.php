<?php

namespace App\Model;

class ProductManager extends AbstractManager
{
    const TABLE = 'product';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }



    public function selectProductWithCategoryName()
    {
        $statement = $this->pdo->query("SELECT * FROM  
        $this->table  JOIN category ON product.category_id = category.id");
        return $statement->fetchAll();
    }
}
