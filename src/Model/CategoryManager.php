<?php


namespace App\Model;

class CategoryManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
