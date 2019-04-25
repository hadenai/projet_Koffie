<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace App\Model;

use App\Model\CategoryManager;

/**
 *
 */
class CoffiesManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'product';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    /*public function InnerJoinSelectTable(int $coffies): array
    {
    // prepared request
          $statement = $this->pdo->query("SELECT * FROM  $this->table INNER JOIN
        categoryManager::TABLE ON `category_id` = `id`");
           return $statement->execute();
    }*/



    /**
     * @param array $coffies
     * @return int
     */
    public function insert(array $coffies): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`name`, `image`, `details`, `acidity`,
    `caffeine`, `flavor`, `origin`,  `more`,  `price`,  `imageOrigin`, `imageA`, `imageB`, `category_id`) 
        VALUES (:name, :image, :details, :acidity, :caffeine, :flavor, :origin, :more, :price, :imageOrigin, :imageA,
         :imageB, :category_id)");
        $statement->bindValue('name', $coffies['name'], \PDO::PARAM_STR);
        $statement->bindValue('image', $coffies['image'], \PDO::PARAM_STR);
        $statement->bindValue('details', $coffies['details'], \PDO::PARAM_STR);
        $statement->bindValue('acidity', $coffies['acidity'], \PDO::PARAM_STR);
        $statement->bindValue('caffeine', $coffies['caffeine'], \PDO::PARAM_STR);
        $statement->bindValue('flavor', $coffies['flavor'], \PDO::PARAM_STR);
        $statement->bindValue('origin', $coffies['origin'], \PDO::PARAM_STR);
        $statement->bindValue('more', $coffies['more'], \PDO::PARAM_STR);
        $statement->bindValue('price', $coffies['price'], \PDO::PARAM_STR);
        $statement->bindValue('imageOrigin', $coffies['imageOrigin'], \PDO::PARAM_STR);
        $statement->bindValue('imageA', $coffies['imageA'], \PDO::PARAM_STR);
        $statement->bindValue('imageB', $coffies['imageB'], \PDO::PARAM_STR);

        $statement->bindValue('category_id', $coffies['category_id'], \PDO::PARAM_INT);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }


     /**
     * @param int $id
     */
    public function delete(int $id): void
    {
        // prepared request
        $statement = $this->pdo->prepare("DELETE FROM $this->table WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }



    /**
     * @param array $coffies
     * @return bool
     */
    public function update(array $coffies):bool
    {

        // prepared request
        $statement = $this->pdo->prepare("UPDATE $this->table SET `name` = :name, `image` = :image,
        `details` = :details, `acidity` = :acidity, `caffeine` = :caffeine,
         `flavor` = :flavor, `origin` = :origin, `more` = :more, `price` = :price, `imageOrigin` = :imageOrigin,
          `imageA` = :imageA, `imageB` = :imageB, `category_id` = :category_id WHERE id=:id");

        $statement->bindValue('id', $coffies['id'], \PDO::PARAM_INT);
        $statement->bindValue('name', $coffies['name'], \PDO::PARAM_STR);
        $statement->bindValue('image', $coffies['image'], \PDO::PARAM_STR);
        $statement->bindValue('details', $coffies['details'], \PDO::PARAM_STR);
        $statement->bindValue('acidity', $coffies['acidity'], \PDO::PARAM_STR);
        $statement->bindValue('caffeine', $coffies['caffeine'], \PDO::PARAM_STR);
        $statement->bindValue('flavor', $coffies['flavor'], \PDO::PARAM_STR);
        $statement->bindValue('origin', $coffies['origin'], \PDO::PARAM_STR);

        $statement->bindValue('more', $coffies['more'], \PDO::PARAM_STR);
        $statement->bindValue('price', $coffies['price'], \PDO::PARAM_STR);
        $statement->bindValue('imageOrigin', $coffies['imageOrigin'], \PDO::PARAM_STR);
         $statement->bindValue('imageA', $coffies['imageA'], \PDO::PARAM_STR);
        $statement->bindValue('imageB', $coffies['imageB'], \PDO::PARAM_STR);



        $statement->bindValue('category_id', $coffies['category_id'], \PDO::PARAM_INT);


        return $statement->execute();
    }



    public function selectBycat(int $category_id)
    {
        // prepared request
        $statement = $this->pdo->prepare("SELECT * FROM $this->table WHERE category_id= :id");
        /*$statement->bindValue(':id', $id, \PDO::PARAM_INT);*/
        $statement->execute();

        return $statement->fetch();
    }
}
