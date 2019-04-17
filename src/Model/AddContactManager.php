<?php


namespace App\Model;

class AddContactManager extends AbstractManager
{
    const TABLE = 'form';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    /**
     * @param array $contact
     * @return int
     */
    public function insert(array $contact): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO $this->table 
        (`firstname`, `lastname`, `email`, `yourmessage`) VALUES (:firstname,:lastname,:email,:yourmessage)");
        $statement->bindValue('firstname', $contact[ 'firstname' ], \PDO::PARAM_STR);
        $statement->bindValue('lastname', $contact[ 'lastname' ], \PDO::PARAM_STR);
        $statement->bindValue('email', $contact[ 'email' ], \PDO::PARAM_STR);
        $statement->bindValue('yourmessage', $contact[ 'yourmessage' ], \PDO::PARAM_STR);

        if ($statement->execute()) {
            return (int) $this->pdo->lastInsertId();
        }
    }
}
