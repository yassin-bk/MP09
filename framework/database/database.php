<?php

namespace framework\database;

use PDO;

class database
{
    protected $pdo;
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare('Select * From $table;');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}