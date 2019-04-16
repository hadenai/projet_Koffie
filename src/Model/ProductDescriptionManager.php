<?php

namespace App\Model;

class ProductDescriptionManager extends AbstractManager
{
    const TABLE = 'product';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
