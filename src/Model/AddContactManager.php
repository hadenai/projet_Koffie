<?php


namespace App\Model;

class AddContactManager extends AbstractManager
{
    const TABLE = 'form';


    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function insert(array $form): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table (`firstname`, `lastname`, `email`, `yourmessage`) VALUES (:firsname, :lastname, :email, :yourmessage)");
        $statement->bindValue('firstname', $form['firstname'], \PDO::PARAM_STR);
        $statement->bindValue('lastname', $form['lastname'], \PDO::PARAM_STR);
        $statement->bindValue('email', $form['email'], \PDO::PARAM_STR);
        $statement->bindValue('yourmessage', $form['yourmessage'], \PDO::PARAM_STR);
        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }
}
