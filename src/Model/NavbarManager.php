<?php


namespace App\Model;

class NavbarManager extends AbstractManager
{
    const TABLE= 'navbar';
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
