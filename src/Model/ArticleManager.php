<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 2019-04-10
 * Time: 14:56
 */

namespace App\Model;


class ArticleManager extends AbstractManager
{
    const TABLE = 'article';

    public function __construct()
    {
        parent::__construct(SELF::TABLE);
    }
}