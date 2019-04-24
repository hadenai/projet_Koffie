<?php

namespace App\Model;

class ProductManager extends AbstractManager
{
    const TABLE = 'product';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function selectOneById(int $id)
    {
        $statement = $this->pdo->query("SELECT * FROM product WHERE id=$id");

        return $statement->fetch();
    }
}
